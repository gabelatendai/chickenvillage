<?php

use Illuminate\Database\Seeder;
use App\Banners;
class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Banners::class,5 )->create();

    }
}
