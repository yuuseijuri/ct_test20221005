<?php

namespace Database\Seeders;

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
        \App\Models\Contact::factory(35)->create();
        \App\Models\User::factory(35)->create();
        $this->call(ChecksTableSeeder::class);
        
    }
}
