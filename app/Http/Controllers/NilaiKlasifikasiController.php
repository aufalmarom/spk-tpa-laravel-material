<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiKlasifikasiKriteria;
use App\NilaiKlasifikasiKategori;
use App\BobotParameter;

class NilaiKlasifikasiController extends Controller
{
    public function MaosNilaiKlasifikasi()
    {
        $datas = BobotParameter::get();

        return view('layouts/data/nilaiklasifikasi', compact('datas'));
    }
}
