<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Skincare - Beauty Bliss</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

<?php
include 'nevbar.php'; 
?>

<!-- Page Header -->
<header class="text-center p-8">
  <h2 class="text-3xl font-bold text-pink-600">Skincare Products</h2>
  <p class="text-gray-600 mt-2">Nourish your skin with our best skincare essentials</p>
</header>

<!-- Products Section -->
<section class="container mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

  <!-- Product 1 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/serums.jpeg" alt="Serum" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Vitamin C Serum</h3>
    <p class="text-gray-600 text-sm">For brighter, glowing skin</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 650</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 2 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="https://source.unsplash.com/300x300/?moisturizer,face" alt="Moisturizer" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Hydrating Moisturizer</h3>
    <p class="text-gray-600 text-sm">Keeps skin soft and supple</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 450</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 3 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="https://source.unsplash.com/300x300/?facemask" alt="Face Mask" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Rejuvenating Face Mask</h3>
    <p class="text-gray-600 text-sm">Detox and refresh your skin</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 300</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 4 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="https://source.unsplash.com/300x300/?facecream" alt="Face Cream" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Anti-aging Face Cream</h3>
    <p class="text-gray-600 text-sm">For firm and youthful skin</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 900</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

</section>

<!-- Footer -->
<footer class="bg-pink-100 text-center py-4 mt-10 text-pink-700">
  &copy; 2025 Pure Tint. All Rights Reserved.
</footer>

</body>
</html>
