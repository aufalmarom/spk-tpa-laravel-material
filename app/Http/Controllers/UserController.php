<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actor;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){


        if(Auth::user()->role != "operator"){
            //Eloquent ORM
            $db = Actor::get();

            $data =[
                'data' => 'iki data',
                'title' => 'Data',
                'user' => $db
            ];

            return view('/layouts/user/user', $data);
        }
        else{
            return view('/notfound');
        }
        //Query Builder
        // $db = DB::table('atributs')->get();


    }

}
