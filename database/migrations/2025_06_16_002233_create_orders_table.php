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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
              // ربط الطلب بمستخدم
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // بيانات الحفلة
            $table->string('event_name');
            $table->date('event_date');
            // رقم الفاتورة
            $table->string('invoice_number')->unique();
            // إجمالي السعر
            $table->decimal('total_price', 10, 2)->default(0);
            // الحالة: معلّق - موافَق عليه - تم التوصيل - تم الإرجاع - مرفوض
            $table->enum('status', ['pending', 'approved', 'delivered', 'returned', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
