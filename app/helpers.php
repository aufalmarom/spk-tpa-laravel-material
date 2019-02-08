<?php
    use App\Data;
    use App\BobotParameter;

    function NilaiBobot($nama){
        if($nama == "PenggunaanLahan" or $nama == "Hidrogeologi"){
            return 20;
        }
        elseif($nama == "RawanBencanaLongsor" or $nama == "CurahHujan")
            return 15;
        else {
            return 10;
        }
    }

    function MaxNilaiParameter($parameter){
        $datas = Data::get();
        $array_max = array();
        if ($parameter == "Kelerengan") {
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_kelerengan*NilaiBobot('Kelerengan');
            }
        }elseif($parameter == "PenggunaanLahan"){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_penggunaan_lahan*NilaiBobot('PenggunaanLahan');
            }
        }elseif($parameter == "RawanBencanaLongsor"){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_rawan_bencana_longsor*NilaiBobot('RawanBencanaLongsor');
            }
        }
        elseif($parameter == "CurahHujan"){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_curah_hujan*NilaiBobot('CurahHujan');
            }
        }elseif($parameter == "Hidrogeologi"){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_hidrogeologi*NilaiBobot('Hidrogeologi');
            }
        }elseif($parameter == "JenisTanah"){
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_jenis_tanah*NilaiBobot('JenisTanah');
            }
        }else{
            foreach ($datas as $data) {
                $array_max[] = $data->nilai_klasifikasi_rawan_bencana_banjir*NilaiBobot('RawanBencanaBanjir');
            }
        }

        return max($array_max);
    }

    function MinDaerah($id){
        $datas = Data::get();
        $array_min = array();
        foreach ($datas as $data) {
            if ($data->id_kecamatan == $id) {
                $array_min[]= $data->nilai_klasifikasi_kelerengan*NilaiBobot("Kelerengan");
                $array_min[]= $data->nilai_klasifikasi_penggunaan_lahan*NilaiBobot("PenggunaanLahan");
                $array_min[]= $data->nilai_klasifikasi_rawan_bencana_longsor*NilaiBobot("RawanBencanaLongsor");
                $array_min[]= $data->nilai_klasifikasi_curah_hujan*NilaiBobot("CurahHujan");
                $array_min[]= $data->nilai_klasifikasi_hidrogeologi*NilaiBobot("Hidrogeologi");
                $array_min[]= $data->nilai_klasifikasi_jenis_tanah*NilaiBobot("JenisTanah");
                $array_min[]= $data->nilai_klasifikasi_rawan_bencana_banjir*NilaiBobot("RawanBencanaBanjir");
            }

        }
        return min($array_min);
    }
    function FaktorEvaluasi($id, $nilai, $parameter){

        $nilai = (MaxNilaiParameter($parameter)-$nilai*NilaiBobot($parameter))/(MaxNilaiParameter($parameter)-MinDaerah($id)) ;
        return $nilai;
    }

    function BobotRelatif($id_parameter,$bobot){
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        $nilai = $bobot/$datas_sum;
        return $nilai;

    }



?>
