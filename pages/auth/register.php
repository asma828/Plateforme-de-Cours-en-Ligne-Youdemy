<?php
require_once "../../includes/init.php";
session_start();

use Youdemy\Classes\User;

// Initialize error message variable
$errorMessage = '';

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $firstName = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm-password'] ?? '';
        $role = $_POST['role'] ?? '';

        // Validate required fields
        if (!$firstName || !$email || !$password || !$confirmPassword || !$role) {
            throw new Exception('All fields are required.');
        }

        // Check password confirmation
        if ($password !== $confirmPassword) {
            throw new Exception('Passwords do not match.');
        }

        // Validate password strength
        if (strlen($password) < 8) {
            throw new Exception('Password must be at least 8 characters long.');
        }

        // Create user object and attempt registration
        if (User::signup($firstName, $email, $password, $role)) {
            $_SESSION['success_message'] = 'Registration successful! Please login with your credentials.';
            header('Location: login.php');
            exit;
        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Register</title>
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
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="login.php" class="font-medium text-blue-600 hover:text-blue-500">sign in to your account</a>
            </p>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-xl sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <?php if (!empty($errorMessage)): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                        <input type="text" id="first-name" name="name" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="register-email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="email" id="register-email" name="email" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="register-password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="register-password" name="password" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required 
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Choose your role</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="relative flex items-center justify-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="role" value="Student" class="absolute opacity-0" required>
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-user-graduate text-2xl text-blue-600 mb-2"></i>
                                    <span class="text-sm font-medium">Student</span>
                                </div>
                            </label>
                            <label class="relative flex items-center justify-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="role" value="Teacher" class="absolute opacity-0">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-chalkboard-teacher text-2xl text-blue-600 mb-2"></i>
                                    <span class="text-sm font-medium">Teacher</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>