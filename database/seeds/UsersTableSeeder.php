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
            'password' => bcrypt('secret'),
            'email' => 'contact@alefesouza.com'
        ]);
    }
}
