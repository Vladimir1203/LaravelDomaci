<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name'=>'miki',
            'email'=>'miki@gmail.com',
            'password'=>'mikimiki'
        ],[
            'name'=>'pera',
            'email'=>'pera@gmail.com',
            'password'=>'perapera'
        ],[
            'name'=>'laza',
            'email'=>'laza@gmail.com',
            'password'=>'lazalaza'
        ]
    ]);
    }
}
