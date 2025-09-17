@extends('layouts.department')

@section('title', 'Student Projects')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Student Projects & Product Models</h1>
            <p class="text-xl text-blue-100">Innovation Through Hands-On Learning</p>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Student Innovation Hub</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our students work on cutting-edge projects that solve real-world problems and 
                    demonstrate the practical application of computer science concepts. These projects 
                    showcase creativity, technical skills, and innovation.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    From mobile applications to AI-powered systems, our students develop products 
                    that have the potential to make a significant impact in various industries.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#featured-projects" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Featured Projects
                    </a>
                    <a href="#project-coordinator" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Project Coordinator
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-project-diagram text-blue-600 text-8xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Statistics -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Project Statistics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students have completed numerous innovative projects across various domains.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">500+</div>
                <div class="text-gray-600">Projects Completed</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">50+</div>
                <div class="text-gray-600">Industry Collaborations</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">25</div>
                <div class="text-gray-600">Patents Filed</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">15</div>
                <div class="text-gray-600">Startups Founded</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section id="featured-projects" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Featured Projects</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Showcasing some of the most innovative and impactful student projects.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Health Monitor</h3>
                <p class="text-gray-600 mb-4 text-sm">
                    An AI-powered mobile application that monitors vital signs and provides 
                    health recommendations using machine learning algorithms.
                </p>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Technologies Used:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">React Native</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Python</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">TensorFlow</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Firebase</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Team:</strong> 4 students</p>
                    <p><strong>Duration:</strong> 6 months</p>
                    <p><strong>Supervisor:</strong> Dr. Sarah Johnson</p>
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-blue-600 text-sm font-medium">View Details →</a>
                    <a href="#" class="text-gray-600 text-sm">GitHub</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-200 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-car text-green-600 text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Autonomous Vehicle Simulator</h3>
                <p class="text-gray-600 mb-4 text-sm">
                    A comprehensive simulation platform for testing autonomous vehicle algorithms 
                    in various traffic scenarios using computer vision and AI.
                </p>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Technologies Used:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Unity 3D</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Python</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">OpenCV</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">ROS</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Team:</strong> 6 students</p>
                    <p><strong>Duration:</strong> 8 months</p>
                    <p><strong>Supervisor:</strong> Dr. Michael Chen</p>
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-green-600 text-sm font-medium">View Details →</a>
                    <a href="#" class="text-gray-600 text-sm">Demo</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-full h-48 bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-shield-alt text-purple-600 text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Blockchain Security Platform</h3>
                <p class="text-gray-600 mb-4 text-sm">
                    A decentralized security platform that uses blockchain technology to 
                    secure IoT devices and prevent cyber attacks in smart environments.
                </p>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Technologies Used:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Ethereum</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Solidity</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Web3.js</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Node.js</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Team:</strong> 5 students</p>
                    <p><strong>Duration:</strong> 7 months</p>
                    <p><strong>Supervisor:</strong> Dr. Emily Rodriguez</p>
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-purple-600 text-sm font-medium">View Details →</a>
                    <a href="#" class="text-gray-600 text-sm">Live Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Categories -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Project Categories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our students work on projects across various domains of computer science and technology.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- AI & Machine Learning -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-brain text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">AI & Machine Learning</h3>
                </div>
                <div class="text-3xl font-bold text-blue-600 mb-2">120</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Chatbot applications</li>
                    <li>• Image recognition systems</li>
                    <li>• Predictive analytics tools</li>
                    <li>• Natural language processing</li>
                </ul>
            </div>

            <!-- Web Development -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-globe text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Web Development</h3>
                </div>
                <div class="text-3xl font-bold text-green-600 mb-2">150</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• E-commerce platforms</li>
                    <li>• Social media applications</li>
                    <li>• Content management systems</li>
                    <li>• Online learning platforms</li>
                </ul>
            </div>

            <!-- Mobile Development -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-mobile-alt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Mobile Development</h3>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">100</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Health monitoring apps</li>
                    <li>• Gaming applications</li>
                    <li>• Productivity tools</li>
                    <li>• IoT control interfaces</li>
                </ul>
            </div>

            <!-- Cybersecurity -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-shield-alt text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Cybersecurity</h3>
                </div>
                <div class="text-3xl font-bold text-red-600 mb-2">80</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Vulnerability scanners</li>
                    <li>• Encryption tools</li>
                    <li>• Network monitoring systems</li>
                    <li>• Security audit tools</li>
                </ul>
            </div>

            <!-- Data Science -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-chart-bar text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Data Science</h3>
                </div>
                <div class="text-3xl font-bold text-yellow-600 mb-2">90</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Data visualization dashboards</li>
                    <li>• Business intelligence tools</li>
                    <li>• Market analysis systems</li>
                    <li>• Recommendation engines</li>
                </ul>
            </div>

            <!-- IoT & Hardware -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-microchip text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">IoT & Hardware</h3>
                </div>
                <div class="text-3xl font-bold text-indigo-600 mb-2">60</div>
                <p class="text-gray-600 text-sm mb-4">Projects completed</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Smart home systems</li>
                    <li>• Environmental monitoring</li>
                    <li>• Robotics projects</li>
                    <li>• Sensor networks</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project Coordinator -->
<section id="project-coordinator" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Project Coordinator</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet our Project Coordinator who oversees all student projects and provides guidance.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Lisa Wang</h3>
                        <p class="text-purple-600 font-semibold mb-4">Project Coordinator</p>
                        <p class="text-gray-600 mb-4">
                            Dr. Lisa Wang coordinates all student projects and provides mentorship to 
                            help students develop innovative solutions. She has extensive experience 
                            in software engineering and has guided over 200 student projects.
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-envelope mr-2"></i>lisa.wang@university.edu</p>
                            <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4572</p>
                            <p><i class="fas fa-map-marker-alt mr-2"></i>Project Lab, CS Building</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Showcase -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Project Showcase</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Annual exhibition of the best student projects and innovations.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Annual Project Exhibition</h3>
                <p class="text-gray-600 mb-6">
                    Every year, we organize a grand exhibition where students showcase their 
                    innovative projects to industry experts, faculty, and fellow students.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>100+ projects displayed</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Industry expert judges</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Cash prizes for winners</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Networking opportunities</span>
                    </li>
                </ul>
                <div class="mt-6">
                    <p class="text-sm text-gray-600 mb-2">
                        <strong>Next Exhibition:</strong> March 2024
                    </p>
                    <a href="#" class="bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 inline-block">
                        Register Your Project
                    </a>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Industry Collaboration</h3>
                <p class="text-gray-600 mb-6">
                    We partner with leading companies to provide real-world project opportunities 
                    for our students.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Live industry projects</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Mentorship from industry experts</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Potential job opportunities</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Technology transfer opportunities</span>
                    </li>
                </ul>
                <div class="mt-6">
                    <p class="text-sm text-gray-600 mb-2">
                        <strong>Current Partners:</strong> 25+ companies
                    </p>
                    <a href="#" class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 inline-block">
                        View Partners
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Project Coordinator -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Get Involved in Projects</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Interested in working on innovative projects or have ideas for collaboration? 
                Contact our Project Coordinator to learn more about opportunities.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:projects@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Contact Project Coordinator
                </a>
                <a href="#" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-lightbulb mr-2"></i>Submit Project Idea
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
