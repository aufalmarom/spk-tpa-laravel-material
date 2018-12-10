<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataRawanBencanaBanjir;

class DataRawanBencanaBanjirController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataRawanBencanaBanjir::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_rbb' => $db
        ];

        return view('layouts/administrator/datarawanbencanabanjir', $data);
    }
}
