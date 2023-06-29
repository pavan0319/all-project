<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'pavan',
                'email' => 'pavan.admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
                'address'=> 'abcd',
                'phonenumber'=> '8980214821'
            ],
            //agent
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'pavan.agent@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'agent',
                'status' => 'active',
                'address'=> 'abcd',
                'phonenumber'=> '8980214821'
            ],
            //user
            [
                'name'=> 'User',
                'username'=>'user',
                'email'=>'pavan.useer@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'user',
                'status'=>'active',
                'address'=> 'abcd',
                'phonenumber'=> '8980214821',
               ]

        ]);
    }
}
