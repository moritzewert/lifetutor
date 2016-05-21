<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Lifetutor\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mo',
                'email' => 'moritzewert@me.com',
                'password' => Hash::make('passwort12')
            ]
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
