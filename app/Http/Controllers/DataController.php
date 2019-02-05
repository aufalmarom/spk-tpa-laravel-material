<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Data;

class DataController extends Controller
{
    public function MaosKelerengan(){
        //Query Builder
        // $db = DB::table('atributs')->get();
        //Eloquent ORM
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datakelerengan', compact('db', 'db1'));
    }

    public function MaosPenggunaanLahan(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datapenggunaanlahan', compact('db', 'db1'));
    }

    public function MaosRawanBencanaLongsor(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datarawanbencanalongsor', compact('db', 'db1'));
    }

    public function MaosCurahHujan(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datacurahhujan', compact('db', 'db1'));
    }

    public function MaosHidrogeologi(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datahidrogeologi', compact('db', 'db1'));
    }

    public function MaosJenisTanah(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datajenistanah', compact('db', 'db1'));
    }

    public function MaosRawanBencanaBanjir(){
        $db = Data::get();
        $db1 = Kecamatan::get();

        return view('/layouts/data/datarawanbencanabanjir', compact('db', 'db1'));
    }




    //
    // public function create(Request $request){
    //     $data =[
    //         'daerah' => $request->daerah,
    //         'nilai' => $request->nilai
    //     ];

    //     Atribut::create($data);

    //     return redirect()->back()->with('success', 'Data berhasil ditambah');
    // }

    // public function delete($id){
    //     Atribut::find($id)->delete();

    //     return redirect()->back()->with('success', 'Data berhasil dihapus');
    // }

    // public function update(Request $request, $id){

    //     $data =[
    //         'daerah' => $request->daerah,
    //         'nilai' => $request->nilai
    //     ];

    //     Atribut::find($id)->update($data);

    //     return redirect()->back()->with('success', 'Data berhasil diupdate');
    // }

    // public function updatepage($id)
    // {
    //     return view('/updatedata');
    // }

}
