

<?php $__env->startSection('content'); ?>
<div class="p-6 bg-blue-100 min-h-screen">
    <h1 class="text-2xl font-semibold mb-4">Manajemen Produk</h1>

    
    <div class="mb-6">
        <a href="<?php echo e(route('products.create')); ?>"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
            + Tambah Produk
        </a>
    </div>

    
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm bg-white border border-gray-200 shadow rounded-lg">
            <thead class="bg-gray-100 uppercase text-sm font-semibold text-gray-700">
                <tr>
                    <th class="px-4 py-3 border-b">Gambar</th>
                    <th class="px-4 py-3 border-b">Nama</th>
                    <th class="px-4 py-3 border-b">Kategori</th>
                    <th class="px-4 py-3 border-b">Harga</th>
                    <th class="px-4 py-3 border-b">Stok</th>
                    <th class="px-4 py-3 border-b text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b">
                            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>"
                                class="w-16 h-16 object-cover rounded-md">
                        </td>
                        <td class="px-4 py-2 border-b font-medium text-gray-900"><?php echo e($product->name); ?></td>
                        <td class="px-4 py-2 border-b">
                            <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full text-xs font-medium">
                                <?php echo e($product->category->name ?? '-'); ?>

                            </span>
                        </td>
                        <td class="px-4 py-2 border-b text-green-600 font-semibold">
                            Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?>

                        </td>
                        <td class="px-4 py-2 border-b">
                            <?php if($product->stock == 0): ?>
                                <span class="text-red-600 font-semibold">0 pcs</span>
                            <?php else: ?>
                                <?php echo e($product->stock); ?> pcs
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 border-b">
                            <div class="flex flex-wrap justify-center items-center gap-2">
                                <a href="<?php echo e(route('products.show', $product->id)); ?>"
                                    class="bg-blue-500 text-white px-3 py-1 rounded text-xs hover:bg-blue-600">
                                    Detail
                                </a>
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded text-xs hover:bg-yellow-600">
                                    Edit
                                </a>
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded text-xs hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">Belum ada produk.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    
    <div class="mt-4">
        <?php echo e($products->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/admin/products/index.blade.php ENDPATH**/ ?>