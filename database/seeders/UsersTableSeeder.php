<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin seeding
        User::create([
            'name'=>'Admin',
            'email'=>'admin@NBC.com',
            'role'=> 'admin',
            'status' => 'active',
            'password'=>Hash::make('password')
        ]);


        //admin seeding
        User::create([
            'name'=>'User',
            'email'=>'user@NBC.com',
            'role'=> 'user',
            'status' => 'active',
            'password'=>Hash::make('password')
        ]);
    }
}
