<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans antialiased">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col p-6 space-y-4">

        
            <div class="text-2xl font-bold mb-4">
                <span class="text-blue-400">Little</span> Scndh
            </div>
            <nav class="flex-1">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/admin/dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/products') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                            Kelola Produk
                        </a>
                    </li>
                </ul>
            </nav>
            <div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="block w-full text-center bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transition">
        Logout
    </button>
</form>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <header class="bg-white shadow-md p-4 rounded mb-6 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-800">@yield('title')</h1>
                <span class="text-gray-600 text-sm">Welcome, Admin</span>
            </header>

            <section>
                @yield('content')
            </section>
        </main>
    </div>

</body>
</html>
