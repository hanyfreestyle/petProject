<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pet_help_requests', function (Blueprint $table) {
            $table->id();
            $table->string('pet_name');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('last_seen')->nullable();
            $table->text('details');
            $table->string('image');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pet_help_requests');
    }
};
