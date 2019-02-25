<?php
    use App\Data;
    use App\BobotParameter;
    use App\NilaiKlasifikasiKategori;
    use App\NilaiKlasifikasiKriteria;
    use App\DataAlternatif;

    function NilaiBobot($parameter){
        $datas = BobotParameter::get();
        foreach( $datas as $data){
            if($data->id == $parameter){
                $bobot = $data->bobot;
            }
        }
        return $bobot;
    }

    function MaxNilaiParameter($parameter){
        $datas = Data::get();
        $array_max = array();
        if($parameter == 1){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_kelerengan*NilaiBobot($parameter);
            }
        }
        elseif($parameter == 2){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_penggunaan_lahan*NilaiBobot($parameter);
            }
        }elseif($parameter == 3){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_rawan_bencana_longsor*NilaiBobot($parameter);
            }
        }
        elseif($parameter == 4){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_curah_hujan*NilaiBobot($parameter);
            }
        }
        elseif($parameter == 5){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_hidrogeologi*NilaiBobot($parameter);
            }
        }
        elseif($parameter == 6){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_jenis_tanah*NilaiBobot($parameter);
            }
        }
        else{
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_rawan_bencana_banjir*NilaiBobot($parameter);
            }
        }
        return max($array_max);
    }

    function MinDaerah($id){
        $datas = Data::get();
        $array_min = array();
        foreach ($datas as $data) {
            if ($data->id_kecamatan == $id) {
                $array_min[]= $data->nilai_klasifikasi_kelerengan*NilaiBobot(1);
                $array_min[]= $data->nilai_klasifikasi_penggunaan_lahan*NilaiBobot(2);
                $array_min[]= $data->nilai_klasifikasi_rawan_bencana_longsor*NilaiBobot(3);
                $array_min[]= $data->nilai_klasifikasi_curah_hujan*NilaiBobot(4);
                $array_min[]= $data->nilai_klasifikasi_hidrogeologi*NilaiBobot(5);
                $array_min[]= $data->nilai_klasifikasi_jenis_tanah*NilaiBobot(6);
                $array_min[]= $data->nilai_klasifikasi_rawan_bencana_banjir*NilaiBobot(7);
            }
        }
        return min($array_min);
    }
    function FaktorEvaluasi($id, $nilai, $parameter){
        if(MaxNilaiParameter($parameter)-MinDaerah($id) == 0){
            $nilai = 0;
            return $nilai;
        }
        else{
            $nilai = (MaxNilaiParameter($parameter)-$nilai*NilaiBobot($parameter))/(MaxNilaiParameter($parameter)-MinDaerah($id));
            return round($nilai, 2);
        }
    }

    function BobotRelatif($id_parameter, $bobot){
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        $nilai = $bobot/$datas_sum;
        return $nilai;
    }

    function BobotEvaluasi($id){
        $datas = Data::where('id_kecamatan', $id)->first();
        $nilai = FaktorEvaluasi($id,$datas->nilai_klasifikasi_kelerengan,1)*BobotRelatif(1,NilaiBobot(1))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_penggunaan_lahan,2)*BobotRelatif(2,NilaiBobot(2))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_rawan_bencana_longsor,3)*BobotRelatif(3,NilaiBobot(3))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_curah_hujan,4)*BobotRelatif(4,NilaiBobot(4))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_hidrogeologi,5)*BobotRelatif(5,NilaiBobot(5))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_jenis_tanah,6)*BobotRelatif(6,NilaiBobot(6))
        +FaktorEvaluasi($id,$datas->nilai_klasifikasi_rawan_bencana_banjir,7)*BobotRelatif(7,NilaiBobot(7));
        return $nilai;
    }

    function NilaiKlasifikasi($id){
        $datas = NilaiKlasifikasiKategori::where('id_parameter', $id)->get();
        if ($datas->first() == NULL) {
            $datas = NilaiKlasifikasiKriteria::where('id_parameter', $id)->get();
        }
        return $datas;
    }

    function MunculinNilaiKlasifikasi($parameter, $kecamatan)
    {
        $datas = NilaiKlasifikasiKriteria::where('id_parameter', $parameter)->first();
        $nilai = DataAlternatif::where('id_parameter',$parameter)->where('id_kecamatan',$kecamatan)->first();
        if ($datas == NULL) {
            $array_data = NilaiKlasifikasiKategori::where('id_parameter', $parameter)->get();
            foreach($array_data as $data){
                if($nilai->nilai == $data->kategori){
                    $nilai_return = $data->nilai;
                    break;
                }
            }
        }else {
            $array_data = NilaiKlasifikasiKriteria::where('id_parameter', $parameter)->get();
            foreach($array_data as $data){
                if($nilai->nilai > $data->batas_bawah  && $nilai->nilai < $data->batas_atas){
                    $nilai_return = $data->nilai;
                    break;
                }
            }
        }
        if ($nilai_return == NULL) {
            $nilai_return = 0;
        }
        return $nilai_return;
    }

?>
