<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataJenisTanah;

class DataJenisTanahController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataJenisTanah::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_jt' => $db
        ];

        return view('layouts/administrator/datajenistanah', $data);
    }
}
