<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('title_2')->nullable();
            $table->text('description_2')->nullable();
            $table->string('title_3')->nullable();
            $table->text('description_3')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

        });
    }


    public function down(): void {
        Schema::dropIfExists('about');
    }
};
