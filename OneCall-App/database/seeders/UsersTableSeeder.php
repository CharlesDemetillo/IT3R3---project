<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        \DB:: table('users')->truncate();

        \DB:: table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@email.com',
            'password' => bcrypt('admin123'),
            'userType' => 'admin',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Charles Demetillo',
            'email' => 'Account@email.com',
            'password' => bcrypt('account123'),
            'userType' => 'userAccount',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Police',
            'email' => 'Police@email.com',
            'password' => bcrypt('police123'),
            'userType' => 'responseTeam',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Medical',
            'email' => 'Medical@email.com',
            'password' => bcrypt('medical123'),
            'userType' => 'responseTeam',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Health',
            'email' => 'Firedept@email.com',
            'password' => bcrypt('firedepth123'),
            'userType' => 'responseTeam',
        ]);
    }
}
