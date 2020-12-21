<?php

use App\Model\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'=>'Rolex'
        ]);
        Brand::create([
            'name'=>'Titan'
        ]);
        Brand::create([
            'name'=>'Casio'
        ]);
        Brand::create([
            'name'=>'Audemars Piguet'
        ]);

    }
}
