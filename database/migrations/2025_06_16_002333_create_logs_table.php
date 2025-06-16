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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
  // ربط بالجدول الوسيط بين الطلب والمعدة
            $table->foreignId('order_equipment_id')->constrained('order_equipments')->onDelete('cascade');

            // مين عمل الإجراء (فني، مجهز، إلخ)
$table->foreignId('action_by')->nullable()->constrained('users')->nullOnDelete();

            // نوع الإجراء: تسليم - استرجاع
            $table->enum('action_type', ['delivered', 'returned']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
