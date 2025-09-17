@extends('layouts.department')

@section('title', 'Research & Publications')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <!-- Page Header -->
    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Research & Publications</h1>
                <p class="text-xl text-blue-100">Advancing Computer Science Through Research</p>
            </div>
        </div>
    </section> -->
    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    Research & Publications
                </h1>
                <p class="text-xl text-purple-200">
                    Advancing Data Science Through Research
                </p>
            </div>
        </div>
    </section>

    <!-- Research Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Research Excellence</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        The Department of Computer Science is committed to advancing the frontiers of
                        computer science through cutting-edge research. Our faculty and students work
                        on innovative projects that address real-world challenges and contribute to
                        the global body of knowledge in computer science.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We maintain strong collaborations with industry partners, government agencies,
                        and international research institutions to ensure our research has practical
                        impact and global relevance.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#research-areas"
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                            Research Areas
                        </a>
                        <a href="#publications"
                            class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                            Recent Publications
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <!-- <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-microscope text-blue-600 text-8xl"></i>
                    </div> -->

                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('research/research.png') }}" alt="research" class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Statistics -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Impact</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our research contributions are making a significant impact in the field of computer science.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2">200+</div>
                    <div class="text-gray-600">Research Papers Published</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-green-600 mb-2">50+</div>
                    <div class="text-gray-600">Patents Filed</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-purple-600 mb-2">25</div>
                    <div class="text-gray-600">Research Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-red-600 mb-2">15</div>
                    <div class="text-gray-600">Industry Collaborations</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Areas -->
    <section id="research-areas" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Areas</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty conducts research across diverse areas of computer science and technology.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artificial Intelligence -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Artificial Intelligence</h3>
                    <p class="text-gray-600 mb-6">
                        Research in machine learning, deep learning, natural language processing,
                        and intelligent systems development.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Autonomous Vehicle Systems</li>
                            <li>• Medical Diagnosis AI</li>
                            <li>• Smart City Solutions</li>
                            <li>• Conversational AI</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Sarah Johnson</p>
                        <p><strong>Publications:</strong> 25+ papers</p>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity</h3>
                    <p class="text-gray-600 mb-6">
                        Advanced research in network security, cryptography, threat detection,
                        and secure system design.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Quantum Cryptography</li>
                            <li>• IoT Security Framework</li>
                            <li>• Blockchain Security</li>
                            <li>• Cyber Threat Intelligence</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Michael Chen</p>
                        <p><strong>Publications:</strong> 20+ papers</p>
                    </div>
                </div>

                <!-- Data Science -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-bar text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Data Science</h3>
                    <p class="text-gray-600 mb-6">
                        Research in big data analytics, data visualization, statistical modeling,
                        and predictive analytics.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Real-time Analytics Platform</li>
                            <li>• Predictive Healthcare Models</li>
                            <li>• Social Media Analytics</li>
                            <li>• Financial Risk Assessment</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Emily Rodriguez</p>
                        <p><strong>Publications:</strong> 18+ papers</p>
                    </div>
                </div>

                <!-- Software Engineering -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-code text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Software Engineering</h3>
                    <p class="text-gray-600 mb-6">
                        Research in software architecture, development methodologies,
                        quality assurance, and software evolution.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Agile Development Tools</li>
                            <li>• Code Quality Metrics</li>
                            <li>• Software Testing Automation</li>
                            <li>• Legacy System Modernization</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Richard Davis</p>
                        <p><strong>Publications:</strong> 22+ papers</p>
                    </div>
                </div>

                <!-- Computer Networks -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-network-wired text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Computer Networks</h3>
                    <p class="text-gray-600 mb-6">
                        Research in network protocols, wireless communications,
                        network optimization, and distributed systems.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 5G Network Optimization</li>
                            <li>• Edge Computing Systems</li>
                            <li>• Network Security Protocols</li>
                            <li>• IoT Communication Standards</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Christopher Moore</p>
                        <p><strong>Publications:</strong> 19+ papers</p>
                    </div>
                </div>

                <!-- Human-Computer Interaction -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-mouse-pointer text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Human-Computer Interaction</h3>
                    <p class="text-gray-600 mb-6">
                        Research in user experience design, accessibility,
                        interaction design, and usability engineering.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Projects:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Accessibility Tools</li>
                            <li>• VR/AR Interfaces</li>
                            <li>• Mobile UX Design</li>
                            <li>• Gesture Recognition</li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-600">
                        <p><strong>Lead Researcher:</strong> Dr. Michelle Turner</p>
                        <p><strong>Publications:</strong> 16+ papers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Coordinator -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Coordinator</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Meet our Research Coordinator who oversees all research activities and collaborations.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div
                                class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                                <i class="fas fa-user text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Jennifer Lee</h3>
                            <p class="text-blue-600 font-semibold mb-4">Research Coordinator</p>
                            <p class="text-gray-600 mb-4">
                                Dr. Jennifer Lee oversees all research activities in the department,
                                manages research collaborations, and coordinates funding opportunities.
                                She has extensive experience in AI research and has published over 30 papers
                                in top-tier conferences and journals.
                            </p>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p><i class="fas fa-envelope mr-2"></i>jennifer.lee@university.edu</p>
                                <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4570</p>
                                <p><i class="fas fa-map-marker-alt mr-2"></i>Research Office, CS Building</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Publications -->
    <section id="publications" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Recent Publications</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our latest research contributions to the field of computer science.
                </p>
            </div>

            <div class="space-y-6">
                <!-- Publication 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                "Deep Learning Approaches for Autonomous Vehicle Navigation in Urban Environments"
                            </h3>
                            <p class="text-gray-600 mb-3">
                                <strong>Authors:</strong> Dr. Sarah Johnson, Dr. David Kim, et al.<br>
                                <strong>Journal:</strong> IEEE Transactions on Intelligent Transportation Systems<br>
                                <strong>Year:</strong> 2024 | <strong>Impact Factor:</strong> 8.5
                            </p>
                            <p class="text-gray-600 text-sm">
                                This paper presents novel deep learning architectures for autonomous vehicle
                                navigation, achieving state-of-the-art performance in urban driving scenarios.
                            </p>
                        </div>
                        <div class="ml-6">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                AI/ML
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Publication 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                "Quantum-Resistant Cryptographic Protocols for IoT Security"
                            </h3>
                            <p class="text-gray-600 mb-3">
                                <strong>Authors:</strong> Dr. Michael Chen, Dr. Jennifer Lee<br>
                                <strong>Journal:</strong> ACM Transactions on Information and System Security<br>
                                <strong>Year:</strong> 2024 | <strong>Impact Factor:</strong> 7.2
                            </p>
                            <p class="text-gray-600 text-sm">
                                A comprehensive study on quantum-resistant cryptographic protocols
                                specifically designed for Internet of Things security applications.
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
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                "Real-Time Big Data Analytics Platform for Smart City Applications"
                            </h3>
                            <p class="text-gray-600 mb-3">
                                <strong>Authors:</strong> Dr. Emily Rodriguez, Dr. James Taylor<br>
                                <strong>Journal:</strong> IEEE Internet of Things Journal<br>
                                <strong>Year:</strong> 2024 | <strong>Impact Factor:</strong> 9.5
                            </p>
                            <p class="text-gray-600 text-sm">
                                Development of a scalable real-time analytics platform for processing
                                massive datasets in smart city environments.
                            </p>
                        </div>
                        <div class="ml-6">
                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">
                                Data Science
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    View All Publications
                </a>
            </div>
        </div>
    </section>

    <!-- Research Opportunities -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Opportunities</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Join our research community and contribute to cutting-edge computer science research.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">PhD Research Positions</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Fully funded PhD positions available</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Work with leading researchers in the field</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Access to state-of-the-art research facilities</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Opportunities for international collaborations</span>
                        </li>
                    </ul>
                    <a href="{{ route('department.admission') }}"
                        class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 inline-block">
                        Apply for PhD
                    </a>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Research Collaborations</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Industry partnership opportunities</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Joint research projects with international universities</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Government-funded research initiatives</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Startup incubation and technology transfer</span>
                        </li>
                    </ul>
                    <a href="mailto:research@university.edu"
                        class="mt-6 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 inline-block">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection