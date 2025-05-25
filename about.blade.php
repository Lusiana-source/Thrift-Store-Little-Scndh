<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Little Scndh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans">

    
        <!-- Breadcrumb -->
        <div class="text-sm text-gray-600 max-w-7xl mx-auto px-2 mb-6">
            <a href="{{ route('home') }}" class="hover:underline">Home</a> &gt; <span class="font-semibold text-gray-800">About</span>
        </div>


    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-10 text-center shadow">
        <h1 class="text-4xl font-bold">Tentang <span class="text-black">Little Scndh</span></h1>
        <p class="text-gray-200 mt-2 text-lg">Thrift store dengan pakaian berkualitas dan harga terjangkau</p>
    </header>

        <!-- Keunggulan -->
        <section class="mb-16 reveal">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
                    <i class="fas fa-star text-yellow-400 text-3xl mb-2"></i>
                    <h2 class="text-xl font-semibold mb-2">Barang Berkualitas</h2>
                    <p class="text-gray-600">Produk dikurasi dengan baik untuk menjamin kualitas terbaik.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
                    <i class="fas fa-tags text-green-500 text-3xl mb-2"></i>
                    <h2 class="text-xl font-semibold mb-2">Harga Terjangkau</h2>
                    <p class="text-gray-600">Dapatkan fashion unik tanpa menguras dompet.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
                    <i class="fas fa-leaf text-green-400 text-3xl mb-2"></i>
                    <h2 class="text-xl font-semibold mb-2">Fashion Berkelanjutan</h2>
                    <p class="text-gray-600">Dukung gaya hidup ramah lingkungan dengan mengurangi limbah tekstil.</p>
                </div>
            </div>
        </section>

        <!-- Perjalanan Kami -->
        <section class="mb-16 text-center max-w-3xl mx-auto reveal">
            <h2 class="text-2xl font-bold mb-4">Perjalanan Kami</h2>
            <p class="text-gray-600 leading-relaxed">
                Little Scndh dimulai dari passion terhadap fashion vintage dan sustainable. Kami percaya bahwa pakaian bekas yang berkualitas masih layak untuk diberdayakan. Berawal dari penjualan kecil, kini kami telah melayani ratusan pelanggan dengan produk pilihan yang curated.
            </p>
        </section>

        <!-- Tim Kami 
        <section class="text-center mb-16 reveal">
            <h2 class="text-2xl font-bold mb-6">Tim Kami</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://ui-avatars.com/api/?name=Nama+Tim+1&background=random" alt="Tim 1" class="rounded-full mb-4 w-24 h-24 object-cover">
                    <p class="text-gray-500">Tim 1</p>
                    <h3 class="text-lg font-bold">Nama Tim 1</h3>
                    <p class="text-gray-600">Founder</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://ui-avatars.com/api/?name=Nama+Tim+2&background=random" alt="Tim 2" class="rounded-full mb-4 w-24 h-24 object-cover">
                    <p class="text-gray-500">Tim 2</p>
                    <h3 class="text-lg font-bold">Nama Tim 2</h3>
                    <p class="text-gray-600">Marketing</p>
                </div>
            </div>
        </section>   -->

        <!-- Testimoni Carousel -->
        <section class="mb-16 text-center reveal">
            <h2 class="text-3xl font-bold mb-6">Apa Kata Mereka?</h2>

            <div class="relative max-w-2xl mx-auto">
                <div id="carousel" class="overflow-hidden">
                    <div class="carousel-item transition duration-500 ease-in-out transform" style="display: block;">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <p class="italic text-gray-700">"Barangnya bagus banget, lebih bagus dari foto! Pasti bakal beli lagi."</p>
                            <p class="mt-4 font-semibold text-gray-800">— Rina, Makassar</p>
                        </div>
                    </div>
                    <div class="carousel-item hidden transition duration-500 ease-in-out transform">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <p class="italic text-gray-700">"Pelayanannya ramah dan fast response. Love it!"</p>
                            <p class="mt-4 font-semibold text-gray-800">— Aldi, Bandung</p>
                        </div>
                    </div>
                    <div class="carousel-item hidden transition duration-500 ease-in-out transform">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <p class="italic text-gray-700">"Selalu puas belanja di Little Scndh. Barangnya unik!"</p>
                            <p class="mt-4 font-semibold text-gray-800">— Dita, Surabaya</p>
                        </div>
                    </div>
                </div>

                <!-- Navigasi Carousel -->
                <div class="mt-6 flex justify-center space-x-4">
                    <button onclick="prevSlide()" class="px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400" aria-label="Sebelumnya">&larr;</button>
                    <button onclick="nextSlide()" class="px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400" aria-label="Berikutnya">&rarr;</button>
                </div>
            </div>
        </section>

        <!-- CTA Sosial Media -->
        <section class="text-center reveal">
            <h2 class="text-2xl font-semibold mb-3">Hubungi Kami</h2>
            <p class="text-gray-600 mb-4">Instagram: <a href="#" class="text-blue-600 font-medium hover:underline">@little_scndh</a></p>
            <div class="flex justify-center space-x-6 text-xl mb-6">
                <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-green-500"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-black"><i class="fab fa-tiktok"></i></a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-200 mt-20">
        <p class="text-sm text-gray-700">&copy; 2025 Little Scndh. All rights reserved.</p>
    </footer>

    <!-- Carousel Script -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 5000);
        showSlide(currentSlide);
    </script>

    <!-- Scroll Reveal -->
    <script>
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(reveal => {
            reveal.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700');
            observer.observe(reveal);
        });
    </script>

</body>
</html>
