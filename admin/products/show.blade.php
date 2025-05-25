@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 mt-12 rounded-xl shadow-lg">
    <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Detail Produk</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Gambar Produk -->
        <div class="bg-white p-4 rounded-xl shadow-md w-full flex justify-center">
            <img src="{{ asset('storage/' . $product->image) }}"
                 alt="{{ $product->name }}"
                 class="w-48 h-48 object-cover rounded-md border border-gray-200 shadow-sm">
        </div>

        <!-- Informasi Produk -->
        <div class="space-y-5 text-gray-700">
            <div>
                <p class="text-xl font-semibold">Nama Produk</p>
                <p class="text-lg">{{ $product->name }}</p>
            </div>

            <div>
                <p class="text-xl font-semibold">Kategori</p>
                <p class="text-lg">{{ $product->category->name ?? 'Kategori Tidak Diketahui' }}</p>
            </div>

            <div>
                <p class="text-xl font-semibold">Harga</p>
                <p class="text-xl text-green-600 font-bold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            </div>

            <div>
                <p class="text-xl font-semibold">Stok</p>
                <p class="text-lg">{{ $product->stock }} pcs</p>
                @if($product->stock == 0)
                    <p class="text-red-600 text-sm font-semibold mt-1">⚠️ Produk sedang kosong</p>
                @endif
            </div>

            @if($product->description)
            <div>
                <p class="text-xl font-semibold">Deskripsi</p>
                <p class="text-gray-600 text-sm">{{ $product->description }}</p>
            </div>
            @endif

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-4 pt-4">
                <!-- Tombol kembali -->
                <a href="{{ url('/shop') }}"
                   class="inline-block px-6 py-2 bg-gray-800 text-white rounded-full hover:bg-gray-900 transition duration-300">
                    ← Kembali ke Daftar Produk
                </a>

                <!-- Tombol tambah ke keranjang -->
                @if($product->stock > 0)
                <form method="POST" action="{{ route('cart.add', $product->id) }}">
                    @csrf
                    <button type="submit"
                            class="inline-block px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-300">
                        + Tambah ke Keranjang
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
