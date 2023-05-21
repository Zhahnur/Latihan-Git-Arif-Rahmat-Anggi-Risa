<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Zhahnur',
                'lastname' => 'Arif',
                'email'=> 'mzhahnur@gmail.com',
                'age' => 21,
                'position_id' => 1
            ],
            [
                'firstname' => 'Nawang',
                'lastname' => 'Aji',
                'email'=> 'nawangkuntari@gmail.com',
                'age' => 20,
                'position_id' => 2
            ],
            [
                'firstname' => 'Sasuke',
                'lastname' => 'Naruto',
                'email'=> 'sasukenaruto@gmail.com',
                'age' => 30,
                'position_id' => 3
            ],
        ]);
    }
}
