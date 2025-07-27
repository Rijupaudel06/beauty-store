<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pure Tint - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-pink-50 text-gray-800 pl-2 pr-2 ">

  <!-- Navbar -->
  <header class="bg-pink-100 shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-pink-600">Pute Tint</h1>
      <nav class="space-x-6 hidden md:block">
        <a href="#home" class="hover:text-pink-600 font-medium">Home</a>
        <a href="#skincare" class="hover:text-pink-600 font-medium">Skincare</a>
        <a href="#makeup" class="hover:text-pink-600 font-medium">Makeup</a>
        <a href="#contact" class="hover:text-pink-600 font-medium">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Home -->
  <section id="home" class="pt-24 pb-16 bg-white min-h-screen flex items-center justify-center">
    <div class="text-center px-4">
      <h2 class="text-4xl md:text-5xl font-bold text-pink-700 mb-4">Welcome to Pure Tint</h2>
      <p class="text-lg text-gray-700 mb-6">Explore our skincare & makeup collections for a glowing you.</p>
      <a href="#skincare" class="bg-pink-600 text-white px-6 py-3 rounded hover:bg-pink-700">Start Exploring</a>
    </div>
  </section>

  <!-- Skincare -->
   <header id="skincare" class="text-center p-8">
  <h2 class="text-3xl font-bold text-pink-600">Skincare Products</h2>
  <p class="text-gray-600 mt-2">Nourish your skin with our best skincare essentials</p>
</header>

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
    <img src="./images/hydrating.png" alt="Moisturizer" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3" >Hydrating Moisturizer</h3>
    <p class="text-gray-600 text-sm">Keeps skin soft and supple</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 450</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 3 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/facemask.png" alt="Face Mask" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Rejuvenating Face Mask</h3>
    <p class="text-gray-600 text-sm">Detox and refresh your skin</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 300</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 4 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/facecream.png" alt="Face Cream" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Anti-aging Face Cream</h3>
    <p class="text-gray-600 text-sm">For firm and youthful skin</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 900</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

</section>


 

  <!-- Makeup -->
   <!-- Page Header -->
<header id="makeup" class="text-center p-8">
  <h2 class="text-3xl font-bold text-pink-600">Makeup Products</h2>
  <p class="text-gray-600 mt-2">Enhance your beauty with our premium makeup range</p>
</header>

  <section id="makeup" class=" container mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
     <!-- Product 1 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/lipstick.png" alt="Lipstick" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Matte Lipstick</h3>
    <p class="text-gray-600 text-sm">Rich color, long-lasting wear</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 250</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 2 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/blush.png" alt="Foundation" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Blush Compact</h3>
    <p class="text-gray-600 text-sm">highly Pigmented Shades</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 650</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 3 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/maskara.png" alt="Mascara" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Volume Mascara</h3>
    <p class="text-gray-600 text-sm">For bold, long lashes</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 450</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

  <!-- Product 4 -->
  <div class="bg-white rounded-xl shadow hover:shadow-lg p-4">
    <img src="./images/eyeshadow.png" alt="Eyeshadow" class="w-full h-40 object-cover rounded">
    <h3 class="text-lg font-bold text-pink-600 mt-3">Eyeshadow Palette</h3>
    <p class="text-gray-600 text-sm">Rich pigments for stunning eyes</p>
    <p class="text-pink-600 font-bold mt-2">Rs. 900</p>
    <a href="#" class="mt-3 block text-center bg-pink-500 text-white rounded py-2 hover:bg-pink-600">Buy Now</a>
  </div>

</section>

  <!-- Contact -->
  <section id="contact" class="py-20 bg-pink-100 container mx-auto p-4 mt-8">
    <h2 class="text-3xl font-bold text-center text-pink-600">Contact Us</h2>
    <p class="text-center text-gray-600 mt-2">We'd love to hear from you</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">

      <!-- Contact Form -->
      <div class="bg-white rounded-xl p-6 shadow">
        <form>
          <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input class="w-full mt-1 p-3 rounded border border-gray-300 focus:outline-none focus:border-pink-500" placeholder="Your Name" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input class="w-full mt-1 p-3 rounded border border-gray-300 focus:outline-none focus:border-pink-500" placeholder="you@example.com" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Message</label>
            <textarea class="w-full mt-1 p-3 rounded border border-gray-300 focus:outline-none focus:border-pink-500" rows="5" placeholder="Your message..."></textarea>
          </div>
          <button class="bg-pink-500 text-white rounded py-2 px-4 hover:bg-pink-600">Send Message</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="bg-white rounded-xl p-6 shadow">
        <h3 class="text-2xl font-bold text-pink-600">Get in Touch</h3>
        <p class="mt-3 text-gray-600">Have a question or just want to say hi? Reach out to us using the details below:</p>
        <div class="mt-5 space-y-3">
          <div><strong>Address:</strong> 123 Beauty Lane, New York, NY</div>
          <div><strong>Phone:</strong> +1 (555) 123-4567</div>
          <div><strong>Email:</strong> contact@puretint.com</div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
   <footer class="bg-pink-100 text-center py-4 mt-10 text-pink-700">
    &copy; 2025 Pure tini. All Rights Reserved.
  </footer>

</body>
</html>

