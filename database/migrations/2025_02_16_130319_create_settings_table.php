<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Helping Paws');
            $table->string('slogan')->default('Care, Connect, Rescue');
            $table->text('des')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_dark')->nullable();
            $table->string('logo_side')->nullable();


            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('map_url')->nullable();
            $table->boolean('map_is_active')->nullable();

            $table->timestamps();
        });
    }


    public function down(): void {
        Schema::dropIfExists('settings');
    }
};
