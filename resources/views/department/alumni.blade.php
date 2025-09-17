@extends('layouts.department')

@section('title', 'Alumni')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
<!-- Page Header -->
<!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Alumni Network</h1>
            <p class="text-xl text-blue-100">Connecting Past, Present, and Future</p>
        </div>
    </div>
</section> -->
<section class="bg-purple-600 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg" style="font-family: 'Orbitron', sans-serif;">
        Alumni Network
      </h1>
      <p class="text-xl text-purple-200">
        Connecting Past, Present, and Future
      </p>
    </div>
  </div>
</section>

<!-- Alumni Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Alumni Community</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our alumni network spans across the globe, with graduates making significant 
                    contributions to the technology industry. They serve as mentors, industry partners, 
                    and ambassadors of our department's excellence.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We maintain strong connections with our alumni through regular events, 
                    networking opportunities, and collaborative projects that benefit both 
                    current students and the broader community.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#alumni-stats" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Alumni Statistics
                    </a>
                    <a href="#success-stories" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Success Stories
                    </a>
                </div>
            </div>
            <div class="relative">
                <!-- <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-blue-600 text-8xl"></i>
                </div> -->
                <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('alumini/alumini.jpg') }}" alt="research" class="w-full h-full object-cover" />
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Statistics -->
<section id="alumni-stats" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Alumni Statistics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our alumni have achieved remarkable success across various sectors and industries.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">2000+</div>
                <div class="text-gray-600">Total Alumni</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">45</div>
                <div class="text-gray-600">Countries Represented</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">85%</div>
                <div class="text-gray-600">In Tech Industry</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">150+</div>
                <div class="text-gray-600">Startups Founded</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Alumni -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Featured Alumni</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet some of our distinguished alumni who have made significant contributions to the tech industry.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Alumni 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Rajesh Kumar</h3>
                    <p class="text-blue-600 font-semibold">Senior Software Engineer</p>
                    <p class="text-gray-600 text-sm">Google, Mountain View</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Achievements:</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Led development of Google Search algorithms</li>
                        <li>• Published 15+ research papers</li>
                        <li>• Mentored 50+ junior engineers</li>
                        <li>• Founded AI startup (acquired by Google)</li>
                    </ul>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Graduation Year:</strong> 2010</p>
                    <p><strong>Current Role:</strong> Tech Lead</p>
                </div>
                <a href="#" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center block">
                    Connect on LinkedIn
                </a>
            </div>

            <!-- Alumni 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Priya Sharma</h3>
                    <p class="text-green-600 font-semibold">VP of Engineering</p>
                    <p class="text-gray-600 text-sm">Microsoft, Seattle</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Achievements:</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Led Azure cloud platform development</li>
                        <li>• Managed 200+ engineering team</li>
                        <li>• Won Microsoft Innovation Award</li>
                        <li>• Speaker at major tech conferences</li>
                    </ul>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Graduation Year:</strong> 2012</p>
                    <p><strong>Current Role:</strong> VP Engineering</p>
                </div>
                <a href="#" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition duration-300 text-center block">
                    Connect on LinkedIn
                </a>
            </div>

            <!-- Alumni 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Arjun Patel</h3>
                    <p class="text-purple-600 font-semibold">Founder & CEO</p>
                    <p class="text-gray-600 text-sm">TechStart Inc.</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Achievements:</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Founded successful AI startup</li>
                        <li>• Raised $50M in funding</li>
                        <li>• Created 500+ jobs</li>
                        <li>• Forbes 30 Under 30</li>
                    </ul>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Graduation Year:</strong> 2015</p>
                    <p><strong>Current Role:</strong> CEO & Founder</p>
                </div>
                <a href="#" class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 text-center block">
                    Connect on LinkedIn
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Alumni by Industry -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Alumni by Industry</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our alumni work across diverse industries, making significant contributions to technology and innovation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Technology -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Technology</h3>
                </div>
                <div class="text-3xl font-bold text-blue-600 mb-2">45%</div>
                <p class="text-gray-600 text-sm mb-4">Working in tech companies</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Google, Microsoft, Amazon</li>
                    <li>• Facebook, Apple, Netflix</li>
                    <li>• Startups and unicorns</li>
                    <li>• Tech consulting firms</li>
                </ul>
            </div>

            <!-- Finance -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-chart-line text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Finance</h3>
                </div>
                <div class="text-3xl font-bold text-green-600 mb-2">20%</div>
                <p class="text-gray-600 text-sm mb-4">In financial services</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Investment banks</li>
                    <li>• Fintech companies</li>
                    <li>• Hedge funds</li>
                    <li>• Insurance companies</li>
                </ul>
            </div>

            <!-- Healthcare -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-heartbeat text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Healthcare</h3>
                </div>
                <div class="text-3xl font-bold text-red-600 mb-2">15%</div>
                <p class="text-gray-600 text-sm mb-4">In healthcare tech</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Medical device companies</li>
                    <li>• Health tech startups</li>
                    <li>• Pharmaceutical firms</li>
                    <li>• Telemedicine platforms</li>
                </ul>
            </div>

            <!-- Education -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Education</h3>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">10%</div>
                <p class="text-gray-600 text-sm mb-4">In academia</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Universities and colleges</li>
                    <li>• Research institutions</li>
                    <li>• EdTech companies</li>
                    <li>• Online learning platforms</li>
                </ul>
            </div>

            <!-- Government -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-landmark text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Government</h3>
                </div>
                <div class="text-3xl font-bold text-yellow-600 mb-2">5%</div>
                <p class="text-gray-600 text-sm mb-4">In public sector</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Defense organizations</li>
                    <li>• Government agencies</li>
                    <li>• Public sector banks</li>
                    <li>• Research labs</li>
                </ul>
            </div>

            <!-- Other -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-briefcase text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Other</h3>
                </div>
                <div class="text-3xl font-bold text-indigo-600 mb-2">5%</div>
                <p class="text-gray-600 text-sm mb-4">In other sectors</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Consulting firms</li>
                    <li>• Non-profit organizations</li>
                    <li>• Media and entertainment</li>
                    <li>• Retail and e-commerce</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Success Stories -->
