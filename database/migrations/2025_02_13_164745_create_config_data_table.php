<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('config_data', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id');
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }


    public function down(): void {
        Schema::dropIfExists('config_data');
    }
};
