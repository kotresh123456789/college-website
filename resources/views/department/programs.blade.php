@extends('layouts.department')

@section('title', 'Programs & Courses')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <!-- Page Header -->
    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Programs & Courses</h1>
                <p class="text-xl text-blue-100">Comprehensive Computer Science Education</p>
            </div>
        </div>
    </section> -->
    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    Programs & Courses
                </h1>
                <p class="text-xl text-purple-200">
                    Comprehensive Data Science Education
                </p>
            </div>
        </div>
    </section>

    <!-- Undergraduate Programs -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Undergraduate Programs</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our undergraduate programs provide a strong foundation in computer science fundamentals
                    while allowing students to specialize in areas of their interest.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Bachelor of Computer Science -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="flex items-center mb-6">
                        <!-- <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-laptop-code text-blue-600 text-2xl"></i>
                        </div> -->
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <img src="{{ asset('programs/datascience.ico') }}" alt="Description"
                                class="w-10 h-10 object-contain">
                        </div>


                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Bachelor of Data Science</h3>
                            <p class="text-blue-600 font-semibold">4 Years • Full-time</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        A comprehensive program covering core computer science concepts including
                        programming, algorithms, data structures, software engineering, and more.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Subjects:</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Programming</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Algorithms</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Data Structures</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Database Systems</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Software
                                Engineering</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Computer Networks</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-600">
                            <p><i class="fas fa-users mr-1"></i>120 seats per year</p>
                            <p><i class="fas fa-calendar mr-1"></i>Fall & Spring intake</p>
                        </div>
                        <a href="{{ route('department.admission') }}"
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                            More
                        </a>
                    </div>
                    <a href="{{ route('course.apply', ['course' => 'Bachelor of Computer Science']) }}"
                        class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-blue-700 transition duration-300 w-full">
                        Apply Now
                    </a>
                </div>

                <!-- Bachelor of Software Engineering -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="flex items-center mb-6">
                        <!-- <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-cogs text-green-600 text-2xl"></i>
                        </div> -->
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <img src="{{ asset('programs/softwearengineering.ico') }}" alt="Description"
                                class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Bachelor of Software Engineering</h3>
                            <p class="text-green-600 font-semibold">4 Years • Full-time</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Focused on software development lifecycle, project management, and building
                        scalable software solutions for real-world applications.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Subjects:</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Software Design</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Project
                                Management</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Testing & QA</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">DevOps</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Agile Methods</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">System
                                Architecture</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-600">
                            <p><i class="fas fa-users mr-1"></i>80 seats per year</p>
                            <p><i class="fas fa-calendar mr-1"></i>Fall intake only</p>
                        </div>
                        <a href="{{ route('department.admission') }}"
                            class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                            More
                        </a>
                    </div>
                    <a href="{{ route('course.apply', ['course' => 'Bachelor of Software Engineering']) }}"
                        class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-green-700 transition duration-300 w-full">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Graduate Programs -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Graduate Programs</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Advanced programs designed for students who want to deepen their knowledge
                    and specialize in cutting-edge areas of computer science.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Master of Computer Science -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Master of Computer Science</h3>
                        <p class="text-purple-600 font-semibold">2 Years • Full-time</p>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">
                        Advanced coursework and research opportunities in specialized areas of computer science.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3 text-sm">Specializations:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Artificial Intelligence</li>
                            <li>• Machine Learning</li>
                            <li>• Cybersecurity</li>
                            <li>• Data Science</li>
                        </ul>
                    </div>
                    <a href="{{ route('department.admission') }}"
                        class="w-full bg-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 text-center block">
                        More
                    </a>
                    <a href="{{ route('course.apply', ['course' => 'Master of Computer Science']) }}"
                        class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-purple-700 transition duration-300 w-full">
                        Apply Now
                    </a>
                </div>

                <!-- Master of Software Engineering -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-code text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Master of Software Engineering</h3>
                        <p class="text-red-600 font-semibold">2 Years • Full-time</p>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">
                        Advanced software engineering principles, methodologies, and practices for complex systems.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3 text-sm">Focus Areas:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Enterprise Software</li>
                            <li>• Mobile Development</li>
                            <li>• Cloud Computing</li>
                            <li>• Software Architecture</li>
                        </ul>
                    </div>
                    <a href="{{ route('department.admission') }}"
                        class="w-full bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition duration-300 text-center block">
                        More
                    </a>
                    <a href="{{ route('course.apply', ['course' => 'Master of Software Engineering']) }}"
                        class="mt-4 inline-block bg-red-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-red-700 transition duration-300 w-full">
                        Apply Now
                    </a>
                </div>

                <!-- PhD Program -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-graduate text-indigo-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">PhD in Computer Science</h3>
                        <p class="text-indigo-600 font-semibold">3-5 Years • Full-time</p>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">
                        Doctoral program focusing on original research and contribution to computer science knowledge.
                    </p>
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3 text-sm">Research Areas:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• AI & Machine Learning</li>
                            <li>• Cybersecurity</li>
                            <li>• Distributed Systems</li>
                            <li>• Human-Computer Interaction</li>
                        </ul>
                    </div>
                    <a href="{{ route('department.admission') }}"
                        class="w-full bg-indigo-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 text-center block">
                        More
                    </a>
                    <a href="{{ route('course.apply', ['course' => 'PhD in Computer Science']) }}"
                        class="mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-indigo-700 transition duration-300 w-full">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Structure -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Structure</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our curriculum is designed to provide a balanced mix of theoretical knowledge and practical skills.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Core Courses -->
                <div class="bg-blue-50 p-6 rounded-xl">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-book text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Core Courses</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Programming Fundamentals</li>
                        <li>• Data Structures & Algorithms</li>
                        <li>• Computer Organization</li>
                        <li>• Operating Systems</li>
                        <li>• Database Systems</li>
                    </ul>
                </div>

                <!-- Elective Courses -->
                <div class="bg-green-50 p-6 rounded-xl">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-list text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Elective Courses</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Machine Learning</li>
                        <li>• Computer Graphics</li>
                        <li>• Mobile App Development</li>
                        <li>• Blockchain Technology</li>
                        <li>• IoT Development</li>
                    </ul>
                </div>

                <!-- Lab Courses -->
                <div class="bg-purple-50 p-6 rounded-xl">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-flask text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Lab Courses</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Programming Lab</li>
                        <li>• Database Lab</li>
                        <li>• Network Lab</li>
                        <li>• Software Engineering Lab</li>
                        <li>• Project Lab</li>
                    </ul>
                </div>

                <!-- Capstone Project -->
                <div class="bg-red-50 p-6 rounded-xl">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-project-diagram text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Capstone Project</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Final Year Project</li>
                        <li>• Industry Collaboration</li>
                        <li>• Research Component</li>
                        <li>• Presentation & Defense</li>
                        <li>• Portfolio Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Requirements -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Requirements</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    General admission requirements for our programs:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Undergraduate Requirements -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Undergraduate Programs</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>High school diploma or equivalent with minimum 60% marks</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Mathematics and Physics in high school</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Entrance examination score</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>English proficiency test (if applicable)</span>
                        </li>
                    </ul>
                </div>

                <!-- Graduate Requirements -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Graduate Programs</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Bachelor's degree in CS or related field</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Minimum GPA of 3.0/4.0</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>GRE/GMAT scores (for international students)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Statement of purpose and letters of recommendation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection