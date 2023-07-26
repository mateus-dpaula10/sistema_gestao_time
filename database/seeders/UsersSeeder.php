<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mateus',
            'email' => 'mateus.dpaula10@gmail.com',
            'password' => bcrypt('040999dp')
        ]);
    }
}