<section id="success-stories" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Success Stories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Inspiring stories from our alumni who have achieved remarkable success in their careers.
            </p>
        </div>

        <div class="space-y-8">
            <!-- Success Story 1 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Dr. Sarah Johnson</h3>
                        <p class="text-blue-600 font-semibold">AI Research Director</p>
                        <p class="text-gray-600 text-sm">OpenAI</p>
                    </div>
                    <div class="md:col-span-2">
                        <blockquote class="text-gray-600 italic mb-4">
                            "The foundation I received at the department was instrumental in my journey 
                            to becoming a research director at OpenAI. The emphasis on critical thinking 
                            and hands-on learning prepared me for the challenges of AI research."
                        </blockquote>
                        <div class="text-sm text-gray-600">
                            <p><strong>Graduation Year:</strong> 2008 | <strong>Current Role:</strong> Research Director</p>
                            <p><strong>Notable Achievement:</strong> Led development of GPT-4 language model</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Story 2 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Michael Chen</h3>
                        <p class="text-green-600 font-semibold">Cybersecurity Expert</p>
                        <p class="text-gray-600 text-sm">CrowdStrike</p>
                    </div>
                    <div class="md:col-span-2">
                        <blockquote class="text-gray-600 italic mb-4">
                            "The cybersecurity specialization at the department gave me the edge I needed 
                            to excel in this field. The practical projects and industry exposure were 
                            crucial for my career development."
                        </blockquote>
                        <div class="text-sm text-gray-600">
                            <p><strong>Graduation Year:</strong> 2010 | <strong>Current Role:</strong> Principal Security Engineer</p>
                            <p><strong>Notable Achievement:</strong> Prevented major cyber attacks on Fortune 500 companies</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Story 3 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Emily Rodriguez</h3>
                        <p class="text-purple-600 font-semibold">Data Science Leader</p>
                        <p class="text-gray-600 text-sm">Netflix</p>
                    </div>
                    <div class="md:col-span-2">
                        <blockquote class="text-gray-600 italic mb-4">
                            "The data science program at the department was ahead of its time. The 
                            combination of theoretical knowledge and practical applications prepared 
                            me for the fast-paced world of big data analytics."
                        </blockquote>
                        <div class="text-sm text-gray-600">
                            <p><strong>Graduation Year:</strong> 2012 | <strong>Current Role:</strong> Senior Data Scientist</p>
                            <p><strong>Notable Achievement:</strong> Improved Netflix recommendation accuracy by 25%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Events -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Alumni Events</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We regularly organize events to keep our alumni connected and engaged with the department.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Annual Reunion -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-calendar-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Annual Reunion</h3>
                <p class="text-gray-600 mb-4">
                    Annual gathering of alumni to reconnect, share experiences, and celebrate achievements.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Date:</strong> First Saturday of December</p>
                    <p><strong>Location:</strong> University Campus</p>
                    <p><strong>Attendees:</strong> 500+ alumni</p>
                </div>
            </div>

            <!-- Industry Meet -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Industry Meet</h3>
                <p class="text-gray-600 mb-4">
                    Networking event connecting current students with alumni working in various industries.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Date:</strong> March every year</p>
                    <p><strong>Location:</strong> Tech Hub</p>
                    <p><strong>Attendees:</strong> Students + Alumni</p>
                </div>
            </div>

            <!-- Mentorship Program -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user-graduate text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mentorship Program</h3>
                <p class="text-gray-600 mb-4">
                    Alumni mentor current students, providing career guidance and industry insights.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Duration:</strong> Year-round</p>
                    <p><strong>Format:</strong> Virtual + In-person</p>
                    <p><strong>Participants:</strong> 200+ pairs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Alumni Network -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Join Our Alumni Network</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Stay connected with your alma mater and fellow alumni. Join our network to access 
                exclusive benefits, networking opportunities, and career resources.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:alumni@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Join Alumni Network
                </a>
                <a href="#" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fab fa-linkedin mr-2"></i>LinkedIn Group
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
