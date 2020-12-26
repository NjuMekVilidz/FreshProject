<?php

use Illuminate\Database\Seeder;

class InstagramProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\InstagramProfile::class, 30)->create();
    }
}
