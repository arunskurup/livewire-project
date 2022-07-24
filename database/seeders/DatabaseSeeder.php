<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $continents=[
            ['id' => '1', 'name' => 'Europe',],
            ['id' => '2', 'name' => 'Asia',],
            ['id' => '3','name' => 'Africa',],
            ['id' => '4', 'name' => 'South America',],
            ['id' => '5', 'name' => 'North America',],
        ];
        foreach($continents as $item){
            \App\Models\Continent::factory()->create($item)
            ->each(function($c){
                $c->countries()->saveMoney(Country::factory(10)->make());
            });

        }
    }
}
