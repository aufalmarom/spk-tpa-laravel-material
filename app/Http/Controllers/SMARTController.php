<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\DataAlternatif;
use App\NilaiKlasifikasi;
use App\BobotParameter;
use App\Kecamatan;

class SMARTController extends Controller
{
    public function MaosNilaiKlasifikasi(){

        $datas = BobotParameter::get();
        return view('/layouts/smart/nilaiklasifikasi', compact('datas'));
    }

    public function EditNilaiKlasifikasi($id){

        $datas = NilaiKlasifikasi::where('id_parameter', $id)->get();
        $datas1 = BobotParameter::find($id);

        return view('/layouts/smart/editnilaiklasifikasi', compact('datas','datas1'));
    }

    public function NdamelNilaiKlasifikasi(Request $request){
        $post = $request->request->all();
        if (isset($post['id'])) {
            for($i=0; $i < count($post['id']);$i++){
                if($post['id'][$i] == null){
                    $simpan = new NilaiKlasifikasi();
                    $simpan->id_parameter = $post['parameter'];
                }
                else{
                 $simpan = NilaiKlasifikasi::where('id',$post['id'][$i])->first();
                    if ($post['nilai_parameter'][$i] != $post['kategorilama'][$i]) {
                        $dataAlternatif = DataAlternatif::where('id_parameter', $post['parameter'])->where('nilai_parameter', $post['kategorilama'][$i])->get();
                        if ($dataAlternatif->first() != NULL) {
                            foreach ($dataAlternatif as $data2) {
                                $data3 = DataAlternatif::find($data2->id);
                                $data3->nilai_parameter = $post['nilai_parameter'][$i];
                                $data3->save();
                            }
                        }
                    }
                }
                            
                
                $simpan->nilai_klasifikasi = $post['nilai_klasifikasi'][$i];
                $simpan->nilai_parameter = $post['nilai_parameter'][$i];
                $simpan->created_by = Auth::user()->id;
                $simpan->save();
            }
    
            $dataAlternatifNK = DataAlternatif::where('id_parameter', $post['parameter'])->get();
            if ($dataAlternatifNK->first() != NULL) {
                foreach ($dataAlternatifNK as $data) {
                    $datas = DataAlternatif::find($data->id);
                    $datas->nilai_klasifikasi = MunculinNilaiKlasifikasi($data->id_parameter, $data->nilai_parameter);
                    $datas->save(); 
                }
            }
            
            return redirect(route('nilaiklasifikasi.read'));
            
        }else{
            return redirect(route('editnilaiklasifikasi.read', $post['parameter']));
        }
        
    }

    public function HapusNilaiKlasifikasi(Request $request){
        $post = $request->request->all();
        $model = NilaiKlasifikasi::find($post['id']);        
        $dataAlternatif = DataAlternatif::where('nilai_parameter', $model->nilai_parameter)->where('id_parameter', $model->id_parameter)->get();
        if ($dataAlternatif->first() != NULL) {
            foreach ($dataAlternatif as $data) {
                $datas = DataAlternatif::find($data->id);
                $datas->delete();
            }
        }
        
        $model->delete();

        return redirect(route('nilaiklasifikasi.read'));
    }

    public function MaosParameterNilai(){

        $datas= Kecamatan::get();
        $datas1 = BobotParameter::get();
        return view('/layouts/smart/parameternilai', compact('datas','datas1'));
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

        $dataAlternatif = DataAlternatif::where('id_parameter', $simpan->id)->get();
        if ($dataAlternatif->first() != NULL) {
            foreach ($dataAlternatif as $data) {
                $baru = DataAlternatif::find($data->id);
                $baru->nilai_parameter_bobot = $data->nilai_klasifikasi*$post['bobot'];
                $baru->save();   
            }
        }
            
        HitungUlangBobotRelatif();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function HapusBobotParameter(Request $request){
        $post = $request->request->all();
        $model = BobotParameter::find($post['id']);
        $baru = DataAlternatif::where('id_parameter', $post['id'])->get();
        if ($baru->first() != NULL) {
            foreach ($baru as $data) {
                $baru1 = DataAlternatif::find($data->id);
                $baru1->delete();
            }
        }
        $nilai_klasifikasi = NilaiKlasifikasi::where('id_parameter', $post['id'])->get(); 
        if ($nilai_klasifikasi->first() != NULL) {
            foreach ($nilai_klasifikasi as $nilai) {
                $nilai2 = NilaiKlasifikasi::find($nilai->id);
                $nilai2->delete();
            }
        }
        $model->delete();

        HitungUlangBobotRelatif();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function MaosParameterNilaiBobot()
    {
        $datas= Kecamatan::get();
        $datas1 = BobotParameter::get();

        return view('/layouts/smart/parameternilaibobot', compact('datas', 'datas1'));
    }

    public function MaosBobotRelatif()
    {
        $db = BobotParameter::get();
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        return view('/layouts/smart/bobotrelatif', compact('db', 'datas_sum'));
    }

    public function MaosFaktorEvaluasi()
    {
        $datas= Kecamatan::get();
        $datas1 = BobotParameter::get();

        return view('/layouts/smart/faktorevaluasi', compact('datas', 'datas1'));
    }

    public function MaosBobotEvaluasi()
    {
        $datas= Kecamatan::get();
        $datas1 = BobotParameter::get();

        return view('/layouts/smart/bobotevaluasi', compact('datas1','datas'));
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
        $result = array_combine($kecamatan, $data);
        arsort($result);
        return view('/layouts/smart/ranking', compact('result'));
    }
}
