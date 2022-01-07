<?php

use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                "kode_rule"=> "G01",
                "nama_rule"=> "Demam suhu di atas 38",
                "nilai_md"=> 0.8
            ],
            [
                "kode_rule" => "G02",
                "nama_rule" => "Nyeri Telan",
                "nilai_md" => 0.6,
            ],
            [
                "kode_rule" => "G03",
                "nama_rule" => "Batuk kering",
                "nilai_md" => 0.4,
            ],
            [
                "kode_rule" => "G04",
                "nama_rule" => "Sesak Nafas",
                "nilai_md" => 1,
            ],
            [
                "kode_rule" => "G05",
                "nama_rule" => "Pernah melakukan kontak dengan penderita covid-19",
                "nilai_md" => 0.8
            ],
            [
                "kode_rule" => "G06",
                "nama_rule" => "keluar rumah tanpa mengunakan masker",
                "nilai_md" => 0.6
            ]
        ])->each(function ($g) {
            \App\Gejala::create($g);
        });
    }
}
