<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'naslov'=>'seeder',
                'text'=>'seeder poruka 1'
            ],[
                'naslov'=>'seeder',
                'text'=>'seeder poruka 2'
            ],[
                'naslov'=>'seeder',
                'text'=>'seeder poruka 3'
            ]
        ]);
    }
}
