<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwinds.com"></script>
  <link rel="stylesheet" href="./src/output.css">
  <link rel="stylesheet" href="./contact.php">
</head>

<body>
  <?php
  include 'nevbar.php';
  ?>
  <!-- Contact Section -->
  <section class="container mx-auto p-4 mt-8">
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




</body>

</html>