<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(){
        $title = 'Maps';
        return view('layouts/maps/maps', [
            'title' => $title
        ]);
    }
}
