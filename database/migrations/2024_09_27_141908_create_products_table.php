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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable()->references('id')->on('services')->onDelete('set null');
            $table->string('name');
            $table->string('subtitle');
            $table->string('slug');
            $table->text('details');
            $table->boolean('is_active')->default(1);
            $table->string('title');
            $table->string('keywords');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
