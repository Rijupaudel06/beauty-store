<?php 

$error =  $_GET['error'] ?? null;

session_start();

$is_LoggedIn =  $_SESSION['is_loggedin'] ?? false;

if($is_LoggedIn){
  header("Location: dashboard.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen text-white">

  <div class="bg-purple-800 p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>

    <form action="login-handle.php" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-2 rounded-lg text-black placeholder-white focus:outline-none focus:ring-2 focus:ring-white" 
               placeholder="Enter your email">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-2 rounded-lg text-black placeholder-white focus:outline-none focus:ring-2 focus:ring-white"
               placeholder="Enter your password">
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center">
          <input type="checkbox" class="form-checkbox text-purple-300 mr-2">
          <span class="text-sm">Remember me</span>
        </label>
        <a href="#" class="text-sm underline hover:text-purple-300">Forgot Password?</a>
      </div>

      <button type="submit"
              class="w-full bg-white text-purple-800 font-semibold py-2 rounded-lg hover:bg-purple-100 transition">
        Sign In
      </button>
    </form>

    <p class="mt-6 text-sm text-center">
      Don’t have an account?
      <a href="#" class="underline hover:text-purple-300">Sign up</a>
    </p>
  </div>

</body>
</html>