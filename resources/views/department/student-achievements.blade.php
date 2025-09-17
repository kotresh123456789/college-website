@extends('layouts.department')

@section('title', 'Student Achievements')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Student Achievements</h1>
            <p class="text-xl text-blue-100">Celebrating Student Success & Excellence</p>
        </div>
    </div>
</section>

<!-- Student Achievements Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Student Excellence</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our students consistently achieve remarkable success in academics, competitions, 
                    research, and industry placements. Their achievements reflect the quality of 
                    education and the supportive environment we provide.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    From winning international competitions to securing positions at top tech companies, 
                    our students continue to make us proud with their accomplishments.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#academic-achievements" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Academic Achievements
                    </a>
                    <a href="#competition-wins" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Competition Wins
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-blue-600 text-8xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievement Statistics -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Achievement Statistics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students' achievements demonstrate the high quality of education and opportunities we provide.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">95%</div>
                <div class="text-gray-600">Placement Rate</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">50+</div>
                <div class="text-gray-600">Competition Wins</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">100+</div>
                <div class="text-gray-600">Research Publications</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">25</div>
                <div class="text-gray-600">Startups Founded</div>
            </div>
        </div>
    </div>
</section>

<!-- Academic Achievements -->
<section id="academic-achievements" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Academic Achievements</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Outstanding academic performance and research contributions by our students.
            </p>
        </div>

        <div class="space-y-8">
            <!-- Academic Achievement 1 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Priya Sharma</h3>
                        <p class="text-blue-600 font-semibold">Class of 2023</p>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="text-2xl font-bold text-gray-900 mb-2">University Gold Medal</h4>
                        <p class="text-gray-600 mb-4">
                            Achieved the highest CGPA (9.8/10) in the Computer Science program. 
                            Published 3 research papers during undergraduate studies and 
                            secured placement at Google with a package of ₹45L per annum.
                        </p>
                        <div class="text-sm text-gray-600">
                            <p><strong>CGPA:</strong> 9.8/10 | <strong>Research Papers:</strong> 3</p>
                            <p><strong>Placement:</strong> Google | <strong>Package:</strong> ₹45L</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic Achievement 2 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Arjun Patel</h3>
                        <p class="text-green-600 font-semibold">Class of 2023</p>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="text-2xl font-bold text-gray-900 mb-2">Best Project Award</h4>
                        <p class="text-gray-600 mb-4">
                            Developed an AI-powered healthcare monitoring system that won the 
                            Best Project Award at the National Tech Expo. The project has been 
                            implemented in 5 hospitals and has received funding for further development.
                        </p>
                        <div class="text-sm text-gray-600">
                            <p><strong>Project:</strong> AI Healthcare System | <strong>Impact:</strong> 5 Hospitals</p>
                            <p><strong>Award:</strong> National Tech Expo | <strong>Funding:</strong> ₹10L</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic Achievement 3 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Sneha Reddy</h3>
                        <p class="text-purple-600 font-semibold">Class of 2023</p>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="text-2xl font-bold text-gray-900 mb-2">Research Excellence</h4>
                        <p class="text-gray-600 mb-4">
                            Published 2 papers in top-tier conferences during undergraduate studies. 
                            Her research on cybersecurity has been cited 50+ times and has led to 
                            a patent application. Currently pursuing PhD at Stanford University.
                        </p>
                        <div class="text-sm text-gray-600">
                            <p><strong>Publications:</strong> 2 | <strong>Citations:</strong> 50+</p>
                            <p><strong>Patent:</strong> Filed | <strong>Current:</strong> PhD at Stanford</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competition Wins -->
