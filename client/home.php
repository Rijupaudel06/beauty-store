<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pure Tint </title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="./home.php">
</head>
<body >
    <?php
    include 'nevbar.php'; 
    ?>


<!-- Hero Section -->
<header class="bg-gradient-to-r from-pink-100 to-pink-200 text-center py-20">
  <h2 class="text-4xl font-bold text-pink-600">Welcome to Beauty Bliss</h2>
  <p class="mt-3 text-gray-700">Your one-stop shop for premium skincare & beauty products</p>
  <a href="#shop" class="mt-6 inline-block bg-pink-500 text-white rounded py-3 px-6 hover:bg-pink-600">Shop Now</a>
</header>

<!-- Shop Now Section -->
<section id="shop" class="container mx-auto p-4 mt-12">
  <h3 class="text-3xl font-bold text-center text-pink-600">Shop Our Bestsellers</h3>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-8 gap-6">

    <!-- Product 1 -->
    <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
      <img src="https://source.unsplash.com/300x300/?lipstick" alt="Lipstick" class="w-full h-48 object-cover rounded">
      <h4 class="text-lg font-bold text-pink-600 mt-3">Matte Lipstick</h4>
      <p class="text-gray-600 text-sm">Rich color, long lasting, and soft finish</p>
      <p class="text-pink-600 font-bold mt-2">Rs. 250</p>
      <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Add to Cart</a>
    </div>

    <!-- Product 2 -->
    <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
      <img src="https://source.unsplash.com/300x300/?face,serum" alt="Serum" class="w-full h-48 object-cover rounded">
      <h4 class="text-lg font-bold text-pink-600 mt-3">Vitamin C Serum</h4>
      <p class="text-gray-600 text-sm">Brightens and revitalizes your skin</p>
      <p class="text-pink-600 font-bold mt-2">Rs. 650</p>
      <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Add to Cart</a>
    </div>

    <!-- Product 3 -->
    <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
      <img src="https://source.unsplash.com/300x300/?facecream" alt="Face Cream" class="w-full h-48 object-cover rounded">
      <h4 class="text-lg font-bold text-pink-600 mt-3">Face Moisturizer</h4>
      <p class="text-gray-600 text-sm">Keeps skin soft and hydrated</p>
      <p class="text-pink-600 font-bold mt-2">Rs. 450</p>
      <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Add to Cart</a>
    </div>

    <!-- Product 4 -->
    <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
      <img src="https://source.unsplash.com/300x300/?face,mask" alt="Face Mask" class="w-full h-48 object-cover rounded">
      <h4 class="text-lg font-bold text-pink-600 mt-3">Rejuvenating Face Mask</h4>
      <p class="text-gray-600 text-sm">Detoxifies and refreshes your skin</p>
      <p class="text-pink-600 font-bold mt-2">Rs. 300</p>
      <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Add to Cart</a>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="bg-pink-100 text-center py-4 mt-12 text-pink-700">
  &copy; 2025 Beauty Bliss. All Rights Reserved.
</footer>

</body>
</html>
