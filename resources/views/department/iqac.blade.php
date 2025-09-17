@extends('layouts.department')

@section('title', 'IQAC Documents')

@section('content')
<!-- Page Header -->
<!-- <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">IQAC Documents</h1>
            <p class="text-xl text-blue-100">Internal Quality Assurance Cell</p>
        </div>
    </div>
</section> -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

<section class="bg-purple-600 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg" style="font-family: 'Orbitron', sans-serif;">
        IQAC Documents
      </h1>
      <p class="text-xl text-purple-200">
        Internal Quality Assurance Cell
      </p>
    </div>
  </div>
</section>

<!-- IQAC Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Quality Assurance</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The Internal Quality Assurance Cell (IQAC) ensures continuous improvement 
                    in the quality of education and research at our department. We maintain 
                    high standards through systematic evaluation and enhancement processes.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our IQAC documents provide transparency and accountability in our academic 
                    processes, ensuring that we meet and exceed national and international standards.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#iqac-coordinator" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        IQAC Coordinator
                    </a>
                    <a href="#quality-documents" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Quality Documents
                    </a>
                </div>
            </div>
            <div class="relative">
                <!-- <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clipboard-check text-blue-600 text-8xl"></i>
                </div> -->

                <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('iqac/iqac.png') }}" alt="research" class="w-full h-full object-cover" />
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- IQAC Coordinator -->
<section id="iqac-coordinator" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">IQAC Coordinator</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet our IQAC Coordinator who oversees quality assurance activities and ensures compliance with standards.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Anna Martinez</h3>
                        <p class="text-indigo-600 font-semibold mb-4">IQAC Coordinator</p>
                        <p class="text-gray-600 mb-4">
                            Dr. Anna Martinez leads our IQAC team and has extensive experience 
                            in quality assurance and accreditation processes. She has successfully 
                            guided the department through multiple accreditation cycles and 
                            maintains the highest standards of academic excellence.
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-envelope mr-2"></i>anna.martinez@university.edu</p>
                            <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4574</p>
                            <p><i class="fas fa-map-marker-alt mr-2"></i>IQAC Office, CS Building</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality Documents -->
<section id="quality-documents" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Quality Documents</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Access to important quality assurance documents and reports.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Document 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-file-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Policy</h3>
                <p class="text-gray-600 mb-4">
                    Our department's quality policy outlining our commitment to excellence 
                    in education, research, and service.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Last Updated:</strong> January 2024</p>
                    <p><strong>Version:</strong> 3.0</p>
                </div>
                <a href="#" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>

            <!-- Document 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Annual Quality Report</h3>
                <p class="text-gray-600 mb-4">
                    Comprehensive annual report on quality metrics, achievements, 
                    and improvement initiatives.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Year:</strong> 2023-2024</p>
                    <p><strong>Pages:</strong> 150</p>
                </div>
                <a href="#" class="w-full bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>

            <!-- Document 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-clipboard-list text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Self-Assessment Report</h3>
                <p class="text-gray-600 mb-4">
                    Detailed self-assessment report covering all aspects of 
                    academic and administrative processes.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Last Updated:</strong> December 2023</p>
                    <p><strong>Pages:</strong> 200</p>
                </div>
                <a href="#" class="w-full bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>

            <!-- Document 4 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Academic Audit Report</h3>
                <p class="text-gray-600 mb-4">
                    Comprehensive audit report on academic processes, 
                    curriculum, and teaching methodologies.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Audit Period:</strong> 2023</p>
                    <p><strong>Pages:</strong> 120</p>
                </div>
                <a href="#" class="w-full bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>

            <!-- Document 5 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-users text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Faculty Evaluation Report</h3>
                <p class="text-gray-600 mb-4">
                    Annual evaluation report on faculty performance, 
                    teaching effectiveness, and research contributions.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Evaluation Period:</strong> 2023-2024</p>
                    <p><strong>Pages:</strong> 80</p>
                </div>
                <a href="#" class="w-full bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-yellow-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>

            <!-- Document 6 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Process Manual</h3>
                <p class="text-gray-600 mb-4">
                    Detailed manual covering all academic and administrative 
                    processes and procedures.
                </p>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Last Updated:</strong> November 2023</p>
                    <p><strong>Pages:</strong> 300</p>
                </div>
                <a href="#" class="w-full bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 text-center block">
                    Download PDF
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quality Metrics -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Quality Metrics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Key performance indicators and quality metrics for our department.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">95%</div>
                <div class="text-gray-600">Student Satisfaction</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">98%</div>
                <div class="text-gray-600">Faculty Qualification</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">90%</div>
                <div class="text-gray-600">Research Output</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">85%</div>
                <div class="text-gray-600">Industry Collaboration</div>
            </div>
        </div>
    </div>
</section>

<!-- Accreditation Status -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Accreditation Status</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our department maintains accreditation from prestigious national and international bodies.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- National Accreditation -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">National Accreditation</h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>NAAC (National Assessment and Accreditation Council) - Grade A+</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>NBA (National Board of Accreditation) - Accredited</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>UGC (University Grants Commission) - Recognized</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>AICTE (All India Council for Technical Education) - Approved</span>
                    </li>
                </ul>
            </div>

            <!-- International Accreditation -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">International Accreditation</h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ABET (Accreditation Board for Engineering and Technology) - Accredited</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>IEEE (Institute of Electrical and Electronics Engineers) - Member</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ACM (Association for Computing Machinery) - Member</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ISO 9001:2015 - Certified</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Quality Initiatives -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Quality Initiatives</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Ongoing initiatives to maintain and improve quality standards.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Initiative 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-chalkboard-teacher text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Faculty Development</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Regular training programs</li>
                    <li>• Industry exposure</li>
                    <li>• Research skill enhancement</li>
                    <li>• Teaching methodology workshops</li>
                </ul>
            </div>

            <!-- Initiative 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-book text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Curriculum Enhancement</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Industry-aligned curriculum</li>
                    <li>• Regular syllabus updates</li>
                    <li>• Practical skill integration</li>
                    <li>• Emerging technology inclusion</li>
                </ul>
            </div>

            <!-- Initiative 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-flask text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Research Quality</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Research methodology training</li>
                    <li>• Publication support</li>
                    <li>• Collaboration facilitation</li>
                    <li>• Quality peer review</li>
                </ul>
            </div>

            <!-- Initiative 4 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-users text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Student Support</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Mentorship programs</li>
                    <li>• Career guidance</li>
                    <li>• Academic support</li>
                    <li>• Wellness initiatives</li>
                </ul>
            </div>

            <!-- Initiative 5 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Process Improvement</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Process automation</li>
                    <li>• Digital transformation</li>
                    <li>• Efficiency enhancement</li>
                    <li>• Continuous monitoring</li>
                </ul>
            </div>

            <!-- Initiative 6 -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Stakeholder Engagement</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Industry partnerships</li>
                    <li>• Alumni engagement</li>
                    <li>• Community outreach</li>
                    <li>• Feedback mechanisms</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact IQAC -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact IQAC</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                For questions about quality assurance, accreditation, or access to documents, 
                please contact our IQAC team.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:iqac@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email IQAC
                </a>
                <a href="tel:+15551234574" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-phone mr-2"></i>Call IQAC Office
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
