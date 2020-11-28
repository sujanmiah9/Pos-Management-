<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\ProductType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        Brand::factory()->count(6)->create();
        Vendor::factory()->count(6)->create();
        ProductType::factory()->count(6)->create();
    }
}
