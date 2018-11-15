<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        $title = 'Users';
        return view('layouts/administrator/user', [
            'title'=> $title
        ]);
    }
}
