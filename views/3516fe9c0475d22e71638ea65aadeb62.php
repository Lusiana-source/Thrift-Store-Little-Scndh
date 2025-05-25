<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Scndh | Toko Thrift Berkualitas</title>
    <meta name="description" content="Temukan fashion thrift berkualitas dengan harga terbaik. Little Scndh menghadirkan kaos, hoodie, celana, dan tas pilihan.">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<nav class="sticky top-0 z-50 bg-white shadow-sm py-4 px-8 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-600">Little Scndh</h1>
    <ul class="hidden md:flex space-x-6 font-medium">
        <li><a href="<?php echo e(route('admin.home')); ?>" class="hover:text-blue-600">Home</a></li>
        <li><a href="<?php echo e(route('shop')); ?>" class="hover:text-blue-600">Shop</a></li>
        <li><a href="<?php echo e(route('about')); ?>" class="hover:text-blue-600">About</a></li>
        <li><a href="<?php echo e(route('contact')); ?>" class="hover:text-blue-600">Contact</a></li>
    </ul>
</nav>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-100 to-blue-200 py-20 px-4 md:px-12">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
        Temukan Gaya Unikmu di <span class="text-blue-600">Little Scndh</span>
      </h2>
      <p class="text-lg text-gray-700 mb-6">
        Dapatkan fashion berkualitas dengan harga terbaik untuk kamu yang tampil beda.
      </p>
      <a href="<?php echo e(route('shop')); ?>"
         class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
        Belanja Sekarang
      </a>
    </div>
    <!-- Gambar Produk -->
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:w-1/2">
      <?php $__currentLoopData = ['produk11.jpg','produk12.jpg','produk13.jpg','produk14.jpg','produk15.jpg','produk16.jpg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('storage/products/' . $img)); ?>" alt="Produk" loading="lazy"
             class="rounded-xl shadow-lg w-full h-auto object-cover">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

<!-- Fitur Unggulan -->
<section class="py-16 bg-white text-center">
    <h3 class="text-3xl font-bold mb-10">Kenapa Pilih <span class="text-blue-600">Little Scndh</span>?</h3>
    <div class="flex flex-wrap justify-center gap-10">
        <div class="w-64 p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
            <i class="fas fa-check-circle text-4xl text-green-500 mb-4"></i>
            <p class="font-semibold">Original & Berkualitas</p>
        </div>
        <div class="w-64 p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
            <i class="fas fa-shipping-fast text-4xl text-blue-500 mb-4"></i>
            <p class="font-semibold">Pengiriman Cepat</p>
        </div>
        <div class="w-64 p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
            <i class="fas fa-leaf text-4xl text-green-400 mb-4"></i>
            <p class="font-semibold">Ramah Lingkungan</p>
        </div>
    </div>
</section>

<!-- Kategori Populer -->
<section class="py-16 bg-gray-100 text-center">
    <h3 class="text-3xl font-bold mb-8">Kategori Populer</h3>
    <div class="flex justify-center flex-wrap gap-4">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('shop', ['category' => $category->id])); ?>"
       class="flex items-center gap-2 px-5 py-2 bg-white rounded-full border border-gray-300 shadow hover:bg-blue-500 hover:text-white transition">
        <i class="fas fa-tag"></i> <?php echo e($category->name); ?>

    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<!-- Produk Terlaris -->
<section id="produk" class="py-20 px-6 bg-white">
    <h3 class="text-3xl font-bold text-center mb-12">Produk Terlaris</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:scale-105">
            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="text-lg font-semibold"><?php echo e($product->name); ?></h4>
                <p class="text-gray-600">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                <a href="<?php echo e(route('product.show', $product->id)); ?>" class="mt-4 block bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700 transition">Lihat Detail</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-blue-600 text-white text-center">
    <h3 class="text-2xl font-semibold mb-4">Dapatkan Info & Promo Terbaru!</h3>
    <form class="flex justify-center mt-6 gap-3 flex-wrap">
        <input type="email" placeholder="Masukkan email kamu..." class="px-4 py-2 rounded w-64 text-black focus:outline-none">
        <button class="px-5 py-2 bg-black rounded hover:bg-gray-800 transition">Langganan</button>
    </form>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white text-center py-8">
    <p class="mb-3 text-sm">&copy; 2025 Little Scndh. All rights reserved.</p>
    <div class="flex justify-center space-x-6 text-xl">
        <a href="#" class="hover:text-pink-400"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="hover:text-green-400"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#" class="hover:text-red-400"><i class="fa-brands fa-tiktok"></i></a>
    </div>
</footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\THRIFT_STORE_LITTLE_SCNDH2\resources\views/admin/home.blade.php ENDPATH**/ ?>