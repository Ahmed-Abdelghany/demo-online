<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->float('price');
            $table->integer('discount')->nullable();
            $table->integer('stock');
            $table->enum('category',['women','men','boys','girls','baby']);
            $table->string('brand');
//            $table->enum('main-image',[]);
            $table->unsignedBigInteger('owner');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('owner')->on('users')
                ->references('id')->cascadeOnDelete();

//            $table->foreign('main-image')->on('images')
//                ->references('id')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
