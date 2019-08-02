<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'fatur',
            'email' => 'fatur@mail.com',
            'password' => Hash::make('12345'),
            'jabatan' => 'admin',
            'jk' => 'laki-laki',
            'remember_token' => str_random(30),
        ]);
    }
}
