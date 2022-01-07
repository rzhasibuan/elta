<?php

namespace App\Http\Controllers;

use App\Gejala;
use App\Pasien;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();
        return view('diagnosa.index',[
            'subDiagnosa' => 'active',
            'title' => 'Diagnosa',
            'gejala' => $gejala
        ]);
    }

    public function store(Request $request)
    {
        $kode = $request->kode_rule;
        $persentase = $request->persentase_user;
        $data = Gejala::get()->toArray();;
        $user = [];

        for($i=0; $i < count($kode); $i++)
        {
            for($j=0; $j < count($kode); $j++){
                $user[$i]['kode_rule'] = $kode[$i];
                $user[$i]['persentase_user'] =  floatval($persentase[$i]);
            }
        }
//        return $user;
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
            $diagnosa ="negatif";
        }elseif ($hasilPakar < 85) {
            $diagnosa = "kemungkinan besar";
        }elseif ($hasilPakar >= 86) {
            $diagnosa = "positif";
        }

        $pasien = Pasien::where('pasien_id', Auth()->user()->id)->get()->first();
        $pasien->update([
            'value' => $hasilPakar,
            'status' => $diagnosa
        ]);
        return redirect()->route('home');
    }
}
