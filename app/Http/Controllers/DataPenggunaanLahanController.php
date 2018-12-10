<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPenggunaanLahan;

class DataPenggunaanLahanController extends Controller
{
    public function index(){


        $db = DataPenggunaanLahan::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_penggunaan_lahans' => $db
        ];

        return view('layouts/administrator/datapenggunaanlahan', $data);
    }
}
