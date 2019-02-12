<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\NilaiKlasifikasiKriteria;
use App\NilaiKlasifikasiKategori;
use App\BobotParameter;

class NilaiKlasifikasiController extends Controller
{
    public function MaosNilaiKlasifikasi()
    {
        $datas = NilaiKlasifikasiKriteria::get();
        $datas1 = NilaiKlasifikasiKategori::get();
        $datas2 = BobotParameter::get();

        return view('layouts/data/nilaiklasifikasi', compact('datas', 'datas1', 'datas2'));
    }
}