<section id="competition-wins" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Competition Wins</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students have won numerous competitions at national and international levels.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Competition Win 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-trophy text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">ACM ICPC World Finals</h3>
                <p class="text-gray-600 mb-4">
                    Our team secured 15th position in the ACM International Collegiate 
                    Programming Contest World Finals, competing against 3,000+ teams globally.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Position:</strong> 15th globally</p>
                    <p><strong>Teams:</strong> 3,000+</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>

            <!-- Competition Win 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-medal text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Google Code Jam</h3>
                <p class="text-gray-600 mb-4">
                    Student won the Google Code Jam competition, securing a position in the 
                    top 100 globally and receiving a cash prize of $10,000.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Position:</strong> Top 100</p>
                    <p><strong>Prize:</strong> $10,000</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>

            <!-- Competition Win 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-award text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Hackathon Winner</h3>
                <p class="text-gray-600 mb-4">
                    Team won the National Hackathon with their innovative solution for 
                    sustainable transportation, receiving funding for startup development.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Event:</strong> National Hackathon</p>
                    <p><strong>Prize:</strong> ₹5L + Funding</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>

            <!-- Competition Win 4 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-star text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">AI Competition</h3>
                <p class="text-gray-600 mb-4">
                    Student team won the International AI Competition with their 
                    machine learning model for medical diagnosis.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Event:</strong> International AI Competition</p>
                    <p><strong>Prize:</strong> $15,000</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>

            <!-- Competition Win 5 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity Challenge</h3>
                <p class="text-gray-600 mb-4">
                    Team secured 1st position in the National Cybersecurity Challenge, 
                    demonstrating expertise in ethical hacking and security analysis.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Position:</strong> 1st</p>
                    <p><strong>Prize:</strong> ₹3L</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>

            <!-- Competition Win 6 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-mobile-alt text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">App Development</h3>
                <p class="text-gray-600 mb-4">
                    Student won the Mobile App Development Competition with their 
                    innovative social networking app for students.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Event:</strong> Mobile App Competition</p>
                    <p><strong>Prize:</strong> ₹2L</p>
                    <p><strong>Year:</strong> 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Research Publications -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Student Research Publications</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students have published research papers in top-tier conferences and journals.
            </p>
        </div>

        <div class="space-y-6">
            <!-- Publication 1 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            "Deep Learning Approaches for Autonomous Vehicle Navigation"
                        </h3>
                        <p class="text-gray-600 mb-3">
                            <strong>Authors:</strong> Priya Sharma, Arjun Patel, Dr. Sarah Johnson<br>
                            <strong>Conference:</strong> IEEE International Conference on Robotics and Automation<br>
                            <strong>Year:</strong> 2023 | <strong>Impact Factor:</strong> 8.5
                        </p>
                        <p class="text-gray-600 text-sm">
                            This paper presents novel deep learning architectures for autonomous vehicle 
                            navigation, achieving state-of-the-art performance in urban driving scenarios.
                        </p>
                    </div>
                    <div class="ml-6">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                            Robotics
                        </span>
                    </div>
                </div>
            </div>

            <!-- Publication 2 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            "Machine Learning for Cybersecurity Threat Detection"
                        </h3>
                        <p class="text-gray-600 mb-3">
                            <strong>Authors:</strong> Sneha Reddy, Dr. Michael Chen<br>
                            <strong>Conference:</strong> ACM Conference on Computer and Communications Security<br>
                            <strong>Year:</strong> 2023 | <strong>Impact Factor:</strong> 7.2
                        </p>
                        <p class="text-gray-600 text-sm">
                            A comprehensive study on machine learning approaches for detecting 
                            cybersecurity threats in real-time systems.
                        </p>
                    </div>
                    <div class="ml-6">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                            Cybersecurity
                        </span>
                    </div>
                </div>
            </div>

            <!-- Publication 3 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            "Data Analytics Platform for Smart City Applications"
                        </h3>
                        <p class="text-gray-600 mb-3">
                            <strong>Authors:</strong> Rajesh Kumar, Dr. Emily Rodriguez<br>
                            <strong>Journal:</strong> IEEE Internet of Things Journal<br>
                            <strong>Year:</strong> 2023 | <strong>Impact Factor:</strong> 9.5
                        </p>
                        <p class="text-gray-600 text-sm">
                            Development of a scalable analytics platform for processing 
                            massive datasets in smart city environments.
                        </p>
                    </div>
                    <div class="ml-6">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">
                            IoT
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Startup Success -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Startup Success Stories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students have founded successful startups that are making a significant impact in the tech industry.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Startup 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">TechStart Inc.</h3>
                <p class="text-gray-600 mb-4">
                    Founded by Arjun Patel (Class of 2022), TechStart Inc. is an AI-powered 
                    platform that helps small businesses automate their operations. The company 
                    has raised $5M in Series A funding and employs 50+ people.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Founder:</strong> Arjun Patel</p>
                    <p><strong>Funding:</strong> $5M Series A</p>
                    <p><strong>Employees:</strong> 50+</p>
                    <p><strong>Valuation:</strong> $25M</p>
                </div>
            </div>

            <!-- Startup 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">HealthTech Solutions</h3>
                <p class="text-gray-600 mb-4">
                    Founded by Priya Sharma (Class of 2021), HealthTech Solutions provides 
                    AI-powered diagnostic tools for healthcare providers. The company has 
                    partnerships with 20+ hospitals and has raised $3M in seed funding.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Founder:</strong> Priya Sharma</p>
                    <p><strong>Funding:</strong> $3M Seed</p>
                    <p><strong>Partners:</strong> 20+ Hospitals</p>
                    <p><strong>Valuation:</strong> $15M</p>
                </div>
            </div>

            <!-- Startup 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">EduTech Platform</h3>
                <p class="text-gray-600 mb-4">
                    Founded by Sneha Reddy (Class of 2020), EduTech Platform offers personalized 
                    learning solutions for students. The platform has 100,000+ users and has 
                    raised $2M in pre-Series A funding.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Founder:</strong> Sneha Reddy</p>
                    <p><strong>Funding:</strong> $2M Pre-Series A</p>
                    <p><strong>Users:</strong> 100,000+</p>
                    <p><strong>Valuation:</strong> $10M</p>
                </div>
            </div>

            <!-- Startup 4 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">FinTech Innovations</h3>
                <p class="text-gray-600 mb-4">
                    Founded by Rajesh Kumar (Class of 2019), FinTech Innovations provides 
                    blockchain-based financial services. The company has processed $100M+ 
                    in transactions and has raised $8M in Series B funding.
                </p>
                <div class="text-sm text-gray-600">
                    <p><strong>Founder:</strong> Rajesh Kumar</p>
                    <p><strong>Funding:</strong> $8M Series B</p>
                    <p><strong>Transactions:</strong> $100M+</p>
                    <p><strong>Valuation:</strong> $50M</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Students -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Connect with Our Students</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Interested in collaborating with our students or learning more about their projects? 
                Contact our department to connect with our talented students.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('department.student-projects') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-project-diagram mr-2"></i>View Student Projects
                </a>
                <a href="mailto:students@university.edu" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Contact Students
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
