<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'product' =>Product::query()->inRandomOrder()->first()->id,
            'image'=>$this->faker->image('public/images/products',
                640,480,null,false),
            'color' => $this->faker->randomElement(['Pink','Crimson','Red','Maroon','Brown','Misty','Rose','Salmon',
                'Coral','Orange-Red','Chocolate','Orange','Gold','Ivory', 'Yellow','Olive',
                'Yellow-Green','Lawn green','Chartreuse','Lime','Green Spring','green',
                'Aquamarine','Turquoise','Azure','Aqua/Cyan', 'Teal','Lavender','Blue','Navy',
                'Blue-Violet','Indigo','Dark Violet','Plum','Magenta','Purple','Red-Violet',
                'Tan','Beige','Slate gray','Dark Slate Gray', 'White','White Smoke','Light Gray'
                ,'Silver', 'Dark Gray','Gray','Dim Gray','Black'])
        ];
    }
}
