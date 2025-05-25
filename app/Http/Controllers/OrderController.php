<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function history()
    {
        // Pastikan user sudah login
        $orders = auth()->user()
            ->orders()
            ->with('items.product') // pastikan relasi ini ada
            ->latest()
            ->get();

        return view('orders.history', compact('orders'));
    }
}
