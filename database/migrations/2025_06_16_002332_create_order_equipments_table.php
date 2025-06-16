<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_equipments', function (Blueprint $table) {
            $table->id();
            // العلاقات
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('equipment_id')->constrained()->onDelete('restrict');

            // البيانات الإضافية
            $table->integer('quantity')->default(1); // العدد المطلوب
            $table->integer('returned_quantity')->default(0); // اللي رجع بعد الاستخدام


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_equipments');
    }
};
