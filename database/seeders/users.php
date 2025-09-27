<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
            [
                'name' => 'surfista aluno 1',
                'email' => 'sursurfista1@email.com',
                'password' => bcrypt('senha'),
                'idade' => 30
            ],
            [
                'name' => 'super admin',
                'email' => 'superadmin@email.com',
                'password' => bcrypt('senha'),
                'idade' => 99
            ],
            [
                'name' => 'aluno2',
                'email' => 'aluno2@email.com',
                'password' => bcrypt('senha'),
                'idade' => 18
            ]
        );
    }
}
