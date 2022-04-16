<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Teste',
            'email' => 'teste5@teste.com',
            'password' =>  bcrypt('123456')
        ]);
    }
}
