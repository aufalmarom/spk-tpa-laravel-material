<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $title = 'Profile';
        return view('/layouts/profile/profile', [
            'title'=> $title
        ]);
    }
}
