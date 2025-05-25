@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-md text-center max-w-md w-full">
        <div class="flex justify-center mb-4">
            <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <h2 class="text-xl font-semibold text-gray-800">Pesanan Berhasil!</h2>
        <p class="text-sm text-gray-600 mt-2">
            Terima kasih telah berbelanja di <span class="text-indigo-600 font-medium">Little Scndh</span>.
            <br>
            Kami akan segera memproses pesananmu.
        </p>

        <div class="mt-6 space-y-3">
            <a href="{{ route('orders.history') }}"
               class="block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                📄 Lihat Riwayat Pesanan
            </a>

            <a href="{{ url('/') }}"
               class="block bg-gray-800 hover:bg-gray-900 text-white px-6 py-2 rounded-lg font-semibold transition">
                ← Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection
