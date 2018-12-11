<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class UserController extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = Actor::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'user' => $db
        ];

        return view('layouts/administrator/user', $data);
    }

}
