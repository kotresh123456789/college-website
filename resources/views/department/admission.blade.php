@extends('layouts.department')

@section('title', 'Admission Activities')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <!-- <div class="container mx-auto px-4 py-8"> -->
    {{-- Page Header --}}
    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20 rounded-lg shadow-md mb-10">
                    <div class="max-w-7xl mx-auto text-center">
                        <h1 class="text-5xl font-bold mb-4">Admission Activities</h1>
                        <p class="text-2xl">Join Our Data Science Community</p>
                    </div>
                </section> -->
    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    Admission Activities
                </h1>
                <p class="text-xl text-purple-200">
                    Join Our Data Science Community
                </p>
            </div>
        </div>
    </section>

    {{-- Admission Overview --}}
    <section class="bg-white py-20 mb-10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Admission Process</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We welcome talented students who are passionate about Data science and technology. Our admission
                    process is designed to identify students with strong academic potential and a genuine interest in
                    the field.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We offer various programs at undergraduate, graduate, and doctoral levels, each designed to provide
                    comprehensive education and research opportunities.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#admission-requirements"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Admission Requirements
                    </a>
                    <a href="#admission-coordinator"
                        class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Admission Coordinator
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <!-- <div
                                class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-blue-600 text-8xl"></i>
                            </div> -->
                <div class="relative">
                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('admission/admission.png') }}" alt="University"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Admission Statistics --}}
    <section class="bg-gray-50 py-20 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Admission Statistics</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our admission statistics reflect the competitive nature of our programs and the quality of our
                    students.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-6xl font-bold text-blue-600 mb-2">5000+</div>
                    <div class="text-gray-600">Applications Received</div>
                </div>
                <div class="text-center">
                    <div class="text-6xl font-bold text-green-600 mb-2">300</div>
                    <div class="text-gray-600">Students Admitted</div>
                </div>
                <div class="text-center">
                    <div class="text-6xl font-bold text-purple-600 mb-2">6%</div>
                    <div class="text-gray-600">Acceptance Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-6xl font-bold text-red-600 mb-2">95%</div>
                    <div class="text-gray-600">Student Retention Rate</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Programs Offered --}}
    <section class="bg-white py-20 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Programs Offered</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    We offer comprehensive programs designed to prepare students for successful careers in computer
                    science.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Undergraduate Programs --}}
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Undergraduate Programs</h3>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• Bachelor of Computer Science (4 years)</li>
                        <li>• Bachelor of Software Engineering (4 years)</li>
                        <li>• Bachelor of Technology In Data science (4 years)</li>
                    </ul>
                    <div class="text-sm text-gray-600 mb-4">
                        <p><strong>Intake:</strong> 200 students per year</p>
                        <p><strong>Duration:</strong> 4 years</p>
                        <p><strong>Eligibility:</strong> 10+2 with Mathematics</p>
                    </div>
                    <a href="#"
                        class="block w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold text-center hover:bg-blue-700 transition duration-300">
                        Apply Now
                    </a>
                </div>

                {{-- Graduate Programs --}}
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-graduate text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Graduate Programs</h3>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• Master of Computer Science (2 years)</li>
                        <li>• Master of Software Engineering (2 years)</li>
                        <li>• Master of Data Science (2 years)</li>
                    </ul>
                    <div class="text-sm text-gray-600 mb-4">
                        <p><strong>Intake:</strong> 100 students per year</p>
                        <p><strong>Duration:</strong> 2 years</p>
                        <p><strong>Eligibility:</strong> Bachelor's in CS/IT</p>
                    </div>
                    <a href="#"
                        class="block w-full bg-green-600 text-white px-6 py-3 rounded-lg font-semibold text-center hover:bg-green-700 transition duration-300">
                        Apply Now
                    </a>
                </div>

                {{-- Doctoral Programs --}}
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-tie text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Doctoral Programs</h3>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>• PhD in Computer Science (3-5 years)</li>
                        <li>• PhD in Software Engineering (3-5 years)</li>
                        <li>• PhD in Information Technology (3-5 years)</li>
                    </ul>
                    <div class="text-sm text-gray-600 mb-4">
                        <p><strong>Intake:</strong> 50 students per year</p>
                        <p><strong>Duration:</strong> 3-5 years</p>
                        <p><strong>Eligibility:</strong> Master's in CS/IT</p>
                    </div>
                    <a href="#"
                        class="block w-full bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold text-center hover:bg-purple-700 transition duration-300">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Admission Requirements --}}
    <section id="admission-requirements" class="bg-gray-50 py-20 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Admission Requirements</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Detailed requirements for each program level to help you prepare your application.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Undergraduate Requirements --}}
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Undergraduate Programs</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Academic Requirements:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• 10+2 or equivalent with minimum 60% marks</li>
                                <li>• Mathematics as a compulsory subject</li>
                                <li>• Physics and Chemistry recommended</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Entrance Examination:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• University entrance test (UET)</li>
                                <li>• JEE Main scores accepted</li>
                                <li>• Minimum 50% in entrance exam</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Additional Requirements:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Statement of purpose</li>
                                <li>• Letters of recommendation (2)</li>
                                <li>• English proficiency test (if applicable)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Graduate Requirements --}}
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Graduate Programs</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Academic Requirements:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Bachelor's degree in CS/IT or related field</li>
                                <li>• Minimum GPA of 3.0/4.0 or 60%</li>
                                <li>• Strong foundation in programming</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Entrance Examination:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Graduate entrance test (GET)</li>
                                <li>• GATE scores accepted</li>
                                <li>• GRE scores for international students</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Additional Requirements:</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Research proposal (for thesis track)</li>
                                <li>• Letters of recommendation (3)</li>
                                <li>• Statement of purpose</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Admission Process --}}
    <section class="bg-white py-20 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Admission Process</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our streamlined admission process ensures a smooth experience for all applicants.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Step 1 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Application</h3>
                    <p class="text-gray-600 text-sm">Submit online application with required documents</p>
                </div>
                {{-- Step 2 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-green-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Entrance Exam</h3>
                    <p class="text-gray-600 text-sm">Appear for entrance examination or submit test scores</p>
                </div>
                {{-- Step 3 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-purple-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Interview</h3>
                    <p class="text-gray-600 text-sm">Personal interview and technical assessment</p>
                </div>
                {{-- Step 4 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-red-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Admission</h3>
                    <p class="text-gray-600 text-sm">Receive admission offer and complete enrollment</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Admission Coordinator --}}
    <section id="admission-coordinator" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Admission Coordinator</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Meet our Admission Coordinator who oversees all admission activities and provides guidance to
                    prospective students.
                </p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                    <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                            <div class="text-center"> -->
                    <!-- <div
                                                class="w-32 h-32 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                                                <i class="fas fa-user text-white text-5xl"></i>
                                            </div> -->
                    <!-- <div
                                    class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset('faculties/imrankhan.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">Dr. Imran Khan</h3>
                                <p>
                                    <i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:imrank@gmit.ac.in" class="hover:underline">
                                        imrank@gmit.ac.in
                                    </a>
                                </p>
                                <p>
                                    <i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+918073109504" class="hover:underline">
                                        +918073109504
                                    </a>
                                </p>
                            </div>
                            <div class="md:col-span-3 mt-6"></div>
                            <a href="https://www.linkedin.com/in/imran-khan-3a6a5a211" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i>
                                View LinkedIn
                            </a>
                            </div>
                        </div> -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div
                                class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('faculties/imrankhan.jpg') }}" alt="Profile"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="md:col-span-2 text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Dr. Imran Khan</h3>
                            <p>
                                <i class="fas fa-envelope mr-2"></i>
                                <a href="mailto:imrank@gmit.ac.in" class="hover:underline">
                                    imrank@gmit.ac.in
                                </a>
                            </p>
                            <p>
                                <i class="fas fa-phone mr-2"></i>
                                <a href="tel:+918073109504" class="hover:underline">
                                    +918073109504
                                </a>
                            </p>
                        </div>

                        <!-- Centered button spanning all columns -->
                        <div class="md:col-span-3 mt-6 flex justify-center">
                            <a href="https://www.linkedin.com/in/imran-khan-3a6a5a211" target="_blank"
                                rel="noopener noreferrer"
                                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center gap-2">
                                <i class="fab fa-linkedin text-lg"></i>
                                View LinkedIn
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- </div> -->
@endsection