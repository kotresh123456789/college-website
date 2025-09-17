@extends('layouts.department')

@section('title', 'Faculty')

@section('content')
    <!-- Page Header -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
                                                                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                                                     <div class="text-center">
                                                                                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Faculty Profile</h1>
                                                                                        <p class="text-xl text-blue-100">Meet Our Distinguished Faculty</p>
                                                                                    </div>
                                                                                    <div class="text-center">
                                                                              <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-cyan-200 to-white text-transparent bg-clip-text" style="font-family: 'Orbitron', sans-serif;">
                                                                                Department of Data Science
                                                                              </h1>
                                                                              <p class="text-xl text-blue-100">
                                                                                Meet Our Distinguished Faculty
                                                                              </p>
                                                                            </div>


                                                                                </div>
                                                                            </section> -->
    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    Faculty Profile
                </h1>
                <p class="text-xl text-purple-200">
                    Meet Our Distinguished Faculty
                </p>
            </div>
        </div>
    </section>







    <!-- Faculty Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty Categories</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty members are categorized based on their expertise and roles within the department.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Professors</h3>
                    <div class="text-3xl font-bold text-blue-600">15</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-graduate text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Associate Professors</h3>
                    <div class="text-3xl font-bold text-green-600">20</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Assistant Professors</h3>
                    <div class="text-3xl font-bold text-purple-600">12</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chalkboard-teacher text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Lecturers</h3>
                    <div class="text-3xl font-bold text-red-600">8</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Faculty -->

    <section class="py-16 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Featured Faculty</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Meet some of our distinguished faculty members who are leading experts in their fields.
                </p>
            </div>

            <div class="relative overflow-hidden">
                <!-- Slider -->
                <div id="facultySlider" class="flex transition-transform duration-700 ease-in-out">
                    <!-- Faculty Member 1 -->
                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <!-- Solid LinkedIn blue border -->
                                <div class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/firozkhan.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover" />
                                </div>

                                <h3 class="text-xl font-bold text-gray-900">Mr. Firoz Khan</h3>
                                <p class="text-blue-600 font-semibold">Professor & HoD</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">Ph.D. in Computer Science, MIT</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>

                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:dummy@gmit.ac.in" class="hover:underline">dummy@gmit.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+918105093624" class="hover:underline">+918105093624</a>
                                </p>
                            </div>

                            <a href="https://www.linkedin.com/in/firozkhan2017" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>

                    <!-- Faculty Member 2 -->

                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/imrankhan.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Mr. Imran Khan</h3>
                                <p class="text-blue-600 font-semibold">Associate Professor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">M.Tech , PhD</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Network
                                        Security</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Cryptography</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Ethical Hacking</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:imrank@gmit.ac.in" class="hover:underline">
                                        imrank@gmit.ac.in
                                    </a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+918073109504" class="hover:underline">
                                        +918073109504
                                    </a>
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/imran-khan-3a6a5a211" target="_blank"
                                rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>

                    <!-- Faculty Member 3 -->

                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Dr. Sreevani Maddukuri</h3>
                                <p class="text-blue-600 font-semibold">Professor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">Ph.D.</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:dummy@gmit.ac.in" class="hover:underline">dummy@gmit.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+910000000000" class="hover:underline">+9100000000000</a>
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>


                    <!-- Faculty Member 4 -->
                     <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/ashwinigt.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Ms. Ashwini G T</h3>
                                <p class="text-blue-600 font-semibold">Assistant Professor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">M.Tech , PhD</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:ashwinigt.fet.scst@gmu.ac.in"
                                        class="hover:underline">ashwinigt.fet.scst@gmu.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+919739630606" class="hover:underline">+919739630606</a>
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>
                    
                    

                    <!-- Faculty Member 5 -->

                   <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Ms. Ramya B N</h3>
                                <p class="text-blue-600 font-semibold">Assistant Professor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">M.Tech in D.E</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:ramyaannigeri.fet.scst@gmu.ac.in"
                                        class="hover:underline">ramyaannigeri.fet.scst@gmu.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+910000000000" class="hover:underline">+910000000000</a>
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>

                    <!-- Faculty Member 6 -->
                     <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/yashoda.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Ms. Yashoda M S</h3>
                                <p class="text-blue-600 font-semibold">Assistant Professor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">MCA</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Big Data</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Analytics</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Visualization</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:yasodams.fet.scst.ise@gmu.ac.in" class="hover:underline">
                                        yasodams.fet.scst.ise@gmu.ac.in
                                    </a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+917676544885" class="hover:underline">
                                        +917676544885
                                    </a>
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/" target="_blank" rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>

                    

                    <!-- Faculty Member 7 -->
                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/jayalaxmin.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Ms. Jayalaxmi N S</h3>
                                <p class="text-blue-600 font-semibold">Tutor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">B.E in CSE</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:jayalaxmin.fet.scst.ise@gmu.ac.in"
                                        class="hover:underline">jayalaxmin.fet.scst.ise@gmu.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+919620934106" class="hover:underline">+919620934106</a>
                                </p>
                            </div>
                            <a href="https://www.https://www.linkedin.com/in/jayalaxmi-n-sanningammanavar" target="_blank"
                                rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>
                    

                    <!-- Faculty Member 8 -->
                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Ms. Ananya H Doddagoudar</h3>
                                <p class="text-blue-600 font-semibold">Tutor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">B.E in ECE</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:ananyahdoddagoudar.fet.scst@gmu.ac.in"
                                        class="hover:underline">ananyahdoddagoudar.fet.scst@gmu.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+918105093624" class="hover:underline">+9199722035565</a>
                                </p>
                            </div>
                            <a href="https://www.https://www.linkedin.com/in/ananya-h-doddagoudar-19115a1b3" target="_blank"
                                rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>

                    <!-- Faculty Member 9 -->
                    <div class="w-full md:w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="text-center mb-6">
                                <div
                                    class="w-28 h-28 mx-auto mb-4 rounded-full border-4 border-[#0A66C2] overflow-hidden">
                                    <img src="{{ asset('faculties/manojp.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Mr. Manoj P</h3>
                                <p class="text-blue-600 font-semibold">Tutor</p>
                                <p class="text-gray-600 text-sm">Data Science</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                                <p class="text-gray-600 text-sm">B.E in TCE</p>
                            </div>
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                                <div class="flex flex-wrap gap-1">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine
                                        Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-600 mb-4">
                                <p><i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:manojp.fet.scst.ise@gmu.ac.in"
                                        class="hover:underline">manojp.fet.scst.ise@gmu.ac.in</a>
                                </p>
                                <p><i class="fas fa-phone mr-2"></i>
                                    <a href="tel:+919886529313" class="hover:underline">+919886529313</a>
                                </p>
                            </div>
                            <a href="https://www.https://www.linkedin.com/in/manojpdvg" target="_blank"
                                rel="noopener noreferrer"
                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 text-center">
                                <i class="fab fa-linkedin text-lg"></i> View LinkedIn
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prevBtn"
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white shadow p-2 rounded-full hover:bg-gray-100 z-10">
                    <i class="fas fa-angle-left text-2xl text-gray-700"></i>
                </button>
                <button id="nextBtn"
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow p-2 rounded-full hover:bg-gray-100 z-10">
                    <i class="fas fa-angle-right text-2xl text-gray-700"></i>
                </button>

                <!-- Pagination Dots -->
                <div id="dotsContainer" class="flex justify-center mt-6 space-x-2"></div>
            </div>
        </div>
    </section>

    <script>
        const slider = document.getElementById('facultySlider');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const dotsContainer = document.getElementById('dotsContainer');
        const totalCards = slider.children.length;
        let visibleCards = window.innerWidth < 768 ? 1 : 3;
        let totalGroups = Math.ceil(totalCards / visibleCards);
        let index = 0;

        function updateVisibleCards() {
            visibleCards = window.innerWidth < 768 ? 1 : 3;
            totalGroups = Math.ceil(totalCards / visibleCards);
            createDots();
            updateSlider();
        }

        function updateSlider() {
            // Calculate group width: 100% for the whole visible group
            const translateX = -(index * 100);
            slider.style.transform = `translateX(${translateX}%)`;
            updateDots();
        }

        function showNext() {
            index = (index + 1) % totalGroups;
            updateSlider();
        }

        function showPrev() {
            index = (index - 1 + totalGroups) % totalGroups;
            updateSlider();
        }

        nextBtn.addEventListener('click', () => { showNext(); resetAutoplay(); });
        prevBtn.addEventListener('click', () => { showPrev(); resetAutoplay(); });

        // Swipe Support
        let startX = 0;
        slider.addEventListener('touchstart', e => startX = e.touches[0].clientX);
        slider.addEventListener('touchend', e => {
            const diff = startX - e.changedTouches[0].clientX;
            if (diff > 50) showNext();
            else if (diff < -50) showPrev();
            resetAutoplay();
        });

        // Autoplay
        let autoplay = setInterval(showNext, 5000);
        function resetAutoplay() {
            clearInterval(autoplay);
            autoplay = setInterval(showNext, 5000);
        }

        // Dots
        function createDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < totalGroups; i++) {
                const dot = document.createElement('span');
                dot.className = 'w-3 h-3 rounded-full cursor-pointer bg-gray-300';
                dot.addEventListener('click', () => {
                    index = i;
                    updateSlider();
                    resetAutoplay();
                });
                dotsContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = dotsContainer.children;
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = `w-3 h-3 rounded-full cursor-pointer transition-colors duration-300 ${i === index ? 'bg-blue-600' : 'bg-gray-300'
                    }`;
            }
        }

        window.addEventListener('resize', updateVisibleCards);

        createDots();
        updateSlider();
    </script>


    <script>
        const slider = document.getElementById('facultySlider');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const dotsContainer = document.getElementById('dotsContainer');
        const totalCards = 9;
        let visibleCards = window.innerWidth < 768 ? 1 : 3;
        let totalGroups = Math.ceil(totalCards / visibleCards);
        let index = 0;

        function updateVisibleCards() {
            visibleCards = window.innerWidth < 768 ? 1 : 3;
            totalGroups = Math.ceil(totalCards / visibleCards);
            createDots();
            updateSlider();
        }

        function updateSlider() {
            const translateX = -(index * (100 / visibleCards));
            slider.style.transform = `translateX(${translateX}%)`;
            updateDots();
        }

        function showNext() {
            index = (index + 1) % totalGroups;
            updateSlider();
        }

        function showPrev() {
            index = (index - 1 + totalGroups) % totalGroups;
            updateSlider();
        }

        nextBtn.addEventListener('click', () => { showNext(); resetAutoplay(); });
        prevBtn.addEventListener('click', () => { showPrev(); resetAutoplay(); });

        // Swipe Support
        let startX = 0;
        slider.addEventListener('touchstart', e => startX = e.touches[0].clientX);
        slider.addEventListener('touchend', e => {
            const diff = startX - e.changedTouches[0].clientX;
            if (diff > 50) showNext();
            else if (diff < -50) showPrev();
            resetAutoplay();
        });

        // Autoplay
        let autoplay = setInterval(showNext, 5000);
        function resetAutoplay() {
            clearInterval(autoplay);
            autoplay = setInterval(showNext, 5000);
        }

        // Dots Creation
        function createDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < totalGroups; i++) {
                const dot = document.createElement('span');
                dot.className = `w-3 h-3 rounded-full cursor-pointer bg-gray-300`;
                dot.addEventListener('click', () => {
                    index = i;
                    updateSlider();
                    resetAutoplay();
                });
                dotsContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = dotsContainer.children;
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = `w-3 h-3 rounded-full cursor-pointer transition-colors duration-300 ${i === index ? 'bg-blue-600' : 'bg-gray-300'
                    }`;
            }
        }

        window.addEventListener('resize', updateVisibleCards);

        createDots();
        updateSlider();
    </script>


    <!-- Faculty by Specialization -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty by Specialization</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty members specialize in various areas of computer science and technology.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- AI & Machine Learning -->
                <div class="bg-blue-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-brain text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">AI & Machine Learning</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Sarah Johnson (Professor)</li>
                        <li>• Dr. David Kim (Associate Professor)</li>
                        <li>• Dr. Lisa Wang (Assistant Professor)</li>
                        <li>• Dr. Robert Brown (Lecturer)</li>
                    </ul>
                </div>

                <!-- Cybersecurity -->
                <div class="bg-green-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Cybersecurity</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Michael Chen (Associate Professor)</li>
                        <li>• Dr. Jennifer Lee (Assistant Professor)</li>
                        <li>• Dr. Thomas Wilson (Lecturer)</li>
                        <li>• Dr. Maria Garcia (Lecturer)</li>
                    </ul>
                </div>

                <!-- Data Science -->
                <div class="bg-purple-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-chart-bar text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Data Science</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Emily Rodriguez (Assistant Professor)</li>
                        <li>• Dr. James Taylor (Associate Professor)</li>
                        <li>• Dr. Anna Martinez (Lecturer)</li>
                        <li>• Dr. Kevin Liu (Lecturer)</li>
                    </ul>
                </div>

                <!-- Software Engineering -->
                <div class="bg-red-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-code text-red-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Software Engineering</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Richard Davis (Professor)</li>
                        <li>• Dr. Susan Miller (Associate Professor)</li>
                        <li>• Dr. Daniel White (Assistant Professor)</li>
                        <li>• Dr. Patricia Jones (Lecturer)</li>
                    </ul>
                </div>

                <!-- Computer Networks -->
                <div class="bg-yellow-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-network-wired text-yellow-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Computer Networks</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Christopher Moore (Professor)</li>
                        <li>• Dr. Amanda Clark (Associate Professor)</li>
                        <li>• Dr. Steven Lewis (Assistant Professor)</li>
                        <li>• Dr. Rachel Adams (Lecturer)</li>
                    </ul>
                </div>

                <!-- Human-Computer Interaction -->
                <div class="bg-indigo-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-mouse-pointer text-indigo-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">HCI & UX</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Dr. Michelle Turner (Associate Professor)</li>
                        <li>• Dr. Andrew Parker (Assistant Professor)</li>
                        <li>• Dr. Samantha Reed (Lecturer)</li>
                        <li>• Dr. Brian Foster (Lecturer)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Achievements -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty Achievements</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty members have received numerous awards and recognition for their contributions to computer
                    science.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">150+</div>
                    <div class="text-gray-600">Research Papers Published</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">25</div>
                    <div class="text-gray-600">Patents Filed</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">12</div>
                    <div class="text-gray-600">Awards Received</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="text-4xl font-bold text-red-600 mb-2">50+</div>
                    <div class="text-gray-600">PhD Students Guided</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Faculty -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Our Faculty</h2>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Interested in collaborating with our faculty or have questions about their research?
                    Feel free to reach out to them directly.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:faculty@university.edu"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-envelope mr-2"></i>Email Faculty
                    </a>
                    <a href="{{ route('department.research') }}"
                        class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        <i class="fas fa-flask mr-2"></i>View Research
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection