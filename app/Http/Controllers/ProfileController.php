<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($id){
        $title = 'Profile';
        $data = User::find($id);

        return view('/layouts/profile/profile', [
            'title'=> $title
        ], compact('data'));

    }
}
