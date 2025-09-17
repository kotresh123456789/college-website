@extends('layouts.department')

@section('title', 'HoD Message')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Head of Department's Message</h1>
            <p class="text-xl text-blue-100">A Message from Our Leadership</p>
        </div>
    </div>
</section>

<!-- HoD Message Content -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- HoD Profile -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. John Smith</h3>
                        <p class="text-blue-600 font-semibold mb-4">Head of Department</p>
                        <p class="text-gray-600 text-sm mb-6">
                            Professor of Computer Science<br>
                            Ph.D. in Artificial Intelligence<br>
                            20+ years of experience
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-envelope mr-2"></i>hod@university.edu</p>
                            <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                            <p><i class="fas fa-map-marker-alt mr-2"></i>Office: CS Building, Room 201</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Welcome to Our Department</h2>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        It gives me immense pleasure to welcome you to the Department of Data Science. 
                        As we navigate through the digital age, Data science has become the backbone 
                        of innovation and technological advancement. Our department is committed to providing 
                        world-class education and fostering a culture of research and innovation.
                    </p>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Over the past three decades, we have built a strong foundation of excellence in 
                        Data science education. Our faculty members are not just educators but also 
                        active researchers contributing to the advancement of knowledge in various 
                        domains including artificial intelligence, machine learning, cybersecurity, 
                        software engineering, and data science.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 mt-8">Our Commitment</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We are committed to:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Providing cutting-edge education that meets industry standards</li>
                        <li>Fostering a research environment that encourages innovation</li>
                        <li>Preparing students for successful careers in technology</li>
                        <li>Building strong industry partnerships for internships and placements</li>
                        <li>Maintaining the highest standards of academic excellence</li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Looking Forward</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        As we look to the future, we are excited about the opportunities that lie ahead. 
                        We are continuously updating our curriculum to include emerging technologies 
                        and preparing our students to be the leaders of tomorrow's digital world.
                    </p>

                    <p class="text-gray-600 mb-8 leading-relaxed">
                        I invite you to explore our website to learn more about our programs, faculty, 
                        research activities, and student achievements. Whether you are a prospective 
                        student, current student, alumni, or industry partner, we welcome you to be 
                        part of our vibrant community.
                    </p>

                    <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-600">
                        <p class="text-gray-700 italic">
                            "The future belongs to those who understand technology. At our department, 
                            we don't just teach computer science; we inspire the next generation of 
                            innovators who will shape the digital future."
                        </p>
                        <p class="text-right text-gray-600 mt-4 font-semibold">- Dr. John Smith, HoD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HoD Achievements -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">HoD's Achievements</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-gray-600">Research Papers</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl font-bold text-green-600 mb-2">15</div>
                <div class="text-gray-600">PhD Students Guided</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl font-bold text-purple-600 mb-2">5</div>
                <div class="text-gray-600">Patents Filed</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl font-bold text-red-600 mb-2">3</div>
                <div class="text-gray-600">Awards Received</div>
            </div>
        </div>
    </div>
</section>

<!-- Contact HoD -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Have questions or want to discuss opportunities? Feel free to reach out to our 
                Head of Department directly.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:hod@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email HoD
                </a>
                <a href="tel:+15551234567" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-phone mr-2"></i>Call Office
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
