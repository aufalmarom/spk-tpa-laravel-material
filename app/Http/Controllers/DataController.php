<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BobotParameter;
use App\BobotRelatif;
use App\DataKelerengan;
use App\DataPenggunaanLahan;
use App\DataRawanBencanaLongsor;
use App\DataCurahHujan;
use App\DataHidrogeologi;
use App\DataJenisTanah;
use App\DataRawanBencanaBanjir;


class DataController extends Controller
{
    //Maos(re:Read)
    public function MaosBobotParameter(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = BobotParameter::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'bobot_parameter' => $db
        ];

        return view('layouts/administrator/bobotparameter', $data);
    }
    public function MaosBobotRelatif(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = BobotParameter::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'bobot_parameter' => $db
        ];

        return view('layouts/administrator/bobotrelatif', $data);
    }



    public function MaosKelerengan(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataKelerengan::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_kelerengans' => $db
        ];

        return view('layouts/administrator/datakelerengan', $data);
    }

    public function MaosPenggunaanLahan(){


        $db = DataPenggunaanLahan::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_penggunaan_lahans' => $db
        ];

        return view('layouts/administrator/datapenggunaanlahan', $data);
    }

    public function MaosRawanBencanaLongsor(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataRawanBencanaLongsor::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_rbl' => $db
        ];

        return view('layouts/administrator/datarawanbencanalongsor', $data);
    }

    public function MaosCurahHujan(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataCurahHujan::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_ch' => $db
        ];

        return view('layouts/administrator/datacurahhujan', $data);
    }

    public function MaosHidrogeologi(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataHidrogeologi::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_h' => $db
        ];

        return view('layouts/administrator/datahidrogeologi', $data);
    }

    public function MaosJenisTanah(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataJenisTanah::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_jt' => $db
        ];

        return view('layouts/administrator/datajenistanah', $data);
    }

    public function MaosRawanBencanaBanjir(){

        //Query Builder
        // $db = DB::table('atributs')->get();

        //Eloquent ORM
        $db = DataRawanBencanaBanjir::get();

        $data =[
            'data' => 'iki data',
            'title' => 'Data',
            'data_rbb' => $db
        ];

        return view('layouts/administrator/datarawanbencanabanjir', $data);
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
    //     return view('layouts/administrator/updatedata');
    // }

}