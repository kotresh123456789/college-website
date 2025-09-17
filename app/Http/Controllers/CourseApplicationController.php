<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseApplication;
use Illuminate\Support\Facades\Http;

class CourseApplicationController extends Controller
{
    public function showForm(Request $request)
    {
        $courseName = $request->query('course');
        return view('course.apply', compact('courseName'));
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Convert GPS coordinates to a readable address (if coordinates were submitted)
        if (preg_match('/^-?\d+(\.\d+)?,-?\d+(\.\d+)?$/', $validated['location'])) {
            $coordinates = explode(',', $validated['location']);
            try {
                $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
                    'latlng' => trim($coordinates[0]) . ',' . trim($coordinates[1]),
                    'key' => env('GOOGLE_API_KEY'),
                ]);

                if ($response->ok()) {
                    $body = $response->json();
                    $address = $body['results'][0]['formatted_address'] ?? null;
                    if ($address) {
                        $validated['location'] = $address;
                    }
                }
            } catch (\Exception $e) {
                // If geocoding fails, keep the raw coordinates
                logger()->warning('Geocoding failed: ' . $e->getMessage());
            }
        }

        CourseApplication::create($validated);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
