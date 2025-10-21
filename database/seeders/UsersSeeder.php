<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('users')->insert(
        //         [
        //             'name' => 'surfista aluno 1',
        //             'email' => 'sursurfista1@email.com',
        //             'password' => bcrypt('senha'),
        //             'idade' => 30
        //         ]
        // );
        // DB::table('users')->insert(
        //         [
        //             'name' => 'super admin',
        //             'email' => 'superadmin@email.com',
        //             'password' => bcrypt('senha'),
        //             'idade' => 99
        //         ]
        //     );
        // DB::table('users')->insert(
        //     [
        //         'name' => 'aluno2',
        //         'email' => 'aluno2@email.com',
        //         'password' => bcrypt('senha'),
        //         'idade' => 18
        //     ]
        // );

        DB::table('users')->insert(
            [
                [
                    'name' => 'Kelly Slater',
                    'email' => 'kelly.slater@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 52
                ],
                [
                    'name' => 'Stephanie Gilmore',
                    'email' => 'steph.gilmore@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 36
                ],
                [
                    'name' => 'Gabriel Medina',
                    'email' => 'gabriel.medina@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 31
                ],
                [
                    'name' => 'Carissa Moore',
                    'email' => 'carissa.moore@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 32
                ],
                [
                    'name' => 'John John Florence',
                    'email' => 'jj.florence@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 32
                ],
                [
                    'name' => 'Italo Ferreira',
                    'email' => 'italo.ferreira@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 30
                ],
                [
                    'name' => 'Maya Gabeira',
                    'email' => 'maya.gabeira@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 37
                ],
                [
                    'name' => 'Filipe Toledo',
                    'email' => 'filipe.toledo@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 29
                ],
                [
                    'name' => 'Mick Fanning',
                    'email' => 'mick.fanning@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 43
                ],
                [
                    'name' => 'Caroline Marks',
                    'email' => 'caroline.marks@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 22
                ],
                [
                    'name' => 'Adriano de Souza',
                    'email' => 'adriano.souza@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 37
                ],
                [
                    'name' => 'Bethany Hamilton',
                    'email' => 'bethany.hamilton@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 34
                ],
                [
                    'name' => 'Tom Curren',
                    'email' => 'tom.curren@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 60
                ],
                [
                    'name' => 'Jack Robinson',
                    'email' => 'jack.robinson@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 26
                ],
                [
                    'name' => 'Tatiana Weston-Webb',
                    'email' => 'tatiana.weston@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 28
                ],
                [
                    'name' => 'Andy Irons',
                    'email' => 'andy.irons@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 32
                ],
                [
                    'name' => 'Sally Fitzgibbons',
                    'email' => 'sally.fitzgibbons@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 33
                ],
                [
                    'name' => 'Joel Parkinson',
                    'email' => 'joel.parkinson@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 43
                ],
                [
                    'name' => 'Silvana Lima',
                    'email' => 'silvana.lima@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 39
                ],
                [
                    'name' => 'Griffin Colapinto',
                    'email' => 'griffin.colapinto@email.com',
                    'password' => bcrypt('senha'),
                    'idade' => 26
                ],
            ]

        );
    }
}
