<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
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
                'name' => 'author',
                'email' => 'author@author.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$/WwFX67VwAFtOqpiWk./UuKXBYCXe8UZ.awRwSsxxMFh85SNMf0yC', //12345678
                'remember_token' => Str::random(10),
                'created_at'=>'2023-07-11 12:31:28',
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
