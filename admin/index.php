<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-md rounded-lg p-8 max-w-sm w-full">
    <img class="mx-auto h-10 w-auto rounded-full " src="./images/beauty.png" alt="">
    <form class="space-y-6"  action="login.php" method="POST">
     <?php
        if(isset($error)){ ?>

        <div class="my-4">
          <span class="bg-red-300 border-2 border-red-500 px-2 py-1 my-3 rounded-2xl"> 
            <?php echo $error; ?> </span>
        </div>
        
       <?php  }
      ?>
      <!-- Email Input -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>
      <!-- Password Input -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>
      <!-- Remember Me Checkbox -->
      <div class="flex items-center justify-between mb-6">
        <label class="flex items-center">
          <input type="checkbox" class="form-checkbox text-blue-500">
          <span class="ml-2 text-gray-600">Remember me</span>
        </label>
        <a href="#" class="text-blue-500 text-sm hover:underline">Forgot password?</a>
      </div>
      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Login
      </button>
    </form>
    <!-- Sign Up Link -->
    <p class="text-center text-gray-600 text-sm mt-4">
      Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
    </p>
  </div>
</body>
</html>