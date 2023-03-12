<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mountaineer.id',
            'password' => bcrypt('1234567890')
        ]);

        $admin->assignRole('admin');

        $employee = User::create([
            'name' => 'Admin',
            'email' => 'employee@mountaineer.id',
            'password' => bcrypt('1234567890')
        ]);

        $employee->assignRole('employee');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@mountaineer.id',
            'password' => bcrypt('1234567890')
        ]);

        $user->assignRole('user');
    }
}
