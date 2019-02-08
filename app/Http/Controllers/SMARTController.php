<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;
use App\BobotParameter;

class SMARTController extends Controller
{
    public function MaosParameterNilai(){

        $db = Data::get();

        return view('/layouts/smart/parameternilai', compact('db'));
    }

    public function MaosBobotParameter(){
        $db = BobotParameter::get();

        return view('/layouts/smart/bobotparameter', compact('db'));
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
        $datas1 = Data::where("id_kecamatan",1)->first();
        $datas2 = BobotParameter::get();

        return view('/layouts/smart/bobotevaluasi', compact('datas1', 'datas2'));
    }

    public function MaosRanking()
    {

        return view('/layouts/smart/ranking');
    }




}
