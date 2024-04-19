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
        $data = new User();
        $data->name = "Admin";
        $data->email = "admin@gmail.com";
        $data->password = Hash::make(159753123);
        $data->save();
    }
}
