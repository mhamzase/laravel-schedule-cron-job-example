<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Hamza',
            'email' => 'mhamzasulehri143@gmail.com',
            'created_at' =>\Carbon\Carbon::now('utc'),
            'updated_at' =>\Carbon\Carbon::now('utc'),
    
    ]);
    }
}
