<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('secret'), 'utype' => 'ADM'],
            ['name' => 'User', 'email' => 'user@gmail.com', 'password' => bcrypt('secret'), 'utype' => 'USR']
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
