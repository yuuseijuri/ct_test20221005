<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Check;

class ChecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [1, 2, 3];
        foreach($genders as $gender) {
            Check::create(['gender' => $gender]);
        }
    }
}
