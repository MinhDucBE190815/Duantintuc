<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <nav>
                <ul>
                    <li class="mb-4"><a href="{{ route('dashboard') }}" class="block p-2 bg-gray-700 rounded">Dashboard</a></li>
                    <li class="mb-4"><a href="{{ route('quanly') }}" class="block p-2 hover:bg-gray-700 rounded">Quản lý
                            bài Tin </a></li>
                    <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Quản lý Người Dùng</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Cài đặt</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">

            @yield('content')

          
        </main>
    </div>
</body>

</html>