

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto bg-white p-8 mt-12 rounded-xl shadow-lg">
    <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Detail Produk</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Gambar Produk -->
        <div class="bg-white p-4 rounded-xl shadow-md w-full flex justify-center">
            <img src="<?php echo e(asset('storage/' . $product->image)); ?>"
                 alt="<?php echo e($product->name); ?>"
                 class="w-48 h-48 object-cover rounded-md border border-gray-200 shadow-sm">
        </div>

        <!-- Informasi Produk -->
        <div class="space-y-5 text-gray-700">
            <div>
                <p class="text-xl font-semibold">Nama Produk</p>
                <p class="text-lg"><?php echo e($product->name); ?></p>
            </div>

            <div>
                <p class="text-xl font-semibold">Kategori</p>
                <p class="text-lg"><?php echo e($product->category->name ?? 'Kategori Tidak Diketahui'); ?></p>
            </div>

            <div>
                <p class="text-xl font-semibold">Harga</p>
                <p class="text-xl text-green-600 font-bold">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
            </div>

            <div>
                <p class="text-xl font-semibold">Stok</p>
                <p class="text-lg"><?php echo e($product->stock); ?> pcs</p>
                <?php if($product->stock == 0): ?>
                    <p class="text-red-600 text-sm font-semibold mt-1">⚠️ Produk sedang kosong</p>
                <?php endif; ?>
            </div>

            <?php if($product->description): ?>
            <div>
                <p class="text-xl font-semibold">Deskripsi</p>
                <p class="text-gray-600 text-sm"><?php echo e($product->description); ?></p>
            </div>
            <?php endif; ?>

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-4 pt-4">
                <!-- Tombol kembali -->
                <a href="<?php echo e(url('/shop')); ?>"
                   class="inline-block px-6 py-2 bg-gray-800 text-white rounded-full hover:bg-gray-900 transition duration-300">
                    ← Kembali ke Daftar Produk
                </a>

                <!-- Tombol tambah ke keranjang -->
                <?php if($product->stock > 0): ?>
                <form method="POST" action="<?php echo e(route('cart.add', $product->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit"
                            class="inline-block px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-300">
                        + Tambah ke Keranjang
                    </button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/admin/products/show.blade.php ENDPATH**/ ?>