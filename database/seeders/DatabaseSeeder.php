<?php

namespace Database\Seeders;
use App\Models\Country;
use App\Models\Product;
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
       
        // $continents=[
        //     [ 'name' => 'Europe',],
        //     [ 'name' => 'Asia',],
        //     ['name' => 'Africa',],
        //     ['name' => 'South America',],
        //     [ 'name' => 'North America',],
        // ];
        // foreach($continents as $item){
        //     \App\Models\Continent::factory()->create($item)
        //     ->each(function($c){
        //         $c->countries()->saveMany(Country::factory(10)->make());
        //     });

        // }
        Product::factory(100)->create();
    }
}
