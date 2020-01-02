<?php

use Illuminate\Database\Seeder;
use App\Meals;
class MealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Meals::class,30 )->create();
    }
}
