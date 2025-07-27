<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-purple-700 text-white min-h-screen p-5">
    <h2 class="text-2xl  font-bold mb-10"><img class="rounded-full h-10 justify-center " src="./images/pure.png" alt=""></h2>
    <nav class="flex flex-col space-y-4">
      <a href="#" class="hover:bg-purple-600 px-4 py-2 rounded">Dashboard</a>
      <a href="#" class="hover:bg-purple-600 px-4 py-2 rounded">Orders</a>
      <a href="#" class="hover:bg-purple-600 px-4 py-2 rounded">Products</a>
      <a href="#" class="hover:bg-purple-600 px-4 py-2 rounded text-red-200 mt-10">Logout</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <h1 class="text-3xl text-center font-bold text-purple-700 mb-6">Dashboard Overview</h1>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="text-xl font-semibold text-alig text-center text-purple-700 mb-4">Recent Orders</h2>
      <table class="w-full table-auto text-left">
        <thead>
          <tr class="text-gray-600 border-b">
            <th class="py-2">Order ID</th>
            <th class="py-2">Customer</th>
            <th class="py-2">Total</th>
            <th class="py-2">Status</th>
          </tr>
        </thead>
      </table>
    </div>
  </main>

</body>
</html>