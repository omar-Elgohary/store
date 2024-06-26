<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['ratio', 'number']);
            $table->double('discount');
            $table->dateTime('start_date');
            $table->dateTime('expire_date');
            $table->integer('minimum')->nullable();
            $table->integer('maximum')->nullable();
            $table->enum('status', ['available', 'expire'])->default('available');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
