@extends('layouts.department')

@section('title', 'Faculty Achievements')

@section('content')
    <!-- Page Header -->
    <!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Faculty Achievements</h1>
                <p class="text-xl text-blue-100">Celebrating Excellence in Teaching & Research</p>
            </div>
        </div>
    </section> -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <section class="bg-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg"
                    style="font-family: 'Orbitron', sans-serif;">
                    Faculty Achievements
                </h1>
                <p class="text-xl text-purple-200">
                    Celebrating Excellence in Teaching & Research
                </p>
            </div>
        </div>
    </section>

    <!-- Faculty Achievements Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Recognizing Excellence</h2>
                    <!-- <p class="text-gray-600 mb-6 leading-relaxed">
                        Our faculty members have received numerous awards, recognitions, and achievements 
                        for their outstanding contributions to computer science education, research, and 
                        industry collaboration.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        These achievements reflect our commitment to excellence and our faculty's dedication 
                        to advancing the field of computer science through innovative research and teaching.
                    </p> -->
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our team from SCST, GM University Secured 2nd place in the National Level 24-hours Hackathon held in
                        Hyderabad! Innovation : Enhancing Health and well being through Gen AI
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Team members Yashaswini D. S (DS) , Rahul R Gadgimata(AIML), Yashwanth VS Devang(AIML), and Abhiram
                        Naik(CY) proudly represented the university, showcasing innovation, dedication, and teamwork on a
                        prestigious platform.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#awards-recognitions"
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                            Awards & Recognitions
                        </a>
                        <a href="#research-achievements"
                            class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                            Research Achievements
                        </a>
                    </div>
                </div>
                <!-- <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-trophy text-blue-600 text-8xl"></i>
                    </div>
                </div> -->
                <div class="relative">
                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('achievements/hackthon.jpg') }}" alt="University"
                            class="w-full h-full object-cover" />
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
                    Our faculty's achievements speak volumes about the quality of education and research at our department.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Awards Received</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-green-600 mb-2">200+</div>
                    <div class="text-gray-600">Research Papers Published</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-purple-600 mb-2">25</div>
                    <div class="text-gray-600">Patents Filed</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-red-600 mb-2">15</div>
                    <div class="text-gray-600">Industry Collaborations</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognitions -->
    <section id="awards-recognitions" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Awards & Recognitions</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Prestigious awards and recognitions received by our faculty members.
                </p>
            </div>

            <div class="space-y-8">
                <!-- Award 1 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <i class="fas fa-medal text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Dr. Sarah Johnson</h3>
                            <p class="text-blue-600 font-semibold">Professor</p>
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-2xl font-bold text-gray-900 mb-2">IEEE Fellow Award</h4>
                            <p class="text-gray-600 mb-4">
                                Recognized for outstanding contributions to artificial intelligence and machine learning
                                research.
                                This prestigious award is given to less than 0.1% of IEEE members worldwide.
                            </p>
                            <div class="text-sm text-gray-600">
                                <p><strong>Year:</strong> 2023 | <strong>Organization:</strong> IEEE</p>
                                <p><strong>Category:</strong> Research Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Award 2 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <i class="fas fa-award text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Dr. Michael Chen</h3>
                            <p class="text-green-600 font-semibold">Associate Professor</p>
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-2xl font-bold text-gray-900 mb-2">Best Teacher Award</h4>
                            <p class="text-gray-600 mb-4">
                                Awarded by the University for exceptional teaching performance and student mentorship.
                                Recognized for innovative teaching methods and positive impact on student learning outcomes.
                            </p>
                            <div class="text-sm text-gray-600">
                                <p><strong>Year:</strong> 2023 | <strong>Organization:</strong> University</p>
                                <p><strong>Category:</strong> Teaching Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Award 3 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <i class="fas fa-star text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Dr. Emily Rodriguez</h3>
                            <p class="text-purple-600 font-semibold">Assistant Professor</p>
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-2xl font-bold text-gray-900 mb-2">Young Researcher Award</h4>
                            <p class="text-gray-600 mb-4">
                                Recognized for outstanding research contributions in data science and analytics.
                                This award is given to researchers under 35 years of age who have made significant
                                contributions to their field.
                            </p>
                            <div class="text-sm text-gray-600">
                                <p><strong>Year:</strong> 2023 | <strong>Organization:</strong> ACM</p>
                                <p><strong>Category:</strong> Research Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Achievements -->
    <section id="research-achievements" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Achievements</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Significant research contributions and breakthroughs by our faculty members.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Research Achievement 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-flask text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI Breakthrough</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Sarah Johnson's research on quantum machine learning algorithms has been
                        published in Nature Machine Intelligence.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Impact Factor:</strong> 25.6</p>
                        <p><strong>Citations:</strong> 150+</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Research Achievement 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity Innovation</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Michael Chen developed a novel encryption algorithm that has been
                        adopted by major tech companies.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Patent Filed:</strong> Yes</p>
                        <p><strong>Industry Adoption:</strong> 5+ companies</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Research Achievement 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-bar text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Data Science Tool</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Emily Rodriguez created an open-source data visualization tool
                        with 10,000+ GitHub stars.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>GitHub Stars:</strong> 10,000+</p>
                        <p><strong>Downloads:</strong> 100,000+</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Research Achievement 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-code text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Software Engineering</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Richard Davis's research on automated testing has been featured
                        in IEEE Software magazine.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Impact Factor:</strong> 8.5</p>
                        <p><strong>Citations:</strong> 75+</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Research Achievement 5 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-network-wired text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Optimization</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Christopher Moore's work on 5G network optimization has been
                        cited 200+ times.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Citations:</strong> 200+</p>
                        <p><strong>Industry Impact:</strong> High</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Research Achievement 6 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-mouse-pointer text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">HCI Innovation</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Michelle Turner's research on accessibility interfaces has won
                        the CHI Best Paper Award.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Award:</strong> CHI Best Paper</p>
                        <p><strong>Impact:</strong> Accessibility</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Recognition -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Industry Recognition</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty members are recognized by industry leaders for their contributions to technology and
                    innovation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Industry Recognition 1 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Google Research Award</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Sarah Johnson received the Google Research Award for her contributions to
                        machine learning research. This award includes funding for continued research
                        and collaboration opportunities.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Recipient:</strong> Dr. Sarah Johnson</p>
                        <p><strong>Amount:</strong> $100,000</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Industry Recognition 2 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Microsoft MVP Award</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Michael Chen was recognized as a Microsoft Most Valuable Professional (MVP)
                        for his contributions to cybersecurity research and community engagement.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Recipient:</strong> Dr. Michael Chen</p>
                        <p><strong>Category:</strong> Security</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Industry Recognition 3 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Amazon Research Grant</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Emily Rodriguez received a research grant from Amazon for her work on
                        data analytics and machine learning applications in e-commerce.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Recipient:</strong> Dr. Emily Rodriguez</p>
                        <p><strong>Amount:</strong> $75,000</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>

                <!-- Industry Recognition 4 -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">IBM Faculty Award</h3>
                    <p class="text-gray-600 mb-4">
                        Dr. Richard Davis was awarded the IBM Faculty Award for his research on
                        software engineering methodologies and tools.
                    </p>
                    <div class="text-sm text-gray-600">
                        <p><strong>Recipient:</strong> Dr. Richard Davis</p>
                        <p><strong>Amount:</strong> $50,000</p>
                        <p><strong>Year:</strong> 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- International Recognition -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">International Recognition</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Our faculty members have received recognition from international organizations and conferences.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- International Recognition 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">ACM Distinguished Speaker</h3>
                    <p class="text-gray-600 text-sm">Dr. Sarah Johnson</p>
                </div>

                <!-- International Recognition 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">IEEE Senior Member</h3>
                    <p class="text-gray-600 text-sm">Dr. Michael Chen</p>
                </div>

                <!-- International Recognition 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Best Paper Award</h3>
                    <p class="text-gray-600 text-sm">Dr. Emily Rodriguez</p>
                </div>

                <!-- International Recognition 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Keynote Speaker</h3>
                    <p class="text-gray-600 text-sm">Dr. Richard Davis</p>
                </div>

                <!-- International Recognition 5 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Research Excellence</h3>
                    <p class="text-gray-600 text-sm">Dr. Christopher Moore</p>
                </div>

                <!-- International Recognition 6 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Editorial Board</h3>
                    <p class="text-gray-600 text-sm">Dr. Michelle Turner</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Faculty -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Connect with Our Faculty</h2>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Interested in collaborating with our faculty or learning more about their research?
                    Contact them directly or through our department.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('department.faculty') }}"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-users mr-2"></i>View Faculty Profiles
                    </a>
                    <a href="mailto:faculty@university.edu"
                        class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        <i class="fas fa-envelope mr-2"></i>Contact Faculty
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection