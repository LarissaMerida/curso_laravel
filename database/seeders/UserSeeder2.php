<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
};

class UserSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Teste4',
            'email' => 'e@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Teste5',
            'email' => 'b@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Teste6',
            'email' => 'c@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Teste7',
            'email' => 'd@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
