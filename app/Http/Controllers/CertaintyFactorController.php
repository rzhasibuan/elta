<?php

namespace App\Http\Controllers;

use afrizalmy\CertaintyFactor\Cf\CertaintyFactor;
use App\Gejala;
use Illuminate\Http\Request;

class CertaintyFactorController extends Controller
{
    public function certainFakar()
    {
        $arr = [];

        $arr[0]['kode_rule'] = 'G01';
        $arr[0]['nama_rule'] = 'Demam suhu di atas 38';
        $arr[0]['nilai_md'] = 0.8;

        $arr[1]['kode_rule'] = 'G02';
        $arr[1]['nama_rule'] = 'Nyeri telan';
        $arr[1]['nilai_md'] = 0.6;

        $arr[2]['kode_rule'] = 'G03';
        $arr[2]['nama_rule'] = 'Batuk kering';
        $arr[2]['nilai_md'] = 0.4;


        $arr[3]['kode_rule'] = 'G04';
        $arr[3]['nama_rule'] = 'Sesak nafas';
        $arr[3]['nilai_md'] = 1;

        $arr[4]['kode_rule'] = 'G05';
        $arr[4]['nama_rule'] = 'Pernah melakukan kontak dengan penderita covid-19';
        $arr[4]['nilai_md'] = 0.8;

        $arr[5]['kode_rule'] = 'G06';
        $arr[5]['nama_rule'] = 'Keluar rumah tanpa mengunakan masker';
        $arr[5]['nilai_md'] = 0.6;


        return $arr;
    }

    public function cfuser()
    {
        $arr = [];

        $arr[0]['kode_rule'] = "G01";
        $arr[0]['persentase_user'] = 0;

        $arr[1]['kode_rule'] = "G02";
        $arr[1]['persentase_user'] = 0;

        $arr[2]['kode_rule'] = "G03";
        $arr[2]['persentase_user'] = 0.2;

        $arr[3]['kode_rule'] = "G04";
        $arr[3]['persentase_user'] = 0.2;

        $arr[4]['kode_rule'] = "G05";
        $arr[4]['persentase_user'] = 0.4;

        $arr[5]['kode_rule'] = "G06";
        $arr[5]['persentase_user'] = 1;

        return $arr;
    }

    public function proses()
    {
//        $db = Gejala::get()->toArray();;
//        $input = $this->cfuser();
//        $hasil = CertaintyFactor::ProsesHitung($db, $input);
//
//        header('Content-Type: application/json');
//        echo json_encode($hasil);

//        sistem pendukung keputusan
//        $hasil = sqrt(pow(1,2)
//            + pow(1,2)
//            + pow(1,2)
//            + pow(3,2)
//            + pow(1,2)
//            + pow(1,2)
//            + pow(2,2)
//            + pow(3,2)
//            + pow(3,2)
//            + pow(1,2)
//        );

//        $bagi = 1 / $hasil;
//        return $bagi;
        $data = Gejala::get()->toArray();;
        $user = $this->cfuser();

        $hasil_combine = [];


        for ($i=0;  $i < count($data); $i++)
        {
            $kombin = [];

            for($j=0; $j < count($data); $j++)
            {
                if ($data[$j]['kode_rule'] == $user[$i]['kode_rule']) {
                    for($k=0; $k < count($data); $k++)
                    {
                        $hasilkali = $user[$k]['persentase_user'] * $data[$k]['nilai_md'];
                        array_push($kombin, $hasilkali);
                    }
                }
            }
//            return $kombin;
            $hasilcombin = 0;
            for ($z=0; $z < count($kombin); $z++)
            {
                if ($z == 0) {
                    $hasilcombin = $kombin[$z] + $kombin[$z+1] * (1.0 - $kombin[$z]);

                    if (count($kombin)-1 == 1 ) {
                        $hasil_combine[$i]["nama_rule"] = $data[$i]['nama_rule'];
                        $hasil_combine[$i]["hasil_perhitungan"] = $hasilcombin;
                        break;
                    }
                } else {
                    if ($z+1 == count($kombin)) {
                        $hasil_combine[$i]["nama_rule"] = $data[$i]['nama_rule'];
                        $hasil_combine[$i]["hasil_perhitungan"] = $hasilcombin;
                        break;
                    }
                    $hasilcombin = $hasilcombin + $kombin[$z+1] * ( 1.0 - $hasilcombin );
                }
            }
            $hasilPakar =  floor($hasilcombin * 100);

        }

        if($hasilPakar < 40) {
            echo $hasilPakar. "%". "negatif";
        }elseif ($hasilPakar < 85) {
            echo $hasilPakar. "%". "kemungkinan besar";
        }elseif ($hasilPakar > 86) {
            echo $hasilPakar. "%". " positif";
        }

    }
}
