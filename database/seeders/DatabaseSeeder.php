<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Client;
use App\Models\Coin;
use App\Models\Company;
use App\Models\Document;
use App\Models\Provider;
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
        $this->call(UserSeeder::class);
        Document::factory(10)->create();
        Branch::factory(10)->create();
        Company::factory(1)->create();
        Category::factory(30)->create();
        Coin::factory(10)->create();
        Client::factory(100)->create();
        Provider::factory(100)->create();
    }
}
