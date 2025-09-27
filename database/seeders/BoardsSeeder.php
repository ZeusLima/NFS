<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BoardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boards')->insert(
            [
                [
                    'marca' => 'Channel Islands',
                    'size' => 5.11,
                    'volume' => 28.5
                ],
                [
                    'marca' => 'Lost Surfboards',
                    'size' => 5.9,
                    'volume' => 27.2
                ],
                [
                    'marca' => 'Pyzel',
                    'size' => 6.0,
                    'volume' => 29.0
                ],
                [
                    'marca' => 'DHD (Darren Handley Designs)',
                    'size' => 5.10,
                    'volume' => 28.0
                ],
                [
                    'marca' => 'Firewire',
                    'size' => 6.1,
                    'volume' => 31.5
                ],
                [
                    'marca' => 'JS Industries',
                    'size' => 5.8,
                    'volume' => 26.5
                ],
                [
                    'marca' => 'HaydenShapes',
                    'size' => 5.7,
                    'volume' => 27.8
                ],
                [
                    'marca' => 'Slater Designs',
                    'size' => 6.2,
                    'volume' => 32.0
                ],
                [
                    'marca' => 'Rusty Surfboards',
                    'size' => 6.4,
                    'volume' => 34.1
                ],
                [
                    'marca' => 'T.Patterson Surfboards',
                    'size' => 5.9,
                    'volume' => 27.5
                ],
                [
                    'marca' => 'Sharp Eye',
                    'size' => 5.11,
                    'volume' => 28.9
                ],
                [
                    'marca' => 'Cabianca Surfboards',
                    'size' => 5.10,
                    'volume' => 28.2
                ],
                [
                    'marca' => 'Al Merrick',
                    'size' => 6.0,
                    'volume' => 29.5
                ],
                [
                    'marca' => 'Superbrand',
                    'size' => 5.8,
                    'volume' => 26.8
                ],
                [
                    'marca' => '...Lost Mayhem',
                    'size' => 5.7,
                    'volume' => 27.0
                ],
                [
                    'marca' => 'Stamps Surfboards',
                    'size' => 6.3,
                    'volume' => 33.0
                ],
                [
                    'marca' => 'Chilli Surfboards',
                    'size' => 5.10,
                    'volume' => 28.1
                ],
                [
                    'marca' => 'Cole Surfboards',
                    'size' => 6.1,
                    'volume' => 30.5
                ],
                [
                    'marca' => 'Placebo',
                    'size' => 5.6,
                    'volume' => 29.8
                ],
                [
                    'marca' => 'TORQ',
                    'size' => 6.6,
                    'volume' => 36.0
                ],
            ]
            );
    }
}
