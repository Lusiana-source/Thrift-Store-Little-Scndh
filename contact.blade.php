<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Little Scndh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans">
    
    <!-- Header -->
    <header class="bg-blue-600 text-white pt-10 pb-6 text-center mt-4 shadow-md">
        <h1 class="text-3xl font-bold">Hubungi Kami</h1>
    </header>

    <!-- Konten Utama -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        
        <p class="text-gray-700 text-lg text-center max-w-2xl mx-auto mb-8">
            Jika Anda memiliki pertanyaan atau ingin bekerja sama, jangan ragu untuk menghubungi kami melalui formulir di bawah ini.
        </p>

        <div class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" id="name" name="name" required autocomplete="name"
                           class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required autocomplete="email"
                           class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pesan -->
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-semibold">Pesan</label>
                    <textarea id="message" name="message" required rows="4"
                              class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                    @error('message')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                    Kirim Pesan
                </button>
            </form>

            
        <div class="mt-4 text-center">
    <a href="{{ route('home') }}"
       class="inline-flex items-center gap-2 text-sm text-blue-600 hover:underline hover:text-blue-800 transition">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Home</span>
    </a>
</div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center p-4 bg-gray-200 mt-10 text-sm text-gray-600">
        &copy; 2025 Little Scndh. All rights reserved.
    </footer>

</body>
</html>
