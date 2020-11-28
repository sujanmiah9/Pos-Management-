<?php

namespace Database\Factories;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vendor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vendor_name'=>$this->faker->name,
            'phone_number'=>$this->faker->e164PhoneNumber,
            'email_add'=>$this->faker->freeEmail,
            'descript'=>$this->faker->realText,
        ];
    }
}
