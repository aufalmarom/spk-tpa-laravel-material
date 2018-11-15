<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index(){
        $title = 'Profile';
        return view('layouts/administrator/profile', [
            'title'=> $title
        ]);
    }
}
