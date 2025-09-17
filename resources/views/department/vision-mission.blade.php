@extends('layouts.department')

@section('title', 'Vision, Mission & Objectives')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Vision, Mission & Objectives</h1>
            <p class="text-xl text-blue-100">Our Guiding Principles</p>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-blue-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Vision</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    To be a globally recognized center of excellence in computer science education, 
                    research, and innovation, producing graduates who are leaders in technology and 
                    contribute to the advancement of society through cutting-edge research and 
                    innovative solutions.
                </p>
                <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-600">
                    <p class="text-gray-700 italic">
                        "Empowering the future through technology, innovation, and excellence in computer science education."
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
                    <i class="fas fa-lightbulb text-blue-600 text-8xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="w-full h-96 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center">
                    <i class="fas fa-target text-green-600 text-8xl"></i>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-bullseye text-green-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    To provide world-class computer science education that combines theoretical 
                    knowledge with practical skills, foster innovative research that addresses 
                    real-world challenges, and develop ethical leaders who contribute to the 
                    technological advancement of society.
                </p>
                <div class="bg-green-50 p-6 rounded-lg border-l-4 border-green-600">
                    <p class="text-gray-700 italic">
                        "Creating tomorrow's technology leaders through excellence in education, research, and innovation."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Objectives Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-list-check text-purple-600 text-3xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Objectives</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We strive to achieve our vision and mission through the following key objectives:
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Educational Excellence -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Educational Excellence</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Provide comprehensive curriculum aligned with industry needs</li>
                    <li>• Foster critical thinking and problem-solving skills</li>
                    <li>• Promote hands-on learning through practical projects</li>
                    <li>• Maintain high academic standards and quality</li>
                </ul>
            </div>

            <!-- Research Innovation -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-flask text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Research Innovation</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Conduct cutting-edge research in emerging technologies</li>
                    <li>• Collaborate with industry and research institutions</li>
                    <li>• Publish high-impact research papers</li>
                    <li>• Develop innovative solutions for real-world problems</li>
                </ul>
            </div>

            <!-- Industry Partnership -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Industry Partnership</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Build strong relationships with tech companies</li>
                    <li>• Provide internship and placement opportunities</li>
                    <li>• Invite industry experts for guest lectures</li>
                    <li>• Align curriculum with industry requirements</li>
                </ul>
            </div>

            <!-- Student Development -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user-graduate text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Student Development</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Develop leadership and communication skills</li>
                    <li>• Encourage participation in competitions</li>
                    <li>• Provide mentorship and career guidance</li>
                    <li>• Foster entrepreneurial mindset</li>
                </ul>
            </div>

            <!-- Global Recognition -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-globe text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Global Recognition</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Achieve international accreditation</li>
                    <li>• Participate in global research collaborations</li>
                    <li>• Attract international students and faculty</li>
                    <li>• Maintain high rankings in global surveys</li>
                </ul>
            </div>

            <!-- Community Impact -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-heart text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Community Impact</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Contribute to societal development through technology</li>
                    <li>• Promote digital literacy in the community</li>
                    <li>• Support startups and innovation ecosystem</li>
                    <li>• Engage in social responsibility initiatives</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Core Values</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                These values guide everything we do and shape our culture:
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-star text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Excellence</h3>
                <p class="text-gray-600 text-sm">Striving for the highest standards in everything we do</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-lightbulb text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovation</h3>
                <p class="text-gray-600 text-sm">Embracing creativity and new ideas</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Collaboration</h3>
                <p class="text-gray-600 text-sm">Working together to achieve common goals</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Integrity</h3>
                <p class="text-gray-600 text-sm">Maintaining ethical standards and transparency</p>
            </div>
        </div>
    </div>
</section>
@endsection
