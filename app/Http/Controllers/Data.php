<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Atribut;

class Data extends Controller
{
    public function index(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = Atribut::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'atributs' => $db
        ];

        return view('layouts/administrator/data', $data);
    }

    public function create(Request $request){
        $data =[
            'daerah' => $request->daerah,
            'nilai' => $request->nilai
        ];

        Atribut::create($data);

        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function delete($id){
        Atribut::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function update(Request $request, $id){

        $data =[
            'daerah' => $request->daerah,
            'nilai' => $request->nilai
        ];

        Atribut::find($id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function updatepage($id)
    {
        return view('layouts/administrator/updatedata');
    }


}
