<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->enum('type', ['home', 'about']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('backgrounds');
    }
};
