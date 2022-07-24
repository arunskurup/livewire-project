<?php

namespace Database\Seeders;
use App\Models\Country1;
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
            [ 'name' => 'Europe',],
            [ 'name' => 'Asia',],
            ['name' => 'Africa',],
            ['name' => 'South America',],
            [ 'name' => 'North America',],
        ];
        foreach($continents as $item){
            \App\Models\Continent1::factory()->create($item)
            ->each(function($c){
                $c->countries()->saveMany(Country1::factory(10)->make());
            });

        }
    }
}
