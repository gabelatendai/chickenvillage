<?php

use Illuminate\Database\Seeder;
use App\Drinks;
class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Drinks::class,5 )->create();

    }
}
