<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{

    protected $colors = ['Pink','Crimson','Red','Maroon','Brown','Misty','Rose','Salmon',
        'Coral','Orange-Red','Chocolate','Orange','Gold','Ivory', 'Yellow','Olive',
        'Yellow-Green','Lawn green','Chartreuse','Lime','Green Spring','green',
        'Aquamarine','Turquoise','Azure','Aqua/Cyan', 'Teal','Lavender','Blue','Navy',
        'Blue-Violet','Indigo','Dark Violet','Plum','Magenta','Purple','Red-Violet',
        'Tan','Beige','Slate gray','Dark Slate Gray', 'White','White Smoke','Light Gray'
        ,'Silver', 'Dark Gray','Gray','Dim Gray','Black'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product');
            $table->string('image');
            $table->enum('color',$this->colors);
            $table->boolean('main')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('product')->on('products')
                ->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
