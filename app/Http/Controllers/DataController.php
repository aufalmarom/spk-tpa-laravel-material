<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Data;
use App\DataAlternatif;
use App\NilaiKlasifikasiKategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    public function MaosKelerengan(){
        //Query Builder
        //$db = DB::table('atributs')->get();
        //Eloquent ORM
        $datas = DataAlternatif::where('id_parameter', 1)->get();

        return view('/layouts/data/datakelerengan', compact('datas'));
    }

    public function MaosTambahEditKelerengan()
    {
        $datas = DB::table('kecamatans')->leftjoin('data_alternatifs','kecamatans.id','=','data_alternatifs.id_kecamatan')->where('data_alternatifs.id_parameter',1)->get();

        return view('/layouts/data/tambaheditkelerengan', compact('datas'));
    }

    public function TambahEditKelerengan(Request $request)
    {
        $post= $request->request->all();

        for ($i=0; $i < count($post['id']); $i++) {

            if ($post['id'][$i] != NULL) {
                $simpan = DataAlternatif::find($post['id'][$i]);
            }else {
                $simpan = new DataAlternatif();
                $simpan->id_kecamatan = $post['id_kecamatan'][$i];
                $simpan->id_parameter = 1;
            }
            $simpan->nilai = $post['nilai'][$i];
            $simpan->created_by = Auth::user()->id;
            $simpan->save();
        }

        return redirect(route('datakelerengan.read'));

    }

    public function MaosPenggunaanLahan()
    {
        $datas = DataAlternatif::where('id_parameter', 2)->get();

        return view('/layouts/data/datapenggunaanlahan', compact('datas'));
    }

    public function MaosTambahEditPenggunaanLahan(Request $request)
    {
        $check = DataAlternatif::where('id_parameter', 2)->first();
        $datas1 = NilaiKlasifikasiKategori::where('id_parameter', 2)->get();
        if ($check == NULL) {
            $datas = Kecamatan::get();
        }else {
        $datas = DB::table('kecamatans')->leftjoin('data_alternatifs','kecamatans.id','=','data_alternatifs.id_kecamatan')->where('data_alternatifs.id_parameter',2)->get();
        }

        return view('/layouts/data/tambaheditpenggunaanlahan', compact('datas', 'datas1'));
    }

    public function TambahEditPenggunaanLahan(Request $request)
    {
        $post= $request->request->all();

        for ($i=0; $i < count($post['id']); $i++) {

            if ($post['id'][$i] != NULL) {
                $simpan = DataAlternatif::find($post['id'][$i]);
            }else {
                $simpan = new DataAlternatif();
                $simpan->id_kecamatan = $post['id_kecamatan'][$i];
                $simpan->id_parameter = 2;
            }
            $simpan->nilai = $post['nilai'][$i];
            $simpan->created_by = Auth::user()->id;
            $simpan->save();
        }

        return redirect(route('datapenggunaanlahan.read'));

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
