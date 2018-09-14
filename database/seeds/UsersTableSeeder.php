<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alefe',
            'last_name' => 'Souza',
            'email' => 'contact@alefesouza.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
