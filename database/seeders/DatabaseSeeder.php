<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);

        // factory faker data calling
        // Product::factory(20)->create();
        // User::factory(1)->create();
    }
}
