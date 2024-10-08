<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Cocoa',
            'email' => 'cocoa@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrator');
        User::create([
            'name' => 'Yeison',
            'email' => 'yeison@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrator');
        User::create([
            'name' => 'Rafa',
            'email' => 'rafa@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrator');
        User::create([
            'name' => 'Jesusma',
            'email' => 'jesusma@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrator');
        User::create([
            'name' => 'Cocoa',
            'password' => bcrypt('123456'),
            'email' => 'jesus@gmail.com'
        ])->assignRole('User');
        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('User');
        });
    }
}
