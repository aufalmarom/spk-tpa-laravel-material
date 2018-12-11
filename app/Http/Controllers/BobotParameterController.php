<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BobotParameter;

class BobotParameterController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = BobotParameter::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'bobot_parameter' => $db
        ];

        return view('layouts/administrator/bobotparameter', $data);
    }
}