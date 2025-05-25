@extends('layouts.admin')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4 text-center">Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Kategori</label>
            <input type="number" name="category_id" value="{{ $product->category_id }}"
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Harga</label>
            <input type="text" name="price" value="{{ $product->price }}"
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Gambar</label>
            <input type="file" name="image" class="w-full px-4 py-2 border rounded-lg">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="mt-2 w-20 rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stok Produk</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock ?? 0) }}"
            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}" 
                class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition">
                Batal
            </a>

            <button type="submit" 
                class="bg-blue-600 text-stone font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transition shadow-md">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

@endsection
