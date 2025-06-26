<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-pink-50 text-gray-800">
        <!-- navbar -->
    <nav class="bg-pink-100 shadow-md p-4 font-playfair-font">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-600 " >Pure Tint</h1>
            <ul class="hidden md:flex space-x-6 ">
                <li><a href="./home.php" class="text-pink-600 hover:text-pink-800">Home</a></li>
                <li><a href="./skincare.php" class="text-pink-600 hover:text-pink-800">Skincare</a></li>
                <li><a href="./makeup.php" class="text-pink-600 hover:text-pink-800">Makeup</a></li>
                <li><a href="./contact.php" class="text-pink-600 hover:text-pink-800">Contact</a></li>

            </ul>
           <button id="menuButton" class="md:hidden text-pink-600 text-xl">☰</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="flex-col mt-2 space-y-2 md:hidden items-center">
      <a href="#" class="text-pink-600 hover:text-pink-800">Home</a>
      <a href="#" class="text-pink-600 hover:text-pink-800">Skincare</a>
      <a href="#" class="text-pink-600 hover:text-pink-800">Makeup</a>
      <a href="#" class="text-pink-600 hover:text-pink-800">Contact</a>
    </div>
  </nav>
    
</body>
</html>