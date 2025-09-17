@extends('layouts.department')

@section('title', 'About Us')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <!-- Page Header -->
    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About Our Department</h1>
                <p class="text-xl text-blue-100">Excellence in Computer Science Education & Research</p>
            </div> 
            <div class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-cyan-200 to-white text-transparent bg-clip-text" style="font-family: 'Orbitron', sans-serif;">
        About Our Department
      </h1>
      <p class="text-xl text-blue-100">
        Excellence in Computer Science Education & Research
      </p>
    </div> -->
    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    About Our Department
                </h1>
                <p class="text-xl text-purple-200">
                    Excellence in Data Science Education & Research
                </p>
            </div>
        </div>
    </section>


    </div>
    </section>

    <!-- About Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        The Department of Data Science was established in 2023 with a vision to provide world-class
                        education
                        in Data science and engineering. Over the years, we have grown into one of the leading departments
                        in the country, known for our innovative curriculum, cutting-edge research, and excellent faculty.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our department is committed to fostering innovation, creativity, and critical thinking among our
                        students.
                        We provide a comprehensive education that combines theoretical knowledge with practical skills,
                        preparing
                        our graduates to excel in the rapidly evolving field of Data science.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('department.hod-message') }}"
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                            HoD's Message
                        </a>
                        <a href="{{ route('department.vision-mission') }}"
                            class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                            Vision & Mission
                        </a>
                    </div>
                </div>
                <!-- <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-university text-blue-600 text-8xl"></i>
                    </div>

    </div>
     -->
                <div class="relative">
                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('about/college.png') }}" alt="University" class="w-full h-full object-cover" />
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Why Choose Our Department?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Excellence in Education</h3>
                    <p class="text-gray-600">Our curriculum is designed to meet industry standards and prepare students for
                        real-world challenges.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-flask text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Cutting-edge Research</h3>
                    <p class="text-gray-600">We conduct groundbreaking research in AI, machine learning, cybersecurity, and
                        software engineering.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Expert Faculty</h3>
                    <p class="text-gray-600">Our faculty members are industry experts with extensive experience in academia
                        and research.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Timeline -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Journey</h2>
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-blue-200"></div>
                <div class="space-y-8">
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-blue-600 text-white p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">2023</h3>
                                <p class="text-blue-100">Department established with initial batch of 30 students</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white relative z-10"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-green-600 rounded-full border-4 border-white relative z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-green-600 text-white p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">1995</h3>
                                <p class="text-green-100">First research lab established</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-purple-600 text-white p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">2005</h3>
                                <p class="text-purple-100">Accredited by national board</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-purple-600 rounded-full border-4 border-white relative z-10"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-red-600 rounded-full border-4 border-white relative z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-red-600 text-white p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">2020</h3>
                                <p class="text-red-100">1000+ alumni milestone achieved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infrastructure -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Infrastructure</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-desktop text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Computer Labs</h3>
                    <p class="text-gray-600 text-sm">10+ modern computer laboratories with latest hardware</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-server text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Research Labs</h3>
                    <p class="text-gray-600 text-sm">Specialized labs for AI, ML, and cybersecurity research</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Library</h3>
                    <p class="text-gray-600 text-sm">Extensive collection of CS books and digital resources</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wifi text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">High-Speed Internet</h3>
                    <p class="text-gray-600 text-sm">Campus-wide WiFi and high-speed internet connectivity</p>
                </div>
            </div>
        </div>
    </section>
@endsection