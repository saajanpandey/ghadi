<?php

use App\Model\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Hello World',
            'email'=>'admin@admin.com',
            'password' => bcrypt('123456')
        ]);
    }
}
