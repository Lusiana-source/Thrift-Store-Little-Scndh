<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('category'); // Hapus kolom kategori yang salah
            $table->foreignId('category_id')->nullable()->change(); // Pastikan category_id bisa NULL
        });
    }
    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category'); // Tambahkan kembali jika rollback
            $table->foreignId('category_id')->change();
        });
    }    
};
