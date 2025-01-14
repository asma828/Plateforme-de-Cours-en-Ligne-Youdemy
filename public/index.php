<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Transform Your Future With Online Learning</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #3B82F6, #2563EB);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #EEF2FF 0%, #E0E7FF 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                    <span class="text-xl font-bold gradient-text">Youdemy</span>
                </div>

                <!-- Navigation Links - Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Courses</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Categories</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Teach</a>
                </div>

                <!-- Search and User Menu -->
                <div class="flex items-center space-x-4">
                    <!-- Search Bar -->
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="Search courses..." 
                               class="w-64 px-4 py-2 pl-10 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>

                    <!-- Auth Buttons -->
                    <div class="space-x-2">
                        <button class="px-4 py-2 text-blue-600 hover:text-blue-800 font-medium">Login</button>
                        <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium shadow-md hover:shadow-lg">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                        Transform Your Future With 
                        <span class="gradient-text">Online Learning</span>
                    </h1>
                    <p class="text-lg text-gray-600">
                        Access over 10,000 expert-led courses and join millions of students worldwide.
                    </p>
                    <div class="flex space-x-4">
                        <button class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium shadow-lg hover:shadow-xl">
                            Get Started
                        </button>
                        <button class="px-8 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-colors font-medium">
                            Browse Courses
                        </button>
                    </div>
                    <div class="flex items-center space-x-4 pt-4">
                        <div class="flex -space-x-2">
                            <img src="./assets/images/cours.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="./assets/images/cours.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="./assets/images/cours.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                        </div>
                        <p class="text-gray-600">Join over 100,000 learners</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">10K+</div>
                    <div class="text-gray-600">Courses</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">100K+</div>
                    <div class="text-gray-600">Students</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">1K+</div>
                    <div class="text-gray-600">Instructors</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">4.8/5</div>
                    <div class="text-gray-600">Rating</div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-gradient shadow-md">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <!-- Search Bar -->
                <div class="w-full md:w-1/3">
                    <div class="relative">
                        <input type="text" 
                               placeholder="Search courses..." 
                               class="w-full px-4 py-2 pl-10 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>

              
            </div>
        </div>
    </section>

    <!-- Course Catalog -->
    <main class="container mx-auto px-4 py-8">
        <!-- Results Info -->
        <div class="flex justify-between items-center mb-6">
            <p class="text-gray-600">Showing 1-9 of 145 courses</p>
            <select class="px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Most Popular</option>
                <option>Newest</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Cards (9 items for pagination example) -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <a href="#course-details" class="block">
                    <div class="relative">
                        <img src="./assets/images/cours.jpg" alt="Course" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
                            Bestseller
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Development</span>
                            <span class="text-gray-500">•</span>
                            <span class="text-gray-500">4.9 ⭐ (2.5k reviews)</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Complete Web Development Bootcamp</h3>
                        <p class="text-gray-600 mb-4">Master modern web development with this comprehensive course.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="/api/placeholder/32/32" alt="Instructor" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600">John Smith</span>
                            </div>
                            <span class="text-2xl font-bold text-blue-600">$89.99</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- More course cards... -->
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Previous</button>
                <button class="px-4 py-2 border rounded-lg bg-blue-600 text-white">1</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">2</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">3</button>
                <span class="px-4 py-2">...</span>
                <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">15</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Next</button>
            </nav>
        </div>
    </main>


    <!-- Categories Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Top Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <button class="p-8 bg-white rounded-xl shadow-md text-center hover:shadow-lg transition-shadow card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-2xl text-blue-600"></i>
                    </div>
                    <p class="font-medium text-lg">Programming</p>
                    <p class="text-gray-500 mt-2">1,500+ courses</p>
                </button>
                <button class="p-8 bg-white rounded-xl shadow-md text-center hover:shadow-lg transition-shadow card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-2xl text-green-600"></i>
                    </div>
                    <p class="font-medium text-lg">Business</p>
                    <p class="text-gray-500 mt-2">1,200+ courses</p>
                </button>
                <button class="p-8 bg-white rounded-xl shadow-md text-center hover:shadow-lg transition-shadow card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-palette text-2xl text-purple-600"></i>
                    </div>
                    <p class="font-medium text-lg">Design</p>
                    <p class="text-gray-500 mt-2">800+ courses</p>
                </button>
                <button class="p-8 bg-white rounded-xl shadow-md text-center hover:shadow-lg transition-shadow card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-language text-2xl text-red-600"></i>
                    </div>
                    <p class="font-medium text-lg">Languages</p>
                    <p class="text-gray-500 mt-2">900+ courses</p>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">What Our Students Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-md card-hover">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Emily Rodriguez</h4>
                            <p class="text-gray-600">Web Developer</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The web development course completely transformed my career. I went from knowing nothing to landing my dream job in just 6 months."</p>
                    <div class="mt-4 text-yellow-400">
                        ★★★★★
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-md card-hover">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Alex Chen</h4>
                            <p class="text-gray-600">UI/UX Designer</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The instructors are world-class and the course material is up-to-date with current industry standards. Highly recommended!"</p>
                    <div class="mt-4 text-yellow-400">
                        ★★★★★
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-md card-hover">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-600">Marketing Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The digital marketing courses helped me stay ahead of industry trends. The practical assignments were particularly valuable."</p>
                    <div class="mt-4 text-yellow-400">
                        ★★★★★
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Why Choose Youdemy</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="flex flex-col items-center text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-certificate text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Certified Courses</h3>
                    <p class="text-gray-600">Earn recognized certificates upon completion of our comprehensive courses.</p>
                </div>

                <!-- Feature 2 -->
                <div class="flex flex-col items-center text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Expert Instructors</h3>
                    <p class="text-gray-600">Learn from industry experts with years of practical experience.</p>
                </div>

                <!-- Feature 3 -->
                <div class="flex flex-col items-center text-center p-6">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-clock text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Lifetime Access</h3>
                    <p class="text-gray-600">Get unlimited access to your courses and learn at your own pace.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Learning?</h2>
                <p class="text-xl mb-8 opacity-90">Join millions of students and start your learning journey today!</p>
                <button class="px-8 py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition-colors font-medium shadow-lg hover:shadow-xl">
                    Get Started For Free
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Stay Updated</h2>
                <p class="text-gray-600 mb-8">Get notified about new courses and learning resources.</p>
                <div class="flex flex-col md:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Enter your email" 
                           class="px-6 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500 flex-grow max-w-md">
                    <button class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-graduation-cap text-2xl text-blue-400"></i>
                        <span class="text-xl font-bold">Youdemy</span>
                    </div>
                    <p class="text-gray-400">Transform your future with online learning.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">For Students</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">How it Works</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Courses</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Student Success</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">For Teachers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Become an Instructor</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teacher Academy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Guidelines</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Resources</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Youdemy. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>