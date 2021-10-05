<?php

namespace Database\Factories;

use App\Models\Product;
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
        $image = $this->faker->randomElement([
            "https://e7bf638d32ecc90fd2ad-06bbba56bc7518e03192bc2b213a0e8b.ssl.cf1.rackcdn.com/Larq785481.JPG"    
        ]);
    
        return [
            'code'         => $this->faker->ean8,
            'title'        => $this->faker->word,
            'description'  => $this->faker->sentence,
            'content'      => $this->faker->sentence,
            'meta'         => NULL,
            'image'        => $image,
            'on_sale'      => true,
            'rating'       => $this->faker->numberBetween(0, 5),
            'sold_count'   => 0,
            'review_count' => 0,
            'price'        => 0,
        ];
    }
}
