<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataUser extends Seeder
{
    public function run()
    {
        $user = [
            [
                'name' => 'User',
                'email' => 'yadinugraha@gmail.com',
                'password' => bcrypt('password'),
                'nik' => '-',
                'divisi' => '-',
                'role' => 'user'
            ],

            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'nik' => '-',
                'divisi' => '-',
                'role' => 'admin'
            ],

            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('password'),
                'nik' => '-',
                'divisi' => '-',
                'role' => 'super admin'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
