<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'),
        ]);

        $admin->assignRole('admin');

        $employee = User::create([
            'name' => 'Admin Employee',
            'email' => 'employee@mountaineer.id',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'),
        ]);

        $employee->assignRole('employee');
    }
}
