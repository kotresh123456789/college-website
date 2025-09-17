@extends('layouts.department')

@section('title', 'Home')

@section('content')
  <!-- Hero Section -->
  <!-- <section class="relative bg-[url('indexpagephotos/bg.png')] bg-cover bg-center bg-no-repeat text-white py-20"> -->
  <!-- Optional dark overlay for readability -->
  <!-- <div class="absolute inset-0 bg-black/40"></div> 

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6">
        Department of Data Science
      </h1>
      <p class="text-xl md:text-2xl mb-8 text-blue-100">
        Excellence in Education, Research & Innovation
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('department.about') }}" 
           class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
          Learn More
        </a>
        <a href="{{ route('department.programs') }}" 
           class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
          Our Programs
        </a>
      </div>
    </div> -->
  <!-- </section> -->
  <!-- <section class="relative bg-[url('indexpagephotos/bg.png')] bg-cover bg-center bg-no-repeat text-white py-20">

    <div class="absolute inset-0 bg-black/40"></div> 

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" style="font-family: 'Orbitron', sans-serif;">
      <h1 class="text-4xl md:text-6xl font-bold mb-6">
        Department of Data Science
      </h1>
      <p class="text-xl md:text-2xl mb-8 text-blue-100">
        Excellence in Education, Research & Innovation
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('department.about') }}" 
           class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
          Learn More
        </a>
        <a href="{{ route('department.programs') }}" 
           class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
          Our Programs
        </a>
      </div>
    </div>
  </section> -->

  <!-- Include Orbitron font for a technical style -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

  <section class="relative overflow-hidden text-white py-20">
  <!-- Animated background -->
  <div class="absolute inset-0">
    <canvas id="dataScienceBg" class="w-full h-full"></canvas>
  </div>
  <!-- Dark overlay for readability -->
  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" style="font-family: 'Orbitron', sans-serif;">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">
      Department of Data Science
    </h1>
    <p class="text-xl md:text-2xl mb-4 text-blue-100">
      Excellence in Education, Research & Innovation
    </p>

    <!-- Typing animation line -->
    <p class="text-lg md:text-xl text-blue-200 h-8">
      <span class="typewriter"></span>
    </p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
      <a href="{{ route('department.about') }}"
        class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
        Learn More
      </a>
      <a href="{{ route('department.programs') }}"
        class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
        Our Programs
      </a>
    </div>
  </div>
</section>

<script>
  // Simple particle network background animation
  const canvas = document.getElementById('dataScienceBg');
  const ctx = canvas.getContext('2d');
  let particles = [];

  function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = document.querySelector('section').offsetHeight;
  }
  window.addEventListener('resize', resizeCanvas);
  resizeCanvas();

  function createParticles() {
    particles = [];
    for (let i = 0; i < 60; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 0.5,
        vy: (Math.random() - 0.5) * 0.5,
        radius: Math.random() * 2 + 1
      });
    }
  }
  createParticles();

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = '#0f172a';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Draw particles
    particles.forEach(p => {
      p.x += p.vx;
      p.y += p.vy;

      // Bounce off edges
      if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
      if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
      ctx.fillStyle = '#38bdf8';
      ctx.fill();
    });

    // Draw connecting lines
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < 120) {
          ctx.strokeStyle = 'rgba(56, 189, 248, 0.2)';
          ctx.lineWidth = 1;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }

    requestAnimationFrame(draw);
  }
  draw();
