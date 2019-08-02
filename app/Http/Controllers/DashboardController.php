<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;

class DashboardController extends Controller
{
    public function index(){
        $datas = Kecamatan::get();
        $kecamatan = array();
        $data = array();
        foreach ($datas as $data1){
            $kecamatan[] = $data1->daerah;
            $data[] = BobotEvaluasi($data1->id);
        }
        $result = array_combine($kecamatan,$data);
        arsort($result);

        $title = 'Dashboard';
        return view('/layouts/dashboard/dashboard', [
            'title'=> $title
        ], compact('result'));
    }

    public function logout()
    {
        $session = array(
            'nama'  => session('nama'),
            'user'  => session('user'),
        );
        $hancur = session()->flush();
        return view('/layouts/home');
    }
}
