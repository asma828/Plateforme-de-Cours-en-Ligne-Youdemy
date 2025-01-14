<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - My Courses</title>
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
                <div class="flex items-center space-x-2">
                    <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                    <span class="text-xl font-bold gradient-text">Youdemy</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Courses</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Categories</a>
                    <a href="#" class="text-blue-600 font-medium">Mes cours</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">John Doe</span>
                    <img src="/api/placeholder/32/32" alt="Profile" class="w-8 h-8 rounded-full">
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">My Learning Journey</h1>
                <p class="text-gray-600 text-lg mb-8">Track your progress and continue learning with your enrolled courses</p>
                <div class="grid grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <div class="text-3xl font-bold text-blue-600 mb-2">7</div>
                        <div class="text-gray-600">Enrolled Courses</div>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <div class="text-3xl font-bold text-blue-600 mb-2">3</div>
                        <div class="text-gray-600">In Progress</div>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <div class="text-3xl font-bold text-blue-600 mb-2">4</div>
                        <div class="text-gray-600">Completed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course List -->
    <main class="container mx-auto px-4 py-12">
        <!-- Tabs -->
        <div class="flex space-x-8 mb-8 border-b">
            <button class="px-4 py-2 text-blue-600 border-b-2 border-blue-600 font-medium">All Courses</button>
            <button class="px-4 py-2 text-gray-600 hover:text-blue-600">In Progress</button>
            <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Completed</button>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card 1 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm">
                        In Progress
                    </div>
                </div>
                <div class="p-6">
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Progress: 60%</span>
                            <span class="text-sm text-gray-600">12/20 Lessons</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">JavaScript Masterclass</h3>
                    <p class="text-gray-600 mb-4">Advanced JavaScript concepts and modern development practices.</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/32/32" alt="Instructor" class="w-8 h-8 rounded-full">
                            <span class="text-gray-600">Sarah Johnson</span>
                        </div>
                        <span class="text-sm text-gray-600">Last accessed: 2 days ago</span>
                    </div>
                    <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Continue Learning
                    </button>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm">
                        Completed
                    </div>
                </div>
                <div class="p-6">
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Progress: 100%</span>
                            <span class="text-sm text-gray-600">20/20 Lessons</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full w-full"></div>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">HTML & CSS Fundamentals</h3>
                    <p class="text-gray-600 mb-4">Master the basics of web development with HTML5 and CSS3.</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/32/32" alt="Instructor" class="w-8 h-8 rounded-full">
                            <span class="text-gray-600">Mike Wilson</span>
                        </div>
                        <span class="text-sm text-gray-600">Completed on: Jan 10, 2025</span>
                    </div>
                    <button class="w-full px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                        View Certificate
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>