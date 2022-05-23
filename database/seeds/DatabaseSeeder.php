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
        // questo va messo per non mettere sempre il nome di ogni seeder che voglio utilizzare
        $this->call(PicSeeder::class);
    }
}
