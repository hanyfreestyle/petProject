<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::table('shelters', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم الملجأ
            $table->string('website')->nullable(); // الموقع الإلكتروني
            $table->text('services')->nullable(); // الخدمات
            $table->string('location'); // الموقع
            $table->string('landmark')->nullable(); // علامة مميزة
            $table->string('phone_number'); // رقم الهاتف
            $table->timestamps();
        });
    }


    public function down(): void {
        Schema::dropIfExists('shelters');
    }
};
