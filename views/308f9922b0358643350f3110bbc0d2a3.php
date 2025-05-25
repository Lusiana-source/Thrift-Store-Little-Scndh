

<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-blue-200 p-6 rounded-lg shadow text-center">
        <h2 class="text-sm text-blue-900">Total Produk</h2>
        <p class="text-2xl font-bold text-blue-900"><?php echo e($totalProduk); ?></p>
    </div>
    <div class="bg-green-200 p-6 rounded-lg shadow text-center">
        <h2 class="text-sm text-green-900">Total Pesanan</h2>
        <p class="text-2xl font-bold text-green-900"><?php echo e($totalPesanan); ?></p>
    </div>
    <div class="bg-yellow-200 p-6 rounded-lg shadow text-center">
        <h2 class="text-sm text-yellow-900">Total Pendapatan</h2>
        <p class="text-xl font-bold text-yellow-900">Rp <?php echo e(number_format($totalPendapatan, 0, ',', '.')); ?></p>
    </div>
    <div class="bg-red-200 p-6 rounded-lg shadow text-center">
        <h2 class="text-sm text-red-900">Pesanan Tertunda</h2>
        <p class="text-2xl font-bold text-red-900"><?php echo e($pesananTerbaru->where('status', 'pending')->count()); ?></p>
    </div>
</div>


    <!-- Produk Stok Rendah -->
    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-lg font-semibold text-yellow-600 flex items-center gap-2">
            ⚠️ Produk Stok Rendah
        </h3>
        <ul class="mt-3 list-disc list-inside text-sm text-gray-700 space-y-1">
            <?php $__empty_1 = true; $__currentLoopData = $stokRendah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li><?php echo e($product->name); ?> (<?php echo e($product->stock); ?> pcs)</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="text-gray-500 italic">Semua stok aman 👍</li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Produk Terbaru -->
    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Produk Terbaru</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border border-gray-200 rounded">
                <thead class="bg-gray-100 text-gray-700 uppercase">
                    <tr>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Stok</th>
                        <th class="py-2 px-4 border">Tanggal Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $produkTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border"><?php echo e($product->name); ?></td>
                            <td class="py-2 px-4 border"><?php echo e($product->stock); ?> pcs</td>
                            <td class="py-2 px-4 border"><?php echo e($product->created_at->format('d-m-Y')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="py-4 px-4 text-center text-gray-500">Belum ada produk.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>