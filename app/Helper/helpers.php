<?php
    use App\Data;
    use App\BobotParameter;
    use App\NilaiKlasifikasi;
    use App\DataAlternatif;

    function NilaiBobot($parameter){
        $datas = BobotParameter::find($parameter);
        return $datas->bobot;
    }
    
    function BobotRelatif($parameter){
        $datas = BobotParameter::find($parameter);
        return @$datas->bobot_relatif;
    }

    function MaxNilaiParameter($parameter){
        $nilai_max = DB::table('data_alternatifs')->where('id_parameter', $parameter)->max('nilai_parameter_bobot');
        return $nilai_max;
    }
    
    function MinDaerah($id){
        $nilai_min = DB::table('data_alternatifs')->where('id_kecamatan', $id)->min('nilai_parameter_bobot');
        return $nilai_min;
    }

    function FaktorEvaluasi($id, $parameter){
        if(MaxNilaiParameter($parameter)-MinDaerah($id) == 0){
            $nilai = 0;
            return $nilai;
        }
        else{
            $nilai = (MaxNilaiParameter($parameter)-MunculinParameterNilaiBobot($parameter,$id))/(MaxNilaiParameter($parameter)-MinDaerah($id));
            return round($nilai*100, 2);
        }
    }

    function HitungUlangBobotRelatif()
    {
        $datas = BobotParameter::get();
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        foreach ($datas as $data) {
            $bobot_params = BobotParameter::find($data->id);
            $bobot_params->bobot_relatif = round($data->bobot/$datas_sum, 2);
            $bobot_params->save();
        }
    }

    function MunculinParameterNilai($parameter, $kecamatan)
    {
        $datas = DataAlternatif::where('id_parameter', $parameter)->where('id_kecamatan', $kecamatan)->first();
        return @$datas->nilai_klasifikasi;
    }

    function MunculinParameterNilaiBobot($parameter, $kecamatan)
    {
        $datas = DataAlternatif::where('id_parameter', $parameter)->where('id_kecamatan', $kecamatan)->first();
        return @$datas->nilai_parameter_bobot;
    }

    function BobotEvaluasi($id){
        $datas = DataAlternatif::where('id_kecamatan', $id)->get();
        $nilai = 0;
        foreach($datas as $data){
            $nilai += FaktorEvaluasi($data->id_kecamatan,$data->id_parameter)*BobotRelatif($data->id_parameter);
        }
        return $nilai;
    }

    function NilaiKlasifikasiParameter($id){
        $datas = NilaiKlasifikasi::where('id_parameter', $id)->get();

        return $datas;
    }

    function MunculinNilaiKlasifikasi($parameter, $nilai)
    {
        
        $array_data = NilaiKlasifikasi::where('id_parameter', $parameter)->get();
        if($array_data->first() == null){
            $nilai_return = "Nilai Tidak sesuai";
        }else{
            foreach($array_data as $data){
                if($nilai == $data->nilai_parameter){
                    $nilai_return = $data->nilai_klasifikasi;
                    break;
                }
                else{
                    $nilai_return = "Nilai Tidak sesuai";
                }
            }
        }

        return $nilai_return;
    }
    function MenuParameter(){
        $data = BobotParameter::get();

        return $data;
    }
    function HurufAwal($id){
        $data = explode(" ",$id);
        $acronym = "";
        foreach ($data as $w) {
            $acronym .= $w[0];
        }
        return $acronym;
    }

    function CekTabel($id)
    {
        $data = NilaiKlasifikasiKategori::where('id_parameter', $id)->first();
        if ($data != NULL) {
            $nilai = 'nilai_parameter';
        }else {
            $nilai = 'kriteria';
        }

        return $nilai;
    }


?>
