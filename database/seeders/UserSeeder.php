<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'name'=>'adminYuda',
            'email'=>'adminYuda@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $admin = User::create([
            'name'=>'adminRifki',
            'email'=>'adminRifki@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $customer = User::create([
            'name'=>'Gema Ramadhan',
            'email'=>'gema@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $customer->assignRole('customer');
    }
}
