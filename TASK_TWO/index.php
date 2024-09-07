<?php
// index.php
include('./php/config.php');
include('html/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <title>BMI Calculator App</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-green-600 text-white py-4 shadow-lg">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <h1 class="text-3xl font-bold flex items-center gap-2">
                <i class="fas fa-calculator"></i> BMI Calculator App
            </h1>
            <nav>
                <a href="./php/login.php" class="text-white hover:text-green-200 transition-colors duration-300 mr-4"><i class="fas fa-sign-in-alt mr-1"></i>Login</a>
                <a href="./php/register.php" class="text-white hover:text-blue-200 transition-colors duration-300"><i class="fas fa-user-plus mr-1"></i>Register</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto border border-gray-200">
            <h1 class="text-2xl font-bold mb-4 text-blue-700">Welcome to the BMI Calculator App</h1>
            <p class="mb-4 text-gray-600">This is a simple application to calculate your BMI and store your records.</p>
            <p class="mb-4 text-gray-600">Please <a href="./php/login.php" class="text-blue-500 hover:underline">login</a> or <a href="./php/register.php" class="text-blue-500 hover:underline">register</a> to continue.</p>
        </div>
    </main>

    <?php
    include('html/footer.php');
    ?>
</body>
</html>
