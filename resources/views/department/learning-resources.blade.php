@extends('layouts.department')

@section('title', 'Learning Resources')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Learning Resources</h1>
            <p class="text-xl text-blue-100">Comprehensive Resources for Academic Excellence</p>
        </div>
    </div>
</section>

<!-- Learning Resources Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">State-of-the-Art Learning Facilities</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our department provides comprehensive learning resources to support student 
                    success and academic excellence. From modern computer laboratories to 
                    extensive digital libraries, we ensure students have access to the best 
                    tools and resources.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We continuously invest in upgrading our facilities and resources to keep 
                    pace with technological advancements and industry requirements.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#computer-labs" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Computer Labs
                    </a>
                    <a href="#library-resources" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Library Resources
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-book-open text-blue-600 text-8xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Computer Laboratories -->
<section id="computer-labs" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Computer Laboratories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our modern computer laboratories are equipped with the latest hardware and software to support learning and research.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Programming Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-code text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Programming Laboratory</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• 50 high-performance workstations</li>
                    <li>• Latest IDEs and compilers</li>
                    <li>• Multiple programming languages</li>
                    <li>• Version control systems</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 50 students</p>
                    <p><strong>Operating Hours:</strong> 8 AM - 10 PM</p>
                </div>
            </div>

            <!-- Database Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-database text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Database Laboratory</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• 30 workstations with database software</li>
                    <li>• MySQL, PostgreSQL, Oracle</li>
                    <li>• Data modeling tools</li>
                    <li>• Big data platforms</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 30 students</p>
                    <p><strong>Operating Hours:</strong> 9 AM - 9 PM</p>
                </div>
            </div>

            <!-- Network Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-network-wired text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Network Laboratory</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• Network simulation software</li>
                    <li>• Cisco equipment</li>
                    <li>• Wireless network testing</li>
                    <li>• Security testing tools</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 25 students</p>
                    <p><strong>Operating Hours:</strong> 9 AM - 8 PM</p>
                </div>
            </div>

            <!-- AI/ML Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-brain text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">AI/ML Laboratory</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• GPU-enabled workstations</li>
                    <li>• TensorFlow, PyTorch frameworks</li>
                    <li>• Data visualization tools</li>
                    <li>• Cloud computing access</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 20 students</p>
                    <p><strong>Operating Hours:</strong> 10 AM - 10 PM</p>
                </div>
            </div>

            <!-- Software Engineering Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Software Engineering Lab</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• Project management tools</li>
                    <li>• Testing frameworks</li>
                    <li>• DevOps tools</li>
                    <li>• Collaboration platforms</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 40 students</p>
                    <p><strong>Operating Hours:</strong> 8 AM - 9 PM</p>
                </div>
            </div>

            <!-- Cybersecurity Lab -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity Laboratory</h3>
                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>• Penetration testing tools</li>
                    <li>• Vulnerability scanners</li>
                    <li>• Forensic analysis tools</li>
                    <li>• Secure coding environments</li>
                </ul>
                <div class="text-sm text-gray-600">
                    <p><strong>Capacity:</strong> 25 students</p>
                    <p><strong>Operating Hours:</strong> 9 AM - 8 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Library Resources -->
<section id="library-resources" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Library Resources</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our extensive library provides access to a vast collection of books, journals, and digital resources.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Physical Library -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Physical Library</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Computer Science Books</span>
                        <span class="font-semibold text-gray-900">15,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Research Journals</span>
                        <span class="font-semibold text-gray-900">500+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Conference Proceedings</span>
                        <span class="font-semibold text-gray-900">2,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Theses & Dissertations</span>
                        <span class="font-semibold text-gray-900">1,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Study Spaces</span>
                        <span class="font-semibold text-gray-900">200+</span>
                    </div>
                </div>
            </div>

            <!-- Digital Resources -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Digital Resources</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">E-Books</span>
                        <span class="font-semibold text-gray-900">50,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">E-Journals</span>
                        <span class="font-semibold text-gray-900">10,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Online Databases</span>
                        <span class="font-semibold text-gray-900">25+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Video Lectures</span>
                        <span class="font-semibold text-gray-900">5,000+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Research Papers</span>
                        <span class="font-semibold text-gray-900">100,000+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Online Learning Platforms -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Online Learning Platforms</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Access to premium online learning platforms and educational resources.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Coursera -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Coursera</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Access to 5,000+ courses</li>
                    <li>• Specializations in CS</li>
                    <li>• Industry certifications</li>
                    <li>• Hands-on projects</li>
                </ul>
            </div>

            <!-- edX -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-university text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">edX</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• University-level courses</li>
                    <li>• MicroMasters programs</li>
                    <li>• Professional certificates</li>
                    <li>• Self-paced learning</li>
                </ul>
            </div>

            <!-- Udemy -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-play-circle text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Udemy</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Practical skill courses</li>
                    <li>• Latest technology trends</li>
                    <li>• Project-based learning</li>
                    <li>• Lifetime access</li>
                </ul>
            </div>

            <!-- LinkedIn Learning -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fab fa-linkedin text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">LinkedIn Learning</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Professional development</li>
                    <li>• Industry-specific skills</li>
                    <li>• Career advancement</li>
                    <li>• Expert instructors</li>
                </ul>
            </div>

            <!-- Pluralsight -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-code text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Pluralsight</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Technology skills</li>
                    <li>• Coding challenges</li>
                    <li>• Skill assessments</li>
                    <li>• Learning paths</li>
                </ul>
            </div>

            <!-- Khan Academy -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-lightbulb text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Khan Academy</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Free educational content</li>
                    <li>• Math and science</li>
                    <li>• Computer programming</li>
                    <li>• Interactive exercises</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Software & Tools -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Software & Development Tools</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Access to professional software and development tools for academic and research purposes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Programming Languages -->
            <div class="bg-blue-50 p-6 rounded-xl">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-code text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Programming Languages</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Python, Java, C++</li>
                    <li>• JavaScript, TypeScript</li>
                    <li>• R, MATLAB</li>
                    <li>• Go, Rust, Swift</li>
                </ul>
            </div>

            <!-- IDEs & Editors -->
            <div class="bg-green-50 p-6 rounded-xl">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-edit text-green-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">IDEs & Editors</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Visual Studio Code</li>
                    <li>• IntelliJ IDEA</li>
                    <li>• PyCharm, WebStorm</li>
                    <li>• Eclipse, NetBeans</li>
                </ul>
            </div>

            <!-- Database Tools -->
            <div class="bg-purple-50 p-6 rounded-xl">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-database text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Database Tools</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• MySQL, PostgreSQL</li>
                    <li>• MongoDB, Redis</li>
                    <li>• Oracle, SQL Server</li>
                    <li>• Database design tools</li>
                </ul>
            </div>

            <!-- Cloud Platforms -->
            <div class="bg-red-50 p-6 rounded-xl">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-cloud text-red-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Cloud Platforms</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• AWS, Azure, GCP</li>
                    <li>• Docker, Kubernetes</li>
                    <li>• Terraform, Ansible</li>
                    <li>• CI/CD tools</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Research Resources -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Research Resources</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Specialized resources and tools to support research activities and academic projects.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Research Databases -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Research Databases</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>IEEE Xplore Digital Library</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ACM Digital Library</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ScienceDirect</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>SpringerLink</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Google Scholar</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>ArXiv</span>
                    </li>
                </ul>
            </div>

            <!-- Research Tools -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Research Tools</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Reference management (Zotero, Mendeley)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Statistical analysis (SPSS, R)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Data visualization (Tableau, Power BI)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Collaboration tools (GitHub, GitLab)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Documentation (LaTeX, Overleaf)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                        <span>Project management (Trello, Asana)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Learning Resources -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Need Help with Resources?</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Our learning resources team is available to help you access and utilize 
                all available resources effectively.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:resources@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Contact Resources Team
                </a>
                <a href="#" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-question-circle mr-2"></i>Resource Help Guide
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
