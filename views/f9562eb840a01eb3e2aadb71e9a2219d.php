

<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4 text-center">Edit Produk</h2>

    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="name" value="<?php echo e($product->name); ?>" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Kategori</label>
            <input type="number" name="category_id" value="<?php echo e($product->category_id); ?>"
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Harga</label>
            <input type="text" name="price" value="<?php echo e($product->price); ?>"
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Gambar</label>
            <input type="file" name="image" class="w-full px-4 py-2 border rounded-lg">
            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="Product Image" class="mt-2 w-20 rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stok Produk</label>
            <input type="number" name="stock" id="stock" value="<?php echo e(old('stock', $product->stock ?? 0)); ?>"
            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="flex justify-between">
            <a href="<?php echo e(route('products.index')); ?>" 
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>