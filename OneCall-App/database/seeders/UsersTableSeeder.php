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
            'age' => '30',
            'address' => 'macanhan',
            'contact_no' => '0606060606',
            'email' => 'Admin@email.com',
            'password' => bcrypt('admin123'),
            'userType' => 'admin',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Charles Demetillo',
            'age' => '30',
            'address' => 'macanhan',
            'contact_no' => '0606060606',
            'email' => 'Account@email.com',
            'password' => bcrypt('account123'),
            'userType' => 'userAccount',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Police',
            'age' => '30',
            'address' => 'macanhan',
            'contact_no' => '0606060606',
            'email' => 'Police@email.com',
            'password' => bcrypt('police123'),
            'userType' => 'responseTeam',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Medical',
            'age' => '30',
            'address' => 'macanhan',
            'contact_no' => '0606060606',
            'email' => 'Medical@email.com',
            'password' => bcrypt('medical123'),
            'userType' => 'responseTeam',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Health',
            'age' => '30',
            'address' => 'macanhan',
            'contact_no' => '0606060606',
            'email' => 'Firedept@email.com',
            'password' => bcrypt('firedepth123'),
            'userType' => 'responseTeam',
        ]);
    }
}
