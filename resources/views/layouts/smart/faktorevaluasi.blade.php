@extends('templates.master')

@section('content')

    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    @endif

    <div class="col">
        <div class="row">
            <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#create-data" aria-expanded="false" aria-controls="collapseExample">
                create data
            </button>
        </div>

        <div class="row">
            <div class="col">
                <div class="collapse" id="create-data">
                    <div class="card card-body">
                        <form method="POST" action="#">
                            {{csrf_field()}}
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="bmd-label-floating">Daerah</label>
                                <input type="text" name="daerah" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4"class="bmd-label-floating">Nilai Klasifikasi</label>
                                <input type="number" name="nilai" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4"class="bmd-label-floating">Nilai Parameter</label>
                                <input type="number" name="nilai" class="form-control" required>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-rose">CREATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>

                    </div>
                    <h4 class="card-title">Faktor Evaluasi</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Kriteria</th>
                                <th class="text-center">D1</th>
                                <th class="text-center">D2</th>
                                <th class="text-center">D3</th>
                                <th class="text-center">D4</th>
                                <th class="text-center">D5</th>
                                <th class="text-center">D6</th>
                                <th class="text-center">D7</th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $array_daerah1 = array($db1[0]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[0]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[0]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[0]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[0]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[0]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[0]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah2 = array($db1[1]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[1]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[1]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[1]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[1]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[1]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[1]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah3 = array($db1[2]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[2]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[2]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[2]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[2]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[2]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[2]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah4 = array($db1[3]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[3]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[3]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[3]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[3]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[3]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[3]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah5 = array($db1[4]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[4]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[4]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[4]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[4]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[4]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[4]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah6 = array($db1[5]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[5]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[5]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[5]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[5]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[5]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[5]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah7 = array($db1[6]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[6]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[6]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[6]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[6]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[6]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[6]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah8 = array($db1[7]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[7]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[7]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[7]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[7]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[7]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[7]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah9 = array($db1[8]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[8]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[8]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[8]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[8]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[8]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[8]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah10 = array($db1[9]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[9]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[9]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[9]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[9]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[9]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[9]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);



                                $array_daerah11 = array($db1[10]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[10]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[10]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[10]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[10]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[10]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[10]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah12 = array($db1[11]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[11]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[11]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[11]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[11]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[11]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[11]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah13 = array($db1[12]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[12]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[12]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[12]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[12]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[12]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[12]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);

                                $array_daerah14 = array($db1[13]['nilai_klasifikasi_kelerengan']*$db2[0]->bobot,$db1[13]['nilai_klasifikasi_penggunaan_lahan']*$db2[1]->bobot,$db1[13]['nilai_klasifikasi_rawan_bencana_longsor']*$db2[2]->bobot,$db1[13]['nilai_klasifikasi_curah_hujan']*$db2[3]->bobot,$db1[13]['nilai_klasifikasi_hidrogeologi']*$db2[4]->bobot,$db1[13]['nilai_klasifikasi_jenis_tanah']*$db2[5]->bobot,$db1[13]['nilai_klasifikasi_rawan_bencana_banjir']*$db2[6]->bobot);



                                $array_nilai_klasifikasi_kelerengan = array();
                                $array_nilai_klasifikasi_penggunaan_lahan = array();
                                $array_nilai_klasifikasi_rawan_bencana_longsor = array();
                                $array_nilai_klasifikasi_curah_hujan = array();
                                $array_nilai_klasifikasi_hidrogeologi = array();
                                $array_nilai_klasifikasi_jenis_tanah = array();
                                $array_nilai_klasifikasi_rawan_bencana_banjir = array();
                                foreach($db1 as $data1){
                                    $array_nilai_klasifikasi_kelerengan[] = $data1->nilai_klasifikasi_kelerengan*$db2[0]->bobot;
                                    $array_nilai_klasifikasi_penggunaan_lahan[] = $data1->nilai_klasifikasi_penggunaan_lahan*$db2[1]->bobot;
                                    $array_nilai_klasifikasi_rawan_bencana_longsor[] = $data1->nilai_klasifikasi_rawan_bencana_longsor*$db2[2]->bobot;
                                    $array_nilai_klasifikasi_curah_hujan[] = $data1->nilai_klasifikasi_curah_hujan*$db2[3]->bobot;
                                    $array_nilai_klasifikasi_hidrogeologi[] = $data1->nilai_klasifikasi_hidrogeologi*$db2[4]->bobot;
                                    $array_nilai_klasifikasi_jenis_tanah[] = $data1->nilai_klasifikasi_jenis_tanah*$db2[5]->bobot;
                                    $array_nilai_klasifikasi_rawan_bencana_banjir[] = $data1->nilai_klasifikasi_rawan_bencana_banjir*$db2[6]->bobot;
                                }
                            @endphp
                            @foreach ($db1 as $pd_view)
                                @php
                                   if($no == 1){
                                       $min = min($array_daerah1);
                                   }
                                   elseif($no == 2){
                                        $min = min($array_daerah2);
                                   }
                                   elseif($no == 3){
                                        $min = min($array_daerah3);
                                   }
                                   elseif($no == 4){
                                        $min = min($array_daerah4);
                                   }
                                   elseif($no == 5){
                                        $min = min($array_daerah5);
                                   }
                                   elseif($no == 6){
                                        $min = min($array_daerah6);
                                   }
                                   elseif($no == 7){
                                        $min = min($array_daerah7);
                                   }
                                   elseif($no == 8){
                                        $min = min($array_daerah8);
                                   }
                                   elseif($no == 9){
                                        $min = min($array_daerah9);
                                   }
                                   elseif($no == 10){
                                        $min = min($array_daerah10);
                                   }
                                   elseif($no == 11){
                                        $min = min($array_daerah11);
                                   }
                                   elseif($no == 12){
                                        $min = min($array_daerah12);
                                   }
                                   elseif($no == 13){
                                        $min = min($array_daerah13);
                                   }
                                   elseif($no == 14){
                                        $min = min($array_daerah14);

                                   }

                                @endphp
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$pd_view->kecamatan->daerah}}</td>
                                    <td class="text-center">{{ (max($array_nilai_klasifikasi_kelerengan)-$pd_view->nilai_klasifikasi_kelerengan*$db2[0]->bobot)/(max($array_nilai_klasifikasi_kelerengan)-$min)}}</td>
                                    <td class="text-center">{{(max($array_nilai_klasifikasi_penggunaan_lahan)-$pd_view->nilai_klasifikasi_penggunaan_lahan*$db2[1]->bobot)/(max($array_nilai_klasifikasi_penggunaan_lahan)-$min)}}</td>
                                    <td class="text-center">{{(max($array_nilai_klasifikasi_rawan_bencana_longsor)-$pd_view->nilai_klasifikasi_rawan_bencana_longsor*$db2[2]->bobot)/(max($array_nilai_klasifikasi_rawan_bencana_longsor)-$min)}}</td>
                                    <td class="text-center">{{(max($array_nilai_klasifikasi_curah_hujan)-$pd_view->nilai_klasifikasi_curah_hujan*$db2[3]->bobot)/(max($array_nilai_klasifikasi_curah_hujan)-$min)}}</td>
                                    <td class="text-center">{{(max($array_nilai_klasifikasi_hidrogeologi)-$pd_view->nilai_klasifikasi_hidrogeologi*$db2[4]->bobot)/(max($array_nilai_klasifikasi_hidrogeologi)-$min)}}</td>
                                    <td class="text-center">{{(max($array_nilai_klasifikasi_jenis_tanah)-$pd_view->nilai_klasifikasi_jenis_tanah*$db2[5]->bobot)/(max($array_nilai_klasifikasi_jenis_tanah)-$min)}}</td>
                                    <td class="text-center"></td>
                                    {{-- <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Info" class="btn btn-rose btn-link btn-sm">
                                            <i class="material-icons">info</i>
                                        </button>
                                        <button href="{{url('/administrator/datapenggunaanlahan')}}{{"/".$dpl_view->id}}" type="button" rel="tooltip" title="Edit" class="btn btn-rose btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button rel="tooltip" type="button" title="Remove" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-delete{{$dpl_view->id}}">
                                            <i class="material-icons">clear</i>
                                            <div class="ripple-container"></div>
                                        </button>

                                        <div class="modal fade modal-mini modal-rose" id="modal-delete{{$dpl_view->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-small">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <p>Apakah anda akan menghapus data {{$$dpl_view->daerah}}</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
                                                        <a href="{{route('deletedatakelerengan.admin', $$dpl_view->id)}}" class="btn btn-success btn-link">Iya
                                                        <div class="ripple-container"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
