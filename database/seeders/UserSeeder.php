<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'id'=>1,
            'name'=>'Example1',
            'email'=>'Example1@gmail.com',
            'password'=>Hash::make('12345'),
        ]);
        User::create([
            'id'=>2,
            'name'=>'Example2',
            'email'=>'Example2@gmail.com',
            'password'=>Hash::make('12345'),
        ]);
        User::create([
            'id'=>3,
            'name'=>'Example3',
            'email'=>'Example3@gmail.com',
            'password'=>Hash::make('12345'),
        ]);
        //realizo la insersion de user con role
        DB::table('role_user')->insert([
            'user_id'=>1,
            'role_id'=>1,
            'added_by'=>'Juan',
        ]);
        DB::table('role_user')->insert([
            'user_id'=>2,
            'role_id'=>1,
            'added_by'=>'Luis',
        ]);
        DB::table('role_user')->insert([
            'user_id'=>2,
            'role_id'=>3,
            'added_by'=>'Juan',
        ]);
        DB::table('role_user')->insert([
            'user_id'=>3,
            'role_id'=>4,
            'added_by'=>'Maria',
        ]);
    }
}
