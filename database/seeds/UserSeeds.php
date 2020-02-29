<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexander',
            'email' => 'alex@email.com',
            'password' => '1234'
        ]);
    }
}
