<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Sports'
        ]);
        Category::create([
            'name'=>'Luxury'
        ]);
        Category::create([
            'name'=>'Mens'
        ]);
        Category::create([
            'name'=>'Womens'
        ]);
        Category::create([
            'name'=>'Kids'
        ]);

    }
}
