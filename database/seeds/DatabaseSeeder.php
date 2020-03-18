<?php

use App\Client;
use App\Product;
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
        factory(Product::class, 300)->create();
        factory(Client::class, 200)->create();
        $this->call(SuperSeeder::class);
    }
}
