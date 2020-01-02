<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Abouts::create([
            'name'=> "Chicken Village",
            'address'=> "Cnr 2nd Street and Robert Mugabe Ave Harare",
            'pnumber'=> "+263 784 552 768",
            'email'=> "infor@chickenvillage.co.zw",
            'about'=> "Chicken Village is one of the restaurants which
             provide quality food in Harare, it was designed with the 
             history in mind we have created a soft
             industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery..",
            'description'=> "Chicken Village has the perfect place to enjoy 
            fine food and great cocktails with excellent service, 
            in comfortable atmospheric surroundings.
             We have a soft dining room, combined with an open kitchen, coffee take out bar.",

        ]);
    }
}
