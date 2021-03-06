<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Demo',
            'phone' => '0737116001',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('demo'),
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'slug' => 'admin',
        ]);


        DB::table('roles')->insert([
            'name' => 'user',
            'slug' => 'user',
        ]);

        DB::table('roles')->insert([
            'name' => 'manager',
            'slug' => 'manager',
        ]);

        DB::table('roles_users')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
