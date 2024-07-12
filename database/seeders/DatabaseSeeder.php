<?php

namespace Database\Seeders;

use App\Models\DataAdmin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('data_admins')->insert([
            'name' => 'test',
            'username' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('admin#1234'),
        ]);
    }
}
