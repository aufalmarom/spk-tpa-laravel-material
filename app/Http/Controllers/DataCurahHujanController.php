<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataCurahHujan;

class DataCurahHujanController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataCurahHujan::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_ch' => $db
        ];

        return view('layouts/administrator/datacurahhujan', $data);
    }
}
