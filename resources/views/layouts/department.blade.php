<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Department of Computer Science') - {{ config('app.name', 'University') }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">


    <!-- Custom Styles -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #3b82f6;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <!-- Alpine scope wraps everything -->
    <header x-data="{ mobileMenuOpen: false }" class="bg-white shadow-lg sticky top-0 z-50
">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="{{ route('department.index') }}" class="flex items-center">
                            <div class="w-12 h-12 rounded-full p-[2px] bg-gradient-to-r from-sky-400 to-purple-500">
                                <div class="flex items-center justify-center w-full h-full rounded-full bg-white">
                                    <img src="{{ asset('logo2.ico') }}" alt="Logo" class="w-8 h-8 object-contain" />
                                </div>
                            </div>
                            <div class="ml-3">
                                <h1 class="text-xl font-bold text-gray-900">GM UNIVERSITY</h1>
                                <p class="text-sm text-gray-600">Innovating Minds</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('department.index') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="{{ route('department.about') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                    <a href="{{ route('department.faculty') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Faculty</a>
                    <a href="{{ route('department.programs') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Programs</a>
                    <a href="{{ route('department.research') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Research</a>
                    <a href="{{ route('department.iqac') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">IQAC</a>
                    <a href="{{ route('department.placement') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Placement</a>
                    <a href="{{ route('department.alumni') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Alumni</a>
                    <a href="{{ route('department.faculty-achievements') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Achievements</a>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" class="md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('department.index') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Home</a>
                <a href="{{ route('department.about') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">About</a>
                <a href="{{ route('department.faculty') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Faculty</a>
                <a href="{{ route('department.programs') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Programs</a>
                <a href="{{ route('department.research') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Research</a>
                <a href="{{ route('department.iqac') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">IQAC</a>
                <a href="{{ route('department.placement') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Placement</a>
                <a href="{{ route('department.alumni') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Alumni</a>
                <a href="{{ route('department.faculty-achievements') }}"
                    class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-blue-600 rounded-md">Achievements</a>
            </div>
        </div>
    </header>

    <!-- Make sure Alpine.js is loaded -->



    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Department Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 rounded-lg flex items-center justify-center overflow-hidden bg-gradient-to-r from-blue-600 to-purple-600">
                            <img src="{{ asset('logo.ico') }}" alt="Department Logo"
                                class="w-full h-full object-cover rounded-lg" />
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-bold">Department of Data Science</h3>
                            <p class="text-sm text-white-400">GM University</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Committed to excellence in Data science education, research, and innovation.
                        Preparing the next generation of technology leaders.
                    </p>
                    <div class="flex space-x-4">
                        <!-- <a href="https://facebook.com/" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook text-xl"></i>
                        </a> -->

                        <a href="https://www.facebook.com/people/GM-University/61557598646220/" target="_blank"
                            rel="noopener noreferrer" class="hover:opacity-80">
                            <img src="{{ asset('footer/facebook.png') }}" alt="X" class="w-5 h-5">
                        </a>
                        <!-- <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a> -->
                        <a href="https://x.com/" target="_blank" rel="noopener noreferrer" class="hover:opacity-80">
                            <img src="{{ asset('footer/x.png') }}" alt="X" class="w-5 h-5">
                        </a>

                        <!-- <a href="https://linkedin.com/" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://instagram.com/" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a> -->
                        <a href="https://linkedin.com/company/gmu.ac.in/" target="_blank" rel="noopener noreferrer"
                            class="hover:opacity-80">
                            <img src="{{ asset('footer/linkedin.png') }}" alt="X" class="w-5 h-5">
                        </a>
                        <a href="https://www.instagram.com/gmuniversity_official_set_dvg" target="_blank"
                            rel="noopener noreferrer" class="hover:opacity-80">
                            <img src="{{ asset('footer/instagram.png') }}" alt="X" class="w-5 h-5">
                        </a>
                        <a href="https://whatsapp.com/" target="_blank" rel="noopener noreferrer"
                            class="hover:opacity-80">
                            <img src="{{ asset('footer/whatsapp.png') }}" alt="X" class="w-5 h-5">
                        </a>
                        <a href="https://telegram.org/" target="_blank" rel="noopener noreferrer"
                            class="hover:opacity-80">
                            <img src="{{ asset('footer/telegram.png') }}" alt="X" class="w-5 h-5">
                        </a>
                        <a href="http://youtube.com/@GMUDVG" target="_blank" rel="noopener noreferrer"
                            class="hover:opacity-80">
                            <img src="{{ asset('footer/youtube.png') }}" alt="X" class="w-5 h-5">
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('department.about') }}" class="text-gray-300 hover:text-white">About
                                Us</a></li>
                        <li><a href="{{ route('department.programs') }}"
                                class="text-gray-300 hover:text-white">Programs</a></li>
                        <li><a href="{{ route('department.faculty') }}"
                                class="text-gray-300 hover:text-white">Faculty</a></li>
                        <li><a href="{{ route('department.research') }}"
                                class="text-gray-300 hover:text-white">Research</a></li>
                        <li><a href="{{ route('department.admission') }}"
                                class="text-gray-300 hover:text-white">Admission</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <!-- <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>University Campus, City</p>
                        <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i>cs@university.edu</p>
                        <p><i class="fas fa-globe mr-2"></i>www.university.edu/cs</p>
                    </div>
                </div> -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <!-- Location: Opens Google Maps -->
                        <p>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <a href="https://maps.app.goo.gl/MzxvQf3Dqu4mrnip9" target="_blank"
                                rel="noopener noreferrer" class="hover:underline">
                                University Campus, City
                            </a>
                        </p>

                        <!-- Phone: Opens Dialer -->
                        <p>
                            <i class="fas fa-phone mr-2"></i>
                            <a href="tel:18001237099" class="hover:underline">
                                1800 123 7099
                            </a>
                        </p>

                        <!-- Email: Opens Gmail/Email Client -->
                        <p>
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="mailto: info@gmu.ac.in" class="hover:underline">
                                info@gmu.ac.in
                            </a>
                        </p>

                        <!-- Website: Opens in New Tab -->
                        <p>
                            <i class="fas fa-globe mr-2"></i>
                            <a href="https://gmu.ac.in" target="_blank" rel="noopener noreferrer"
                                class="hover:underline">
                                www.gmu.ac.in
                            </a>
                        </p>
                    </div>
                </div>

            </div>

            <!-- <div class="max-w-7xl mx-auto px-4 text-center py-6">
                
                <p class="flex flex-wrap items-center justify-center gap-2 text-sm sm:text-base mb-2">
                    ✨
                    <span>Developed by</span>
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-pink-400 via-red-500 to-yellow-500 font-bold">
                        Department of Data Science
                    </span>
                    <span
                        class="text-pink-500 animate-pulse hover:scale-125 hover:rotate-12 transition-transform duration-300 cursor-default">
                        ❤️
                    </span>
                    <span class="italic">Made with passion & a bit of craziness!</span>
                    ✨
                </p>

                
                <div class="border-t border-gray-800 pt-4">
                    <p class="text-xs sm:text-sm text-gray-400">
                        &copy; {{ date('Y') }} Department of Data Science. All rights reserved.
                    </p>
                </div>
            </div> -->


            <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

            <div class="max-w-7xl mx-auto px-4 text-center py-6">

                <p
                    class="flex flex-wrap items-center justify-center gap-2 text-sm sm:text-base mb-2 font-[Orbitron] tracking-wide">
                    <span class="animate-spin-slow text-gray-400">⚙️</span>
                    <span class="text-gray-200">Crafted & deployed by</span>
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-pink-400 via-red-500 to-yellow-500 font-bold animate-gradient-x">
                        Department of Data Science
                    </span>
                    <span
                        class="text-pink-500 animate-pulse hover:scale-125 hover:rotate-12 transition-transform duration-300 cursor-default">
                        ❤️
                    </span>
                    <span class="italic text-gray-300">Powered by algorithms, caffeine & creativity</span>
                    <span class="animate-spin-slow text-gray-400">⚙️</span>
                </p>


                <div class="border-t border-gray-800 pt-4">
                    <p class="text-xs sm:text-sm text-gray-400 font-[Orbitron]">
                        &copy; {{ date('Y') }} Department of Data Science in GM Universiy. All rights reserved.
                    </p>
                </div>
            </div>


            <style>
                @keyframes spin-slow {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                .animate-spin-slow {
                    display: inline-block;
                    animation: spin-slow 8s linear infinite;
                }


                @keyframes gradient-x {

                    0%,
                    100% {
                        background-position: 0% 50%;
                    }

                    50% {
                        background-position: 100% 50%;
                    }
                }

                .animate-gradient-x {
                    background-size: 200% 200%;
                    animation: gradient-x 6s ease infinite;
                }
            </style>




        </div>
    </footer>

    <!-- Chatbot Button -->
    <div id="chatbot-button"
        class="fixed bottom-4 right-4 bg-blue-600 text-white p-3 rounded-full shadow-lg cursor-pointer hover:bg-blue-700"
        onclick="toggleChatModal()">
        Chat with Us
    </div>

    <!-- Chat Modal -->
    <!-- Chat Modal -->
    <!-- Chat Modal -->
    <div id="chatbot-modal"
        class="hidden fixed inset-0 bg-gray-700 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md p-4 rounded-lg shadow-lg border border-gray-200">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4 border-b pb-2">
                <h3 class="text-lg font-semibold text-gray-800">Department Chatbot</h3>
                <div class="flex items-center gap-3">
                    <!-- Voice Toggle -->
                    <label class="flex items-center text-sm text-gray-600 cursor-pointer">
                        <input id="voice-toggle" type="checkbox" class="mr-1">
                        Bot Voice
                    </label>
                    <button class="text-gray-500 hover:text-gray-700" onclick="toggleChatModal()">✖</button>
                </div>
            </div>

            <!-- Messages -->
            <div id="chatbot-messages"
                class="h-72 overflow-y-auto p-3 mb-4 rounded-lg bg-gray-50 border text-sm space-y-2">
            </div>

            <!-- Input Area -->
            <div class="flex items-center gap-2">
                <input id="chatbot-input" type="text"
                    class="flex-1 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Type or speak your message..." />
                <button id="mic-btn" class="p-2 bg-gray-200 hover:bg-gray-300 rounded-lg" title="Speak">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 1v10m0 0a3 3 0 01-3-3V5a3 3 0 016 0v3a3 3 0 01-3 3zm0 0v4m-4 4h8" />
                    </svg>
                </button>
                <button class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-white font-medium"
                    onclick="sendChatMessage()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10l9-6 9 6-9 6-9-6zm0 10l9-6 9 6" />
                    </svg>
                    Send
                </button>
            </div>
            <div id="listening-indicator" class="text-xs text-blue-600 mt-2 hidden">Listening...</div>
        </div>
    </div>

    <script>
        const synth = window.speechSynthesis;
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = SpeechRecognition ? new SpeechRecognition() : null;
        const inputField = document.getElementById('chatbot-input');
        const indicator = document.getElementById('listening-indicator');
        const voiceToggle = document.getElementById('voice-toggle');
        let silenceTimer = null;
        let stopTimer = null;

        function toggleChatModal() {
            document.getElementById('chatbot-modal').classList.toggle('hidden');
        }

        async function sendChatMessage(userText) {
            const messages = document.getElementById('chatbot-messages');
            const text = userText || inputField.value.trim();
            if (!text) return;

            const userDiv = document.createElement('div');
            userDiv.className = 'text-right';
            userDiv.innerHTML = `<span class="inline-block bg-blue-600 text-white px-3 py-2 rounded-lg">${text}</span>`;
            messages.appendChild(userDiv);
            messages.scrollTop = messages.scrollHeight;
            inputField.value = '';

            try {
                const res = await fetch('/chatbot', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message: text })
                });
                const data = await res.json();
                const botReply = data.reply || 'No response available.';

                const botDiv = document.createElement('div');
                botDiv.className = 'text-left';
                botDiv.innerHTML = `<span class="inline-block bg-gray-200 px-3 py-2 rounded-lg text-gray-800">${botReply}</span>`;
                messages.appendChild(botDiv);
                messages.scrollTop = messages.scrollHeight;

                // Speak only if toggle is ON
                if (voiceToggle.checked && synth && botReply) {
                    const utter = new SpeechSynthesisUtterance(botReply);
                    utter.voice = synth.getVoices().find(v => v.lang.startsWith('en')) || null;
                    synth.speak(utter);
                }
            } catch (err) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'text-left text-red-600';
                errorDiv.textContent = 'Bot: Unable to process your request.';
                messages.appendChild(errorDiv);
            }
        }

        const micBtn = document.getElementById('mic-btn');
        if (recognition) {
            recognition.continuous = true;
            recognition.interimResults = true;
            recognition.lang = 'en-US';

            recognition.onstart = () => {
                indicator.classList.remove('hidden');
                inputField.placeholder = "Listening...";
                clearTimers();
            };

            recognition.onresult = e => {
                let interimTranscript = '';
                let finalTranscript = '';
                for (let i = e.resultIndex; i < e.results.length; i++) {
                    const transcript = e.results[i][0].transcript;
                    if (e.results[i].isFinal) {
                        finalTranscript += transcript + ' ';
                    } else {
                        interimTranscript += transcript;
                    }
                }
                inputField.value = finalTranscript || interimTranscript;

                clearTimers();
                silenceTimer = setTimeout(() => {
                    if (inputField.value.trim()) sendChatMessage(inputField.value.trim());
                }, 2000);
                stopTimer = setTimeout(() => recognition.stop(), 5000);
            };

            recognition.onend = () => {
                indicator.classList.add('hidden');
                inputField.placeholder = "Type or speak your message...";
                clearTimers();
            };

            recognition.onerror = e => {
                indicator.classList.add('hidden');
                clearTimers();
                alert('Voice recognition error: ' + e.error);
            };

            micBtn.addEventListener('click', () => {
                if (indicator.classList.contains('hidden')) {
                    recognition.start();
                } else {
                    recognition.stop();
                }
            });

            function clearTimers() {
                if (silenceTimer) clearTimeout(silenceTimer);
                if (stopTimer) clearTimeout(stopTimer);
            }
        } else {
            micBtn.disabled = true;
            micBtn.title = 'Voice recognition not supported in this browser.';
        }
    </script>


    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>