<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class materi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "kursus_id" => 1,
                "judul" => "Materi Laravel",
                "deskripsi" => "Materi Laravel",
                "link_embed" => "https://www.youtube.com/embed/T1TR-RGf2Pw?si=3H4CPWVj5AGukUvf",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi Vue",
                "deskripsi" => "Materi Vue",
                "link_embed" => "https://www.youtube.com/embed/j22cntCRVhM?si=5cBVxtrsCbtpgLlo",
            ],
            [
                "kursus_id" => 3,
                "judul" => "Materi React",
                "deskripsi" => "Materi React",
                "link_embed" => "https://www.youtube.com/embed/kcnwI_5nKyA?si=mQfE0zZb_lkZSqU9",
            ],
            [
                "kursus_id" => 4,
                "judul" => "Materi Angular",
                "deskripsi" => "Materi Angular",
                "link_embed" => "https://www.youtube.com/embed/cHnKrLksWGk?si=oI3UwpJg8R6c1F0o",
            ],
            [
                "kursus_id" => 5,
                "judul" => "Materi Codeigniter",
                "deskripsi" => "Materi Codeigniter",
                "link_embed" => "https://www.youtube.com/embed/VckqV2wC1gs?si=zCollLXYjz6QkPyd",
            ],
            [
                "kursus_id" => 5,
                "judul" => "Materi PHP",
                "deskripsi" => "Materi PHP",
                "link_embed" => "https://www.youtube.com/embed/l1W2OwV5rgY?si=Ksz40MYw-Bc-X58T",
            ],
            [
                "kursus_id" => 3,
                "judul" => "Materi Javascript",
                "deskripsi" => "Materi Javascript",
                "link_embed" => "https://www.youtube.com/embed/RUTV_5m4VeI?si=-ZE6dXVwSzKMJW2d",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi HTML",
                "deskripsi" => "Materi HTML",
                "link_embed" => "https://www.youtube.com/embed/NBZ9Ro6UKV8?si=ECHDZoAwqc9Uq93U",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi CSS",
                "deskripsi" => "Materi CSS",
                "link_embed" => "https://www.youtube.com/embed/CleFk3BZB3g?si=4tiFdLFpDE1Nnlqy",
            ],
            [
                "kursus_id" => 1,
                "judul" => "Materi Bootstrap",
                "deskripsi" => "Materi Bootstrap",
                "link_embed" => "https://www.youtube.com/embed/ZwMVRjPEi0M?si=UipAroxmUEspVjNo",
            ]
        ];

        DB::table('materis')->insert($data);
    }
}
