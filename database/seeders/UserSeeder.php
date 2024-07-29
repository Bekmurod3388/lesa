<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::query()->firstOrCreate(
            [
                'phone' => '123456789',
            ],
            [
                'name' => 'admin',
                'password' => Hash::make('admin'),
            ]
        );
        $admin->assignRole('admin');

        $manager = User::query()->firstOrCreate(
            [
                'phone' => '987654321',
            ],
            [
                'name' => 'manager',
                'password' => Hash::make('admin'),
            ]
        );
        $manager->assignRole('manager');

    }
}