</script>


  <style>
    .typewriter {
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
      border-right: .15em solid #38bdf8;
      /* caret color */
      animation: caret 0.7s steps(1) infinite;
      min-width: 250px;
    }

    @keyframes caret {
      50% {
        border-color: transparent;
      }
    }
  </style>

  <script>
    const messages = [
      "Transforming Data into Insights ⚡",
      "Innovating with AI, ML & Big Data 💡",
      "Shaping the Future with Analytics 🚀"
    ];

    const typewriter = document.querySelector('.typewriter');
    let mIndex = 0, cIndex = 0, deleting = false;

    function type() {
      const current = messages[mIndex];
      if (!deleting) {
        typewriter.textContent = current.substring(0, cIndex + 1);
        cIndex++;
        if (cIndex === current.length) {
          deleting = true;
          setTimeout(type, 2000); // Pause at full text
          return;
        }
      } else {
        typewriter.textContent = current.substring(0, cIndex - 1);
        cIndex--;
        if (cIndex === 0) {
          deleting = false;
          mIndex = (mIndex + 1) % messages.length;
        }
      }
      setTimeout(type, deleting ? 50 : 100); // Speed for typing and deleting
    }
    type();
  </script>



  <!-- Quick Navigation -->
  <!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Explore Our Department</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- About -->
            <a href="{{ route('department.about') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-info-circle text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">About Us</h3>
                    <p class="text-gray-600 text-sm">Learn about our department's history, mission, and values</p>
                </div>
            </a>

            <!-- Faculty -->
            <a href="{{ route('department.faculty') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Faculty</h3>
                    <p class="text-gray-600 text-sm">Meet our distinguished faculty members and researchers</p>
                </div>
            </a>

            <!-- Programs -->
            <a href="{{ route('department.programs') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Programs</h3>
                    <p class="text-gray-600 text-sm">Discover our academic programs and courses</p>
                </div>
            </a>

            <!-- Research -->
            <a href="{{ route('department.research') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-flask text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Research</h3>
                    <p class="text-gray-600 text-sm">Explore our research initiatives and publications</p>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4">
      College Gallery
    </h2>
    <p class="text-center text-gray-600 mb-12 text-lg">
      Explore our vibrant campus, state-of-the-art labs, and exciting events
    </p>

    <!-- Swiper Container -->
    <div class="swiper myGallery rounded-2xl shadow-lg">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide group relative">
          <img src="{{ asset('indexpagephotos/3.jpg') }}" alt="Campus"
            class="w-full h-[450px] object-cover rounded-2xl transform group-hover:scale-105 transition duration-700 ease-out" />
          <div
            class="absolute bottom-0 w-full bg-black/40 text-white text-lg px-4 py-3 rounded-b-2xl">
            🌟 Main Campus – A hub of innovation and collaboration
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide group relative">
          <img src="{{ asset('indexpagephotos/2.jpg') }}" alt="Lab"
            class="w-full h-[450px] object-cover rounded-2xl transform group-hover:scale-105 transition duration-700 ease-out" />
          <div
            class="absolute bottom-0 w-full bg-black/40 text-white text-lg px-4 py-3 rounded-b-2xl">
            🔬 Advanced Data Science Lab – Cutting-edge technology for research
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide group relative">
          <img src="{{ asset('indexpagephotos/1.jpg') }}" alt="Event"
            class="w-full h-[450px] object-cover rounded-2xl transform group-hover:scale-105 transition duration-700 ease-out" />
          <div
            class="absolute bottom-0 w-full bg-black/40 text-white text-lg px-4 py-3 rounded-b-2xl">
            🎉 Annual Tech Symposium – Showcasing talent and innovation
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide group relative">
          <img src="{{ asset('indexpagephotos/4.jpg') }}" alt="Library"
            class="w-full h-[450px] object-cover rounded-2xl transform group-hover:scale-105 transition duration-700 ease-out" />
          <div
            class="absolute bottom-0 w-full bg-black/40 text-white text-lg px-4 py-3 rounded-b-2xl">
            📚 Central Library – A treasure trove of knowledge
          </div>
        </div>
      </div>

      <!-- Pagination and Navigation -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>

<!-- Swiper Styles & Script -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const gallerySwiper = new Swiper('.myGallery', {
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    slidesPerView: 1, // ✅ Only one photo visible
    spaceBetween: 30, // Spacing between slides
    centeredSlides: true,
    effect: 'fade', // Smooth fade effect
    fadeEffect: { crossFade: true }
  });
