<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // $this->call(BannersTableSeeder::class);
     //   $this->call(MealsSeeder::class);
        //   $this->call(DrinksTableSeeder::class);
       // $this->call(MembersTableSeeder::class);
       // $this->call(AboutTableSeeder::class);

    }
}
