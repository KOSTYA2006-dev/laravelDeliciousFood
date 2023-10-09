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
        Schema::create('eat_models', function (Blueprint $table) {
            $table->id();
            $table->string("artical_name");
            $table->text("artical_description");
            $table->text("classification");
            $table->string('previu_img')->default('');;
            $table->string('price');
            $table->string('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eat_models');
    }
};
