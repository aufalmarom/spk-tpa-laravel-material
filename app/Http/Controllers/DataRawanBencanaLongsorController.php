<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataRawanBencanaLongsor;

class DataRawanBencanaLongsorController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataRawanBencanaLongsor::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_rbl' => $db
        ];

        return view('layouts/administrator/datarawanbencanalongsor', $data);
    }
}
