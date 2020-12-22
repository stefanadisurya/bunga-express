<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Bouquet',
                'user_id' => 1,
                'price' => 50000,
                'description' => "Beautiful hand bouquet.",
                'image' => 'bouquet.jpg'
            ],
            [
                'name' => 'Decorative Plants',
                'user_id' => 1,
                'price' => 45000,
                'description' => "Colorful decorative plants.",
                'image' => 'decorative.jpg'
            ],
            [
                'name' => 'Orchids',
                'user_id' => 2,
                'price' => 100000,
                'description' => "Orchide package.",
                'image' => 'orchids.jpg'
            ],
            [
                'name' => 'Jasmine',
                'user_id' => 3,
                'price' => 70000,
                'description' => "Rare jasmine flower",
                'image' => 'jasmine.jpg'
            ],
        ]);
    }
}
