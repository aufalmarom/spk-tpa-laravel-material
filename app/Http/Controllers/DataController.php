<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Data;
use App\BobotParameter;
use App\DataAlternatif;
use App\NilaiKlasifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    public function MaosDataKecamatan(){
        $datas = Kecamatan::get();

        return view('/layouts/data/datakecamatan', compact('datas'));
    }

    public function NdamelDataKecamatan(Request $request){
        $post = $request->request->all();
        if($post['id'] == null){
            $simpan = new Kecamatan();
        }
        else {
            $simpan = Kecamatan::find($post['id']);
        }
        $simpan->daerah = $post['daerah'];
        $simpan->created_by = Auth::user()->id;
        $simpan->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function HapusDataKecamatan(Request $request){
        $post = $request->request->all();
        $model = Kecamatan::find($post['id']);
        $baru = DataAlternatif::where('id_kecamatan', $post['id'])->get();
        if ($baru->first() != NULL) {
            foreach ($baru as $data) {
                $baru1 = DataAlternatif::find($data->id);
                $baru1->delete();
            }
        }
        $model->delete();
        
        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function MaosDataParameter($id){
        $parameter = BobotParameter::find($id);
        $datas = DataAlternatif::where('id_parameter', $id)->get();

        return view('/layouts/data/dataparameter', compact('datas','parameter'));
    }

    public function MaosTambahEditDataParameter($id)
    {
        $parameter = BobotParameter::find($id);
        $checkNilaiKlasifikasi  = NilaiKlasifikasi::where('id_parameter',$id)->get();
        if($checkNilaiKlasifikasi->first() != null){
            $check = DataAlternatif::where('id_parameter', $id)->first();
            $datas1 = NilaiKlasifikasi::where('id_parameter', $id)->get();
    
            if ($check == NULL) {
                $datas = Kecamatan::get();
                $dataAdd = array();
            }else {
                $datas = DB::table('kecamatans')->select('kecamatans.daerah','data_alternatifs.id as id','data_alternatifs.id_kecamatan','data_alternatifs.nilai_parameter')->leftjoin('data_alternatifs','kecamatans.id','=','data_alternatifs.id_kecamatan')->where('data_alternatifs.id_parameter', $id)->get();
                $kecamatan = array();
                foreach ($datas as $data){
                    $kecamatan[] = $data->id_kecamatan;
                }
                $dataAdd = Kecamatan::where(
                    function($query) use ($kecamatan){
                        $query->whereNotIn('id',$kecamatan);
                    }
    
                )->get();
            }
    
            
            return view('/layouts/data/tambaheditdataparameter', compact('datas', 'datas1', 'parameter','dataAdd'));
        }
        else{
            return redirect(route('editnilaiklasifikasi.read', $id));
        }
        
    }

    public function TambahEditDataParameter(Request $request)
    {
        $post = $request->request->all();
        $kecamatan = Kecamatan::get();
        if ($kecamatan->first() == NULL) {
            return redirect(route('datakecamatan.read'));
        }else{
            for ($i=0; $i <count($post['id']) ; $i++) {
                if($post['id'][$i] == null){
                    $simpan = new DataAlternatif();
                
                }
                else {
                    $simpan = DataAlternatif::find($post['id'][$i]);
                }
                $simpan->id_parameter = $post['parameter'];
                $simpan->nilai_parameter = $post['nilai_parameter'][$i];
                $simpan->nilai_klasifikasi = MunculinNilaiKlasifikasi($post['parameter'],$post['nilai_parameter'][$i]);
                $simpan->id_kecamatan = $post['id_kecamatan'][$i];
                $simpan->nilai_parameter_bobot = $simpan->nilai_klasifikasi*NilaiBobot($post['parameter']);
                $simpan->created_by = Auth::user()->id;
                $simpan->save();
            }
    
    
            return redirect(route('dataparameter.read',$post['parameter']));

        }
        
    }

}
