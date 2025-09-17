<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $userMessage = $request->input('message');

        // Predefined context for the chatbot
        $context = "You are a helpful assistant. Only answer questions related to courses, programs, and department details.";
        // Call Google's Generative Language API (text-bison) using the single Google API key
        try {
            $apiKey = env('GOOGLE_API_KEY');
            $endpoint = 'https://generativelanguage.googleapis.com/v1beta2/models/text-bison-001:generate?key=' . $apiKey;

            $payload = [
                'prompt' => [
                    'text' => $context . "\nUser: " . $userMessage . "\nAssistant:",
                ],
                'maxOutputTokens' => 256,
            ];

            $response = Http::post($endpoint, $payload);

            $body = $response->json();

            // Try several keys depending on API shape
            $reply = null;
            if (isset($body['candidates']) && is_array($body['candidates']) && isset($body['candidates'][0]['content'])) {
                $reply = $body['candidates'][0]['content'];
            } elseif (isset($body['completion']) && isset($body['completion']['output'])) {
                $reply = $body['completion']['output'];
            } elseif (isset($body['output']) && is_string($body['output'])) {
                $reply = $body['output'];
            } elseif (isset($body['candidates'][0]['output'])) {
                $reply = $body['candidates'][0]['output'];
            }

            $reply = $reply ?? 'Sorry, I could not generate an answer right now.';

            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            // Log error (optional) and return friendly message
            logger()->error('Chatbot error: ' . $e->getMessage());
            return response()->json(['reply' => 'Sorry, the chatbot service is temporarily unavailable.']);
        }
    }
}
