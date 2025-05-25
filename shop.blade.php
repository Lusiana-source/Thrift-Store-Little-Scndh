<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Little Scndh</title>
    <meta name="description" content="Temukan berbagai produk thrift fashion berkualitas dari Little Scndh.">
    <meta name="keywords" content="thrift, fashion, preloved, baju bekas, Little Scndh, shop">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans px-4 sm:px-0">

    <!-- Header -->
    <header class="bg-blue-600 text-white py-5 text-center shadow-md">
        <h1 class="text-3xl font-bold">Shop</h1>
    </header>

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-600 max-w-7xl mx-auto px-6 mt-4">
        <a href="/" class="hover:underline">Home</a> &gt; <span class="font-semibold text-gray-800">Shop</span>
    </div>

    <!-- Form Pencarian & Filter Kategori -->
    <form action="{{ url('/shop') }}" method="GET" class="max-w-7xl mx-auto px-6 py-6 mb-6 flex flex-col md:flex-row justify-between items-center gap-4 bg-white shadow rounded-lg mt-6">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari produk..." 
            value="{{ request('search') }}"
            class="border border-gray-300 rounded-lg p-3 w-full md:w-2/3 focus:outline-none focus:ring focus:border-blue-500"
        >

        <select 
            name="category" 
            class="border border-gray-300 rounded-lg p-3 w-full md:w-1/3 focus:outline-none focus:ring focus:border-blue-500"
        >
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Tombol Checkout -->
    @php $cart = session('cart', []); @endphp
    @if(!empty($cart))
    <div class="max-w-7xl mx-auto px-6 mb-6">
        <div class="flex justify-end">
            <a href="{{ route('checkout.index') }}" 
               class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                <i class="fas fa-shopping-cart mr-2"></i> Lihat Keranjang & Checkout
            </a>
        </div>
    </div>
    @endif

    <!-- Konten Utama -->
    <main class="max-w-7xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold mb-8 text-center">Shop</h2>

        @if($products->isEmpty())
            <p class="text-center text-gray-500">Produk tidak ditemukan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($products as $product)
                <div class="relative bg-white shadow rounded-lg overflow-hidden flex flex-col transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300 ease-in-out">
                    @if(!is_null($product->discount) && $product->discount > 0)
                        <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                            -{{ $product->discount }}%
                        </span>
                    @endif

                    <img src="{{ $product->image ? asset('storage/'.$product->image) : asset('images/default.jpg') }}" 
                         class="w-full h-48 object-cover object-center" 
                         alt="{{ $product->name }}">

                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold text-lg mb-1 capitalize">{{ $product->name }}</h3>

                        @if($product->category)
                            <span class="text-xs text-gray-500 mb-1">Kategori: {{ $product->category->name }}</span>
                        @endif

                        @if(!is_null($product->discount) && $product->discount > 0)
                            <p class="text-gray-500 line-through text-sm">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="text-red-600 font-bold mb-4">
                                Rp{{ number_format($product->price * (1 - $product->discount / 100), 0, ',', '.') }}
                            </p>
                        @else
                            <p class="text-gray-700 font-bold mb-4">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        @endif

                        <p class="text-sm text-gray-500 mb-2">Stok: {{ $product->stock }}</p>

                        <div class="flex flex-col gap-2 mt-auto">
                            <a href="{{ url('/product/'.$product->id) }}" 
                               class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600 transition">
                                Lihat Detail
                            </a>

                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 transition">
                                    Tambah ke Keranjang
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $products->links() }}
            </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-8 mt-10">
        <p class="mb-3 text-sm">&copy; 2025 Little Scndh. All rights reserved.</p>
        <div class="flex justify-center space-x-6 text-xl">
            <a href="#" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-green-400"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="hover:text-red-400"><i class="fab fa-tiktok"></i></a>
        </div>
    </footer>

</body>
</html>
