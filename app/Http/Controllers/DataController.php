<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Data;
use App\BobotParameter;
use App\DataAlternatif;
use App\NilaiKlasifikasiKategori;
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
        $model->delete();
        $dataAlt = DataAlternatif::where('id_kecamatan',$post['id'])->get();
        foreach ($dataAlt as $item) {
            $datadel = DataAlternatif::find($item->id);
            $datadel->delete();
        }
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
        $check = DataAlternatif::where('id_parameter', $id)->first();
        $datas1 = NilaiKlasifikasiKategori::where('id_parameter', $id)->get();

        if ($check == NULL) {
            $datas = Kecamatan::get();
        }else {
            $datas = DB::table('kecamatans')->select('kecamatans.daerah','data_alternatifs.id as id','data_alternatifs.id_kecamatan','data_alternatifs.nilai')->leftjoin('data_alternatifs','kecamatans.id','=','data_alternatifs.id_kecamatan')->where('data_alternatifs.id_parameter', $id)->get();
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

        $cektabel = CekTabel($id);
        if ($cektabel == 'kategori') {
            return view('/layouts/data/tambaheditdataparameterkategori', compact('datas', 'datas1', 'parameter','dataAdd'));
        }else {
            return view('/layouts/data/tambaheditdataparameterkriteria', compact('datas', 'datas1', 'parameter','dataAdd'));
        }

    }

    public function TambahEditDataParameter(Request $request)
    {
        $post = $request->request->all();
        for ($i=0; $i <count($post['id']) ; $i++) {
            if($post['id'][$i] == null){
                $simpan = new DataAlternatif();
            }
            else {
                $simpan = DataAlternatif::find($post['id'][$i]);
            }
            $simpan->id_parameter = $post['parameter'];
            $simpan->nilai = $post['nilai'][$i];
            $simpan->id_kecamatan = $post['id_kecamatan'][$i];
            $simpan->created_by = Auth::user()->id;
            $simpan->save();
        }


        return redirect(route('dataparameter.read',$post['parameter']));
    }

}
