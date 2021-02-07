<?php

use Illuminate\Database\Seeder;

class TrainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            [
                'imePrezime'=>'Trener 1',
                'email'=>'trener1@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ],[
                'imePrezime'=>'Trener 2',
                'email'=>'trener2@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ],[
                'imePrezime'=>'Trener 3',
                'email'=>'trener3@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ]
        ]);
    }
}
