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
                    <h4 class="card-title">Bobot Evaluasi D1</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $totalFE = 0;
                                @endphp
                                <td class="text-center">1</td>
                                <td>Kelerengan</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_kelerengan, 'Kelerengan');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_kelerengan, 'Kelerengan')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[0]->id, $datas2[0]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_kelerengan, 'Kelerengan') * BobotRelatif($datas2[0]->id, $datas2[0]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Penggunaan Lahan</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_penggunaan_lahan, 'PenggunaanLahan');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_penggunaan_lahan, 'PenggunaanLahan')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[1]->id, $datas2[1]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_penggunaan_lahan, 'PenggunaanLahan') * BobotRelatif($datas2[1]->id, $datas2[1]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Rawan Bencana Longsor</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_longsor, 'RawanBencanaLongsor');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_longsor, 'RawanBencanaLongsor')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[2]->id, $datas2[2]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_longsor, 'RawanBencanaLongsor') * BobotRelatif($datas2[2]->id, $datas2[2]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Curah Hujan</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_curah_hujan, 'CurahHujan');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_curah_hujan, 'CurahHujan')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[3]->id, $datas2[3]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_curah_hujan, 'CurahHujan') * BobotRelatif($datas2[3]->id, $datas2[3]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Hidrogeologi</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_hidrogeologi, 'Hidrogeologi');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_hidrogeologi, 'Hidrogeologi')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[4]->id, $datas2[4]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_hidrogeologi, 'Hidrogeologi') * BobotRelatif($datas2[4]->id, $datas2[4]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Jenis Tanah</td>
                                <td class="text-center">
                                    @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_jenis_tanah, 'JenisTanah');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_jenis_tanah, 'JenisTanah')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[5]->id, $datas2[5]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_jenis_tanah, 'JenisTanah') * BobotRelatif($datas2[5]->id, $datas2[5]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Rawan Bencana Banjir</td>
                                <td class="text-center">
                                     @php
                                        $totalFE += FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_banjir, 'RawanBencanaBanjir');
                                    @endphp
                                    {{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_banjir, 'RawanBencanaBanjir')}}</td>
                                <td class="text-center">{{BobotRelatif($datas2[6]->id, $datas2[6]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_banjir, 'RawanBencanaBanjir') * BobotRelatif($datas2[6]->id, $datas2[6]->bobot)}}</td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td>Total</td>
                                <td class="text-center">
                                    {{ $totalFE }}
                                </td>
                                <td class="text-center">{{BobotRelatif($datas2[6]->id, $datas2[6]->bobot)}}</td>
                                <td class="text-center">{{FaktorEvaluasi($datas1->id_kecamatan, $datas1->nilai_klasifikasi_rawan_bencana_banjir, 'RawanBencanaBanjir') * BobotRelatif($datas2[6]->id, $datas2[6]->bobot)}}</td>
                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D2</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D2</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D3</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D3</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D4</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D4</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D5</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D5</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D6</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D6</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D7</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D7</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D8</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D8</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D9</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D10</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D11</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D12</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D13</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Bobot Evaluasi D14</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi D1</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($db as $bp_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$bp_view->parameter}}</td>
                                    <td class="text-center">{{$bp_view->bobot}}</td> --}}
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
                                {{-- </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>
            </div>



        </div>

@endsection
