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
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .card-hover { transition: all 0.3s ease; }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
    }
    .nav-link { position: relative; transition: all 0.3s ease; }
    .nav-link::after {
      content: ''; position: absolute; width: 0; height: 2px; bottom: -5px; left: 50%;
      background-color: #3b82f6; transition: all 0.3s ease; transform: translateX(-50%);
    }
    .nav-link:hover::after, .nav-link.active::after { width: 100%; }
  </style>
</head>

<body class="font-sans antialiased bg-gray-50">
  <!-- Header -->
  <header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <a href="{{ route('department.index') }}" class="flex items-center">
          <div class="w-12 h-12 rounded-full p-[2px] bg-gradient-to-r from-sky-400 to-purple-500">
            <div class="flex items-center justify-center w-full h-full rounded-full bg-white">
              <img src="{{ asset('logo2.ico') }}" alt="Logo" class="w-8 h-8 object-contain"/>
            </div>
          </div>
          <div class="ml-3">
            <h1 class="text-xl font-bold text-gray-900">GM UNIVERSITY</h1>
            <p class="text-sm text-gray-600">Innovating Minds</p>
          </div>
        </a>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-8">
          <a href="{{ route('department.index') }}" class="nav-link {{ request()->routeIs('department.index') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Home</a>
          <a href="{{ route('department.about') }}" class="nav-link {{ request()->routeIs('department.about') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">About</a>
          <a href="{{ route('department.faculty') }}" class="nav-link {{ request()->routeIs('department.faculty') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Faculty</a>
          <a href="{{ route('department.programs') }}" class="nav-link {{ request()->routeIs('department.programs') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Programs</a>
          <a href="{{ route('department.research') }}" class="nav-link {{ request()->routeIs('department.research') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Research</a>
          <a href="{{ route('department.placement') }}" class="nav-link {{ request()->routeIs('department.placement') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Placement</a>
          <a href="{{ route('department.alumni') }}" class="nav-link {{ request()->routeIs('department.alumni') ? 'active text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Alumni</a>
        </nav>
      </div>
    </div>
  </header>

  <main>@yield('content')</main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white mt-8">
    <div class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-4 gap-8">
      <div class="md:col-span-2">
        <h3 class="text-lg font-bold mb-2">Department of Data Science</h3>
        <p class="text-gray-300">Committed to excellence in Data Science education, research, and innovation.</p>
      </div>
      <div>
        <h4 class="font-semibold mb-2">Quick Links</h4>
        <ul class="space-y-1 text-gray-300">
          <li><a href="{{ route('department.about') }}" class="hover:text-white">About Us</a></li>
          <li><a href="{{ route('department.programs') }}" class="hover:text-white">Programs</a></li>
          <li><a href="{{ route('department.faculty') }}" class="hover:text-white">Faculty</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-2">Contact</h4>
        <p class="text-gray-300"><i class="fas fa-envelope mr-2"></i>cs@university.edu</p>
      </div>
    </div>
    <div class="text-center border-t border-gray-700 py-4 text-gray-400">&copy; {{ date('Y') }} GM University</div>
  </footer>

  <!-- Chatbot Button -->
  <div id="chatbot-button"
       class="fixed bottom-4 right-4 bg-blue-600 text-white p-3 rounded-full shadow-lg cursor-pointer hover:bg-blue-700"
       onclick="toggleChatModal()">
    Chat with Us
  </div>

  <!-- Chat Modal -->
  <div id="chatbot-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-96 p-4 rounded-lg shadow-lg">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-bold">Ask About Courses</h3>
        <button class="text-gray-500 hover:text-gray-700" onclick="toggleChatModal()">&times;</button>
      </div>
      <div id="chatbot-messages" class="h-64 overflow-y-auto border p-2 mb-4 bg-gray-100 rounded"></div>
      <div class="flex">
        <input id="chatbot-input" type="text" class="flex-1 border rounded-l p-2" placeholder="Type your question...">
        <button class="bg-blue-600 text-white px-4 rounded-r" onclick="sendChatMessage()">Send</button>
      </div>
    </div>
  </div>

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script>
    function toggleChatModal() {
      document.getElementById('chatbot-modal').classList.toggle('hidden');
    }

    async function sendChatMessage() {
      const input = document.getElementById('chatbot-input');
      const messages = document.getElementById('chatbot-messages');
      const userMessage = input.value.trim();
      if (!userMessage) return;

      appendMessage(`You: ${userMessage}`, 'text-blue-800');
      input.value = '';

      try {
        const response = await fetch('/chatbot', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({ message: userMessage })
        });

        if (!response.ok) throw new Error('Network error');
        const data = await response.json();
        appendMessage(`Bot: ${data.reply}`, 'text-gray-800');
      } catch (error) {
        appendMessage('Bot: Unable to process your request.', 'text-red-600');
      }
    }

    function appendMessage(text, classes = '') {
      const messages = document.getElementById('chatbot-messages');
      const div = document.createElement('div');
      div.textContent = text;
      div.className = `mb-2 ${classes}`;
      messages.appendChild(div);
      messages.scrollTop = messages.scrollHeight;
    }
  </script>
</body>
</html>
