<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['jeans','jackets','athletic',
                'sweatshirts','boots','shirts','pants']),
            'description' =>$this->faker->paragraph,
            'price' => $this->faker->randomNumber(3),
            'discount' =>$this->faker->randomNumber(2),
            'stock' => $this->faker->randomNumber(2),
            'category' => $this->faker->randomElement(['women','men','boys','girls','baby']),
            'brand' => $this->faker->randomElement(
                ['Nike','Adidas','Puma','Skechers','ARMANI','FENDI','BURBERRY','GUCCI']),
            'owner' => User::query()->inRandomOrder()->first()->id,
        ];
    }
}
