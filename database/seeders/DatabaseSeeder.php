<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public static array $seeders = [];

    public function run()
    {
        foreach (self::$seeders as $seeder){
            $this->call($seeder);
        }

    }
}
