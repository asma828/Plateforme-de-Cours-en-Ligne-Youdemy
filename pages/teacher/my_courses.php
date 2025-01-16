<?php
require_once "../../includes/auth_middleware.php";
requireRole('Teacher');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/umd/lucide.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Teacher Dashboard</h1>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Add New Course
            </button>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Courses -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Courses</p>
                        <h3 class="text-2xl font-bold mt-1">12</h3>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i data-lucide="book-open" class="w-6 h-6 text-blue-600"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-2">Active courses</p>
            </div>

            <!-- Total Students -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Students</p>
                        <h3 class="text-2xl font-bold mt-1">156</h3>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i data-lucide="users" class="w-6 h-6 text-green-600"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-2">Enrolled students</p>
            </div>

            <!-- Average Enrollment -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Avg. Enrollment</p>
                        <h3 class="text-2xl font-bold mt-1">13</h3>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i data-lucide="bar-chart" class="w-6 h-6 text-purple-600"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-2">Students per course</p>
            </div>
        </div>

        <!-- Course List -->
        <div class="bg-white rounded-lg shadow">
            <div class="border-b border-gray-200 p-6">
                <h2 class="text-xl font-semibold">Your Courses</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <!-- Course Items -->
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-lg">Introduction to Web Development</h3>
                            <p class="text-sm text-gray-600 mt-1">35 students enrolled</p>
                        </div>
                        <div class="space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 px-3 py-1">Edit</button>
                            <button class="text-red-600 hover:text-red-800 px-3 py-1">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Repeated course items -->
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-lg">Introduction to Web Development</h3>
                            <p class="text-sm text-gray-600 mt-1">35 students enrolled</p>
                        </div>
                        <div class="space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 px-3 py-1">Edit</button>
                            <button class="text-red-600 hover:text-red-800 px-3 py-1">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-lg">Introduction to Web Development</h3>
                            <p class="text-sm text-gray-600 mt-1">35 students enrolled</p>
                        </div>
                        <div class="space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 px-3 py-1">Edit</button>
                            <button class="text-red-600 hover:text-red-800 px-3 py-1">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>