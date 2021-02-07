<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'subject'=>'seeder',
                'message'=>'seeder poruka 1'
            ],[
                'subject'=>'seeder',
                'message'=>'seeder poruka 2'
            ],[
                'subject'=>'seeder',
                'message'=>'seeder poruka 3'
            ]
        ]);
    }
}
