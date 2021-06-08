<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = User::create([
            'name' => 'Admin',


            'email' => 'diaz-rodrigo@hotmail.com',
            'email_verified_at'=>'2021-06-01 19:07:38',
            'password' => Hash::make('sondeo23')
        ]);
        $super->assignRole('Admin');
    }
}
