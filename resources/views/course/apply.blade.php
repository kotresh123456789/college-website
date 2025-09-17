@extends('layouts.department')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4">
    <div class="max-w-md w-full bg-white shadow-md rounded-lg p-8">
        @if(isset($courseName))
            <h2 class="mb-6 text-center text-3xl font-extrabold text-gray-900">{{ $courseName }} <span class="text-lg font-normal block">Course you are applying for</span></h2>
        @else
            <h2 class="mb-6 text-center text-3xl font-extrabold text-gray-900">Course Application</h2>
        @endif

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('course.apply.submit') }}" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input id="name" name="name" type="text" required value="{{ old('name') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input id="phone" name="phone" type="text" required value="{{ old('phone') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input id="email" name="email" type="email" required value="{{ old('email') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location <span class="text-sm text-gray-500">(GPS or manual entry)</span></label>
                <div class="flex">
                    <input id="location" name="location" type="text" required value="{{ old('location') }}" class="mt-1 block flex-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <button type="button" onclick="getLocation()" class="ml-2 mt-1 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none">Get My Location</button>
                </div>
                @error('location') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Submit Application
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Load Google Maps JS with callback for Places -->
<script>
function initMapsCallback() {
    const input = document.getElementById('location');
    if (!input) return;

    try {
        // Initialize Places Autocomplete using the new API
        const pae = new google.maps.places.PlaceAutocompleteElement({
            element: input,
            types: ['geocode'],
            fields: ['formatted_address', 'geometry']
        });
        
        pae.addListener('place_changed', () => {
            const place = pae.getPlace();
            if (place?.formatted_address) {
                input.value = place.formatted_address;
            } else if (place?.geometry?.location) {
                input.value = `${place.geometry.location.lat()}, ${place.geometry.location.lng()}`;
            }
        });

        // Style the generated element to match Tailwind classes
        const wrapper = input.closest('.gm-style');
        if (wrapper) {
            wrapper.classList.add('mt-1', 'block', 'w-full', 'rounded-md', 'border-gray-300', 'shadow-sm');
        }
    } catch (e) {
        console.warn('Places autocomplete initialization failed:', e);
        // Fallback to basic input if Places API fails
        input.setAttribute('type', 'text');
        input.setAttribute('placeholder', 'Enter location or coordinates');
    }

    // Prepare a Geocoder for reverse geocoding
    window.__geocoder = new google.maps.Geocoder();
}

function loadGoogleMaps() {
    const apiKey = '{{ env('GOOGLE_API_KEY') }}';
    
    // Add script with async loading pattern
    window.initMapsCallback = initMapsCallback;
    const loader = document.createElement('script');
    loader.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places&callback=initMapsCallback&loading=async`;
    document.head.appendChild(loader);
}

// Convert coordinates to readable address before form submit if needed
async function convertCoordsIfNeeded() {
    const input = document.getElementById('location');
    const val = input.value.trim();
    if (/^-?\d+(\.\d+)?\s*,\s*-?\d+(\.\d+)?$/.test(val)) {
        if (window.__geocoder) {
            return new Promise((resolve) => {
                const parts = val.split(',');
                const latlng = { lat: parseFloat(parts[0]), lng: parseFloat(parts[1]) };
                window.__geocoder.geocode({ location: latlng }, (results, status) => {
                    if (status === 'OK' && results[0]) {
                        input.value = results[0].formatted_address;
                        resolve(true);
                    } else {
                        resolve(false);
                    }
                });
            });
        }
    }
    return false;
}

// Attach submit handler
document.addEventListener('DOMContentLoaded', function () {
    loadGoogleMaps();
    const form = document.querySelector('form[action="{{ route('course.apply.submit') }}"]');
    if (form) {
        form.addEventListener('submit', async function (e) {
            await convertCoordsIfNeeded();
            // allow submit to continue
        });
    }
});

// Provide a global getLocation used by the button onclick
function getLocation() {
    const input = document.getElementById('location');
    if (!input) return alert('Location input not found');

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const coords = position.coords.latitude + ', ' + position.coords.longitude;
            // Reverse-geocode using client-side geocoder if available
            if (window.__geocoder) {
                const latlng = { lat: position.coords.latitude, lng: position.coords.longitude };
                window.__geocoder.geocode({ location: latlng }, (results, status) => {
                    if (status === 'OK' && results && results[0]) {
                        input.value = results[0].formatted_address;
                    } else {
                        // Fallback to coordinates when geocoding fails
                        input.value = coords;
                    }
                });
            } else {
                input.value = coords;
            }
        }, function(error) {
            alert('Unable to retrieve your location.');
        });
    } else {
        alert('Geolocation is not supported by this browser.');
    }
}
</script>
@endsection
