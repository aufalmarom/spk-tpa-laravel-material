<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataHidrogeologi;

class DataHidrogeologiController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataHidrogeologi::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_h' => $db
        ];

        return view('layouts/administrator/datahidrogeologi', $data);
    }
}
