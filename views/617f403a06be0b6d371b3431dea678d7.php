

<?php $__env->startSection('content'); ?>
<div class="bg-gray-100 min-h-screen py-10">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Checkout</h1>

        <!-- Tabel Keranjang -->
        <div class="overflow-x-auto mb-6">
            <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="py-2 px-4">Produk</th>
                        <th class="py-2 px-4">Harga</th>
                        <th class="py-2 px-4">Jumlah</th>
                        <th class="py-2 px-4">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $subtotal = $item['price'] * $item['quantity']; 
                            $total += $subtotal; 
                        ?>
                        <tr class="border-t border-gray-200">
                            <td class="py-2 px-4">
                                <?php echo e($item['name']); ?>

                            </td>
                            <td class="py-2 px-4">Rp<?php echo e(number_format($item['price'], 0, ',', '.')); ?></td>
                            <td class="py-2 px-4"><?php echo e($item['quantity']); ?></td>
                            <td class="py-2 px-4">Rp<?php echo e(number_format($subtotal, 0, ',', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-t bg-gray-100 font-semibold text-lg">
                        <td colspan="3" class="py-3 px-4 text-right">Total:</td>
                        <td class="py-3 px-4 text-blue-600">Rp<?php echo e(number_format($total, 0, ',', '.')); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Form Konfirmasi -->
        <form action="<?php echo e(route('checkout.store')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div>
    <label class="block mb-1 font-medium">Nama</label>
    <input type="text" name="name" required class="w-full border rounded px-4 py-2" value="<?php echo e(old('name', Auth::user()->name ?? '')); ?>">
</div>
<div>
    <label class="block mb-1 font-medium">Email</label>
    <input type="email" name="email" required class="w-full border rounded px-4 py-2" value="<?php echo e(old('email', Auth::user()->email ?? '')); ?>">
</div>
<div>
    <label class="block mb-1 font-medium">Telepon</label>
    <input type="text" name="phone" required class="w-full border rounded px-4 py-2" value="<?php echo e(old('phone')); ?>">
</div>
<div>
    <label class="block mb-1 font-medium">Alamat</label>
    <textarea name="address" required class="w-full border rounded px-4 py-2"><?php echo e(old('address')); ?></textarea>
</div>


            <!-- Metode Pembayaran -->
            <div>
                <label for="payment_method" class="block font-medium mb-1">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Metode --</option>
                    <option value="cod" <?php echo e(old('payment_method') == 'cod' ? 'selected' : ''); ?>>Bayar di Tempat (COD)</option>
                    <option value="transfer" <?php echo e(old('payment_method') == 'transfer' ? 'selected' : ''); ?>>Transfer Bank</option>
                    <option value="qris" <?php echo e(old('payment_method') == 'qris' ? 'selected' : ''); ?>>QRIS</option>
                </select>

                <!-- Info Tambahan Transfer Bank -->
<div id="bank-info" class="mt-4 hidden">
    <label class="block font-medium mb-1">Nomor Rekening Tujuan</label>
    <div class="bg-gray-100 p-3 rounded">
        <p class="text-sm text-gray-800 font-semibold">Bank BCA - 1234567890 a.n. Little Scndh</p>
        <p class="text-xs text-gray-500 mt-1">Silakan transfer ke rekening di atas lalu konfirmasi ke admin.</p>
    </div>
</div>

                <?php $__errorArgs = ['payment_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Tombol Konfirmasi -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Konfirmasi Pesanan
                </button>
            </div>
        </form>
        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const paymentSelect = document.getElementById('payment_method');
        const bankInfo = document.getElementById('bank-info');

        function toggleBankInfo() {
            if (paymentSelect.value === 'transfer') {
                bankInfo.classList.remove('hidden');
            } else {
                bankInfo.classList.add('hidden');
            }
        }

        // Jalankan saat halaman dimuat dan saat pilihan berubah
        toggleBankInfo();
        paymentSelect.addEventListener('change', toggleBankInfo);
    });
</script>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/checkout/index.blade.php ENDPATH**/ ?>