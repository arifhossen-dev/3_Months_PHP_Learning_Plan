<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="px-4 py-6 text-lg font-bold">Dashboard</div>
            <nav class="flex-1 px-4">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Profile</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Logout</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Welcome to the Dashboard</h1>
            </header>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-bold text-gray-700 mb-2">Total Users</h2>
                    <p class="text-3xl font-semibold text-gray-800">1,234</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-bold text-gray-700 mb-2">Revenue</h2>
                    <p class="text-3xl font-semibold text-green-600">$12,345</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-bold text-gray-700 mb-2">Tasks</h2>
                    <p class="text-3xl font-semibold text-yellow-500">45</p>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white rounded shadow p-6">
                <h2 class="text-lg font-bold text-gray-700 mb-4">Recent Activities</h2>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="text-left p-2 border-b">Activity</th>
                            <th class="text-left p-2 border-b">Date</th>
                            <th class="text-left p-2 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 border-b">User signup</td>
                            <td class="p-2 border-b">Dec 6, 2024</td>
                            <td class="p-2 border-b text-green-600">Completed</td>
                        </tr>
                        <tr>
                            <td class="p-2 border-b">Payment processed</td>
                            <td class="p-2 border-b">Dec 5, 2024</td>
                            <td class="p-2 border-b text-green-600">Completed</td>
                        </tr>
                        <tr>
                            <td class="p-2 border-b">Server update</td>
                            <td class="p-2 border-b">Dec 4, 2024</td>
                            <td class="p-2 border-b text-yellow-500">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
