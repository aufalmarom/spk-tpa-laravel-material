<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Data;
use App\NilaiKlasifikasiKriteria;
use App\NilaiKlasifikasiKategori;
use App\BobotParameter;
use App\Kecamatan;

class SMARTController extends Controller
{

    public function MaosParameterNilai(){

        $datas= Data::get();

        return view('/layouts/smart/parameternilai', compact('datas'));
    }

    public function MaosBobotParameter(){
        $datas = BobotParameter::get();

        return view('/layouts/smart/bobotparameter', compact('datas'));
    }

    public function NdamelBobotParameter(Request $request){
        $post = $request->request->all();
        if($post['id'] == null){
            $simpan = new BobotParameter();
        }
        else {
            $simpan = BobotParameter::find($post['id']);
        }
        $simpan->parameter = $post['parameter'];
        $simpan->bobot = $post['bobot'];
        $simpan->created_by = Auth::user()->id;
        $simpan->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function HapusBobotParameter(Request $request){
        $post = $request->request->all();
        $model = BobotParameter::find($post['id']);
        $model->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }


    public function MaosParameterNilaiBobot()
    {
        $db1 = Data::get();
        $db2 = BobotParameter::get();

        return view('/layouts/smart/parameternilaibobot', compact('db1', 'db2'));
    }

    public function MaosBobotRelatif()
    {
        $db = BobotParameter::get();
        $db1 = DB::table('bobot_parameters')->sum('bobot');

        return view('/layouts/smart/bobotrelatif', compact('db', 'db1'));
    }

    public function MaosFaktorEvaluasi()
    {
        $db1 = Data::get();
        $db2 = BobotParameter::get();

        return view('/layouts/smart/faktorevaluasi', compact('db1', 'db2'));
    }

    public function MaosBobotEvaluasi()
    {
        $datas2 = BobotParameter::get();
        $datas = Data::get();

        return view('/layouts/smart/bobotevaluasi', compact('datas2','datas'));
    }

    public function MaosRanking()
    {
        $datas = Kecamatan::get();
        $kecamatan = array();
        $data = array();
        foreach ($datas as $data1){
            $kecamatan[] = $data1->daerah;
            $data[] = BobotEvaluasi($data1->id);
        }
        $result = array_combine($kecamatan,$data);
        arsort($result);
        return view('/layouts/smart/ranking', compact('result'));
    }

}
