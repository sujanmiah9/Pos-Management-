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
        return [
            'product_type_id'=>$this->faker->numberBetween(1, 10),
            'brand_id'=>$this->faker->numberBetween(1, 10),
            'vendor_id'=>$this->faker->numberBetween(1, 10),
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween(100, 500),
            'stock'=>$this->faker->numberBetween(30, 100),
            'payment'=>$this->faker->numberBetween(100, 2000),
            'descript'=>$this->faker->realText(),
        ];
    }
}
