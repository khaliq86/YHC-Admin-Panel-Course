<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Kursus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Kursus Laravel',
                'deskripsi' => 'Kursus Laravel',
                'durasi' => 120,

            ],
            [
                'judul' => 'Kursus Vue',
                'deskripsi' => 'Kursus Vue',
                'durasi' => 140,
            ],
            [
                'judul' => 'Kursus React',
                'deskripsi' => 'Kursus React',
                'durasi' => 210,
            ],
            [
                'judul' => 'Kursus Angular',
                'deskripsi' => 'Kursus Angular',
                'durasi' => 45,
            ],
            [
                'judul' => 'Kursus Codeigniter',
                'deskripsi' => 'Kursus Codeigniter',
                'durasi' => 400,
            ],
            [
                'judul' => 'Kursus PHP',
                'deskripsi' => 'Kursus PHP',
                'durasi' => 200,
            ],
            [
                'judul' => 'Kursus Javascript',
                'deskripsi' => 'Kursus Javascript',
                'durasi' => 320,
            ],
            [
                'judul' => 'Kursus HTML',
                'deskripsi' => 'Kursus HTML',
                'durasi' => 100,
            ],
            [
                'judul' => 'Kursus CSS',
                'deskripsi' => 'Kursus CSS',
                'durasi' => 90,
            ],
            [
                'judul' => 'Kursus Bootstrap',
                'deskripsi' => 'Kursus Bootstrap',
                'durasi' => 30,
            ],
            [
                'judul' => 'Kursus Tailwind',
                'deskripsi' => 'Kursus Tailwind',
                'durasi' => 25,
            ]
        ];

        DB::table('kursuses')->insert($data);
    }
}
