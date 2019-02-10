<?php
    use App\Data;
    use App\BobotParameter;

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
            $nilai = (MaxNilaiParameter($parameter)-$nilai*NilaiBobot($parameter))/(MaxNilaiParameter($parameter)-MinDaerah($id)) ;
            return round($nilai, 2);
        }
    }

    function BobotRelatif($id_parameter,$bobot){
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        $nilai = $bobot/$datas_sum;
        return $nilai;
    }



?>
