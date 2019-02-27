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
        $datas = DataAlternatif::where('id_parameter',$parameter)->get();
        $array_max = array();
        foreach ($datas as $data) {
            $array_max[] = NilaiKlasifikasiParameter($parameter,$data->nilai)*NilaiBobot($parameter);
        }
        return max($array_max);
    }
    function NilaiKlasifikasiParameter($parameter,$nilai){
        $datas = BobotParameter::where('id',$parameter)->first();
        if ($datas->sistem_klasifikasi == 'kriteria') {
            $array_data = NilaiKlasifikasiKriteria::where('id_parameter', $parameter)->get();
            if($array_data->first() == null){
                $nilai_return = "Nilai Tidak sesuai";
            }else{
                foreach($array_data as $data){
                    if($nilai > $data->batas_bawah  && $nilai < $data->batas_atas){
                        $nilai_return = $data->nilai;
                        break;
                    }
                    else{
                        $nilai_return = "Nilai Tidak sesuai";
                    }
                }
            }
        }
        else{
            $array_data = NilaiKlasifikasiKategori::where('id_parameter', $parameter)->get();
            if($array_data->first() == null){
                $nilai_return = "Nilai Tidak sesuai";
            }else{
                foreach($array_data as $data){
                    if($nilai == $data->kategori){
                        $nilai_return = $data->nilai;
                        break;
                    }
                    else{
                        $nilai_return = "Nilai Tidak sesuai";
                    }
                }
            }
        }
        return $nilai_return;
    }
    function MinDaerah($id){
        $datas = DataAlternatif::where('id_kecamatan',$id)->get();
        $array_min = array();
        foreach ($datas as $data) {
            $array_min[]= NilaiKlasifikasiParameter($data->id_parameter,$data->nilai)*NilaiBobot($data->id_parameter);
        }
        return min($array_min);
    }
    function FaktorEvaluasi($id, $parameter){
        if(MaxNilaiParameter($parameter)-MinDaerah($id) == 0){
            $nilai = 0;
            return $nilai;
        }
        else{
            $nilaiklasifikasi = MunculinNilaiKlasifikasi($parameter, $id);
            $nilai = (MaxNilaiParameter($parameter)-$nilaiklasifikasi*NilaiBobot($parameter))/(MaxNilaiParameter($parameter)-MinDaerah($id));
            return round($nilai*100, 2);
        }
    }

    function BobotRelatif($id_parameter, $bobot){
        $datas_sum = DB::table('bobot_parameters')->sum('bobot');

        $nilai = $bobot/$datas_sum;
        return $nilai;
    }

    function BobotEvaluasi($id){
        $datas = DataAlternatif::where('id_kecamatan', $id)->get();
        $nilai = 0;
        foreach($datas as $data){
            $nilai += FaktorEvaluasi($data->id_kecamatan,$data->id_parameter)*BobotRelatif($data->id_parameter,NilaiBobot($data->id_parameter));
        }
        return $nilai;
    }

    function NilaiKlasifikasi($id){
        $datas = BobotParameter::find($id);
        if ($datas->sistem_klasifikasi == 'kriteria') {
            $datas = NilaiKlasifikasiKriteria::where('id_parameter', $id)->get();
        }else{
            $datas = NilaiKlasifikasiKategori::where('id_parameter', $id)->get();
        }

        return $datas;
    }

    function MunculinNilaiKlasifikasi($parameter, $kecamatan)
    {
        $cek = BobotParameter::find($parameter);
        $nilai = DataAlternatif::where('id_parameter',$parameter)->where('id_kecamatan',$kecamatan)->first();

        if ($cek->sistem_klasifikasi == 'kategori') {
            $array_data = NilaiKlasifikasiKategori::where('id_parameter', $parameter)->get();
            if($array_data->first() == null){
                $nilai_return = "Nilai Tidak sesuai";
            }else{
                foreach($array_data as $data){
                    if($nilai->nilai == $data->kategori){
                        $nilai_return = $data->nilai;
                        break;
                    }
                    else{
                        $nilai_return = "Nilai Tidak sesuai";
                    }
                }
            }

        }else {
            $array_data = NilaiKlasifikasiKriteria::where('id_parameter', $parameter)->get();
            if($array_data->first() == null){
                $nilai_return = "Nilai Tidak sesuai";
            }else{
                foreach($array_data as $data){
                    if($nilai->nilai > $data->batas_bawah  && $nilai->nilai < $data->batas_atas){
                        $nilai_return = $data->nilai;
                        break;
                    }
                    else{
                        $nilai_return = "Nilai Tidak sesuai";
                    }
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
            $nilai = 'kategori';
        }else {
            $nilai = 'kriteria';
        }

        return $nilai;
    }


?>
