<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->boolean('active')->default(1);
            $table->double('price');
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->text('details');
            $table->text('size_and_fit_ar');
            $table->text('size_and_fit_en');
            $table->text('shipping_and_returns_ar');
            $table->text('shipping_and_returns_en');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
