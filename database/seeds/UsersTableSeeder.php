<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=> 0
        ]);
        //Support
        User::create([
            'name'=>'soporte',
            'email'=>'soporte@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=> 1
        ]);

        //Client
        User::create([
            'name'=>'cliente',
            'email'=>'cliente@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=> 2
        ]);



    }
}