</script>



  <!-- Statistics -->
  <section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Department at a Glance</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
          <div class="text-gray-600">Faculty Members</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold text-green-600 mb-2">1000+</div>
          <div class="text-gray-600">Students</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold text-purple-600 mb-2">200+</div>
          <div class="text-gray-600">Research Papers</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold text-red-600 mb-2">95%</div>
          <div class="text-gray-600">Placement Rate</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Latest News & Updates</h2>
      <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                  <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                      <i class="fas fa-image text-gray-400 text-4xl"></i>
                  </div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">New Research Lab Inaugurated</h3>
                  <p class="text-gray-600 text-sm mb-4">Our state-of-the-art AI and Machine Learning lab is now open for students and researchers.</p>
                  <span class="text-blue-600 text-sm font-medium">Read More →</span>
              </div>
              <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                  <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                      <i class="fas fa-image text-gray-400 text-4xl"></i>
                  </div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Student Project Exhibition</h3>
                  <p class="text-gray-600 text-sm mb-4">Annual showcase of innovative student projects and research work.</p>
                  <span class="text-blue-600 text-sm font-medium">Read More →</span>
              </div>
              <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                  <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                      <i class="fas fa-image text-gray-400 text-4xl"></i>
                  </div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Industry Partnership</h3>
                  <p class="text-gray-600 text-sm mb-4">New collaboration with leading tech companies for internships and placements.</p>
                  <span class="text-blue-600 text-sm font-medium">Read More →</span>
              </div>
          </div> -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
          <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 overflow-hidden">
            <img src="{{ asset('indexpagephotos/research.jpg') }}" alt="Research Lab"
              class="w-full h-full object-cover" />
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">New Research Lab Inaugurated</h3>
          <p class="text-gray-600 text-sm mb-4">Our state-of-the-art AI and Machine Learning lab is now open for students
            and researchers.</p>
          <span class="text-blue-600 text-sm font-medium">Read More →</span>
        </div>

        <!-- Card 2 -->
        <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
          <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 overflow-hidden">
            <img src="{{ asset('indexpagephotos/project.jpg') }}" alt="Student Project Exhibition"
              class="w-full h-full object-cover" />
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Student Project Exhibition</h3>
          <p class="text-gray-600 text-sm mb-4">Annual showcase of innovative student projects and research work.</p>
          <span class="text-blue-600 text-sm font-medium">Read More →</span>
        </div>

        <!-- Card 3 -->
        <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
          <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 overflow-hidden">
            <img src="{{ asset('indexpagephotos/internship.jpg') }}" alt="Industry Partnership"
              class="w-full h-full object-cover" />
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Industry Partnership</h3>
          <p class="text-gray-600 text-sm mb-4">New collaboration with leading tech companies for internships and
            placements.</p>
          <span class="text-blue-600 text-sm font-medium">Read More →</span>
        </div>
      </div>

    </div>
  </section>

  <!-- Call to Action -->
  <!-- <section class="py-16 gradient-bg text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 class="text-3xl font-bold mb-6">Ready to Join Our Community?</h2>
          <p class="text-xl mb-8 text-blue-100">Apply now and be part of our innovative computer science program</p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <a href="{{ route('department.admission') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                  Apply Now
              </a>
              <a href="{{ route('department.about') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                  Learn More
              </a>
          </div>
      </div>
  </section> -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

  <section class="py-16 bg-purple-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 drop-shadow-lg" style="font-family: 'Orbitron', sans-serif;">
        Ready to Join Our Community?
      </h2>
      <p class="text-xl mb-8 text-purple-200">
        Apply now and be part of our innovative computer science program
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('department.admission') }}"
          class="bg-white text-purple-700 px-8 py-3 rounded-lg font-semibold hover:bg-purple-100 transition duration-300">
          Apply Now
        </a>
        <a href="{{ route('department.about') }}"
          class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-700 transition duration-300">
          Learn More
        </a>
      </div>
    </div>
  </section>

@endsection