<?php
session_start();
require_once "../../includes/init.php";
// Check for success message
if (isset($_SESSION['success_message'])) {
    $successMessage = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

use Youdemy\Classes\User;

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        // Validate input
        if (!$email || !$password) {
            throw new Exception('Please enter both email and password.');
        }

        // Attempt login
        $role = User::login($email, $password);

        // Redirect based on role
        switch ($role) {
            case 'Student':
                header('Location: ../student/courses_list.php');
                break;
            case 'Teacher':
                header('Location: ../teacher/my_courses.php');
                break;
            case 'Admin':
                header('Location: ../admin/dashboard.php');
                break;
            default:
                throw new Exception('Invalid user role.');
        }
        exit;

    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        $_SESSION['error_message'] = $errorMessage;
        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Login</title>
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
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen hero-gradient flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md mb-8">
            <div class="flex items-center justify-center">
                <i class="fas fa-graduation-cap text-3xl text-blue-600 mr-2"></i>
                <span class="text-2xl font-bold gradient-text">Youdemy</span>
            </div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="register.php" class="font-medium text-blue-600 hover:text-blue-500">create a new account</a>
            </p>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-xl sm:rounded-lg sm:px-10">
                <?php if (isset($successMessage)): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?= htmlspecialchars($successMessage) ?>
                    </div>
                <?php endif; ?>

                <form class="space-y-6" action="login.php" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="email" id="email" name="email" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember-me" name="remember-me" 
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign in
                    </button>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fab fa-google text-red-500 mr-2"></i>
                            Google
                        </a>
                        <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fab fa-github mr-2"></i>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>