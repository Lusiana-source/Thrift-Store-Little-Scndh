

<?php $__env->startSection('title', 'Riwayat Pesanan'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Riwayat Pesanan</h1>

    <?php if($orders->isEmpty()): ?>
        <div class="text-center bg-yellow-100 text-yellow-800 py-6 rounded-md shadow">
            <p class="text-lg font-semibold">Kamu belum pernah melakukan pesanan.</p>
        </div>
    <?php else: ?>
        <div class="space-y-8">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-gray-700">ID Pesanan: #<?php echo e($order->id); ?></h2>
                        <span class="text-sm text-gray-500"><?php echo e($order->created_at->format('d M Y, H:i')); ?></span>
                    </div>

                    <p class="text-base text-gray-700 mb-2">
                        Status: 
                        <span class="inline-block px-2 py-1 text-sm rounded 
                            <?php echo e($order->status === 'pending' ? 'bg-yellow-200 text-yellow-800' : 'bg-green-200 text-green-800'); ?>">
                            <?php echo e(ucfirst($order->status)); ?>

                        </span>
                    </p>

                    <p class="text-base text-gray-700 mb-4">
                        Total Harga: 
                        <span class="font-semibold text-green-600">Rp<?php echo e(number_format($order->total_price, 0, ',', '.')); ?></span>
                    </p>

                    <div class="overflow-x-auto">
                        <table class="w-full text-base border border-gray-200 rounded">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 border text-left">Produk</th>
                                    <th class="px-4 py-3 border text-left">Harga</th>
                                    <th class="px-4 py-3 border text-left">Jumlah</th>
                                    <th class="px-4 py-3 border text-left">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="border-t">
                                        <td class="px-4 py-3 border"><?php echo e($item->product->name); ?></td>
                                        <td class="px-4 py-3 border">Rp<?php echo e(number_format($item->price, 0, ',', '.')); ?></td>
                                        <td class="px-4 py-3 border"><?php echo e($item->quantity); ?></td>
                                        <td class="px-4 py-3 border">Rp<?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<div class="text-center mt-10">
    <a href="<?php echo e(url('/')); ?>"
       class="inline-block bg-indigo-600 text-white text-base font-semibold px-6 py-3 rounded hover:bg-indigo-700 transition">
        ← Kembali ke Beranda
    </a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/orders/history.blade.php ENDPATH**/ ?>