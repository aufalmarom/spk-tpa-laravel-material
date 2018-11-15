<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Data extends Controller
{
    public function index(){
        $data = 'iki data';
        $title = 'Data';
        $db = DB::table('data_kelerengan')->get();
        return view('layouts/administrator/data', [
            'title' => $title,
            'data_kelerengan' => $db
        ]);
    }

    public function create(Request $request){
        $insert_db = DB::table('data_kelerengan')->insert([
            'daerah' => $request->daerah,
            'nilai' => $request->nilai
        ]);
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function delete($id){
        $delete_db = DB::table('data_kelerengan')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function update(){
        $update_db = DB::table('data_kelerengan')->where('id', $id)->update();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }


}
