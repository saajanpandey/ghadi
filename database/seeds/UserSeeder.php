<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'first_name'=>'Saajan Raj',
        'last_name'=>'Pandey',
        'address'=>'ktm',
        'gender'=>'Male',
         'email'=>'pandey_25@hotmail.com',
         'password' => bcrypt('admin'),
            'phone_number'=>'9860898105'
        ]);
    }
}
