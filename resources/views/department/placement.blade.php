@extends('layouts.department')

@section('title', 'Placement Activities')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
<!-- Page Header -->
<!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Placement Activities</h1>
            <p class="text-xl text-blue-100">Building Careers in Technology</p>
        </div>
    </div>
</section> -->
<section class="bg-purple-600 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg" style="font-family: 'Orbitron', sans-serif;">
        Placement Activities
      </h1>
      <p class="text-xl text-purple-200">
        Building Careers in Technology
      </p>
    </div>
  </div>
</section>

<!-- Placement Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Excellent Placement Record</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our department has consistently maintained an outstanding placement record with 
                    95% of our graduates securing positions in top-tier companies. We work closely 
                    with industry leaders to ensure our students are well-prepared for successful careers.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our placement cell provides comprehensive career guidance, interview preparation, 
                    and connects students with leading technology companies worldwide.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#placement-stats" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Placement Statistics
                    </a>
                    <a href="#recruiters" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Our Recruiters
                    </a>
                </div>
            </div>
            <div class="relative">
                <!-- <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-briefcase text-blue-600 text-8xl"></i>
                </div> -->

                <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('indexpagephotos/internship.jpg') }}" alt="research" class="w-full h-full object-cover" />
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- Placement Statistics -->
<section id="placement-stats" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Placement Statistics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our graduates have achieved remarkable success in securing positions at leading companies.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">95%</div>
                <div class="text-gray-600">Placement Rate</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">150+</div>
                <div class="text-gray-600">Companies Visited</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">₹12L</div>
                <div class="text-gray-600">Average Package</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">₹45L</div>
                <div class="text-gray-600">Highest Package</div>
            </div>
        </div>
    </div>
</section>

<!-- Placement Coordinator -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Placement Coordinator</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet our Placement Coordinator who oversees all placement activities and career development programs.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Robert Wilson</h3>
                        <p class="text-green-600 font-semibold mb-4">Placement Coordinator</p>
                        <p class="text-gray-600 mb-4">
                            Dr. Robert Wilson leads our placement cell and has over 15 years of experience 
                            in industry relations and career development. He has successfully placed over 
                            1000 students in top companies and maintains strong relationships with industry leaders.
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-envelope mr-2"></i>robert.wilson@university.edu</p>
                            <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4571</p>
                            <p><i class="fas fa-map-marker-alt mr-2"></i>Placement Office, CS Building</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Recruiters -->
<section id="recruiters" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Top Recruiters</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We are proud to have partnerships with leading technology companies worldwide.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Tech Giants -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-google text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Google</h3>
                <p class="text-gray-600 text-sm">Software Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹35L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-microsoft text-gray-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Microsoft</h3>
                <p class="text-gray-600 text-sm">Software Developer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹30L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-amazon text-orange-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Amazon</h3>
                <p class="text-gray-600 text-sm">Software Development Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹28L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-meta text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Meta</h3>
                <p class="text-gray-600 text-sm">Software Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹32L+</p>
            </div>

            <!-- Indian Tech Companies -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">TCS</h3>
                <p class="text-gray-600 text-sm">Software Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹8L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Infosys</h3>
                <p class="text-gray-600 text-sm">Systems Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹7L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Wipro</h3>
                <p class="text-gray-600 text-sm">Project Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹6L+</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">HCL</h3>
                <p class="text-gray-600 text-sm">Software Engineer</p>
                <p class="text-blue-600 font-semibold text-sm mt-2">₹6.5L+</p>
            </div>
        </div>
    </div>
</section>

<!-- Placement Process -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Placement Process</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our systematic placement process ensures students get the best opportunities.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-blue-600 font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Registration</h3>
                <p class="text-gray-600 text-sm">Students register for placement activities and submit their profiles</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-green-600 font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Preparation</h3>
                <p class="text-gray-600 text-sm">Mock interviews, resume building, and skill enhancement sessions</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-purple-600 font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Company Visits</h3>
                <p class="text-gray-600 text-sm">Companies conduct campus interviews and technical assessments</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-red-600 font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Selection</h3>
                <p class="text-gray-600 text-sm">Final selection and offer letters from companies</p>
            </div>
        </div>
    </div>
</section>

<!-- Career Development -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Career Development Programs</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We provide comprehensive career development support to help students succeed.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Soft Skills Training -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-comments text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Soft Skills Training</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Communication skills</li>
                    <li>• Leadership development</li>
                    <li>• Team collaboration</li>
                    <li>• Presentation skills</li>
                    <li>• Interview preparation</li>
                </ul>
            </div>

            <!-- Technical Skills -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-code text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Technical Skills</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Programming languages</li>
                    <li>• Data structures & algorithms</li>
                    <li>• System design</li>
                    <li>• Database management</li>
                    <li>• Cloud computing</li>
                </ul>
            </div>

            <!-- Industry Exposure -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-industry text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Industry Exposure</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Industry visits</li>
                    <li>• Guest lectures</li>
                    <li>• Internship programs</li>
                    <li>• Live projects</li>
                    <li>• Mentorship programs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Success Stories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Hear from our alumni who have achieved great success in their careers.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Success Story 1 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="text-center mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Priya Sharma</h3>
                    <p class="text-blue-600 font-semibold">Software Engineer at Google</p>
                </div>
                <p class="text-gray-600 text-sm italic">
                    "The department's focus on practical learning and industry exposure helped me 
                    secure my dream job at Google. The placement cell provided excellent guidance 
                    throughout the process."
                </p>
                <div class="mt-4 text-sm text-gray-600">
                    <p><strong>Package:</strong> ₹45L per annum</p>
                    <p><strong>Batch:</strong> 2023</p>
                </div>
            </div>

            <!-- Success Story 2 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="text-center mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Arjun Patel</h3>
                    <p class="text-green-600 font-semibold">Data Scientist at Microsoft</p>
                </div>
                <p class="text-gray-600 text-sm italic">
                    "The research opportunities and mentorship I received at the department 
                    prepared me well for a career in data science. The faculty's support was invaluable."
                </p>
                <div class="mt-4 text-sm text-gray-600">
                    <p><strong>Package:</strong> ₹38L per annum</p>
                    <p><strong>Batch:</strong> 2022</p>
                </div>
            </div>

            <!-- Success Story 3 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="text-center mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Sneha Reddy</h3>
                    <p class="text-purple-600 font-semibold">Cybersecurity Analyst at Amazon</p>
                </div>
                <p class="text-gray-600 text-sm italic">
                    "The cybersecurity specialization and hands-on projects gave me the edge 
                    I needed to excel in my field. The placement process was smooth and well-organized."
                </p>
                <div class="mt-4 text-sm text-gray-600">
                    <p><strong>Package:</strong> ₹32L per annum</p>
                    <p><strong>Batch:</strong> 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Placement Cell -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Placement Cell</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                For companies interested in recruiting our students or students seeking placement assistance, 
                please contact our placement cell.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:placement@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email Placement Cell
                </a>
                <a href="tel:+15551234571" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-phone mr-2"></i>Call Placement Office
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
