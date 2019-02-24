@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#parameternilaibobot" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="collapse" id="parameternilaibobot">
                <div class="card card-body">
                    <h3><i>A<sub>i</sub></i> = <i>A</i> * <i>w<sub>ij</sub></i></h3>
                    <h4>Keterangan :</h4>
                    <h5>- <i>A<sub>i</sub></i> : Hasil Perkalian Nilai Data Alternatif dengan Bobot Parameternya</h5>
                    <h5>- <i>A</i> : Nilai Data Alternatif</h5>
                    <h5>- <i>w<sub>j</sub></i> : Nilai Bobot Parameter</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>

                </div>
                <h4 class="card-title">Parameter & Nilai Bobot</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Daerah</th>
                            <th class="text-center">Kelerengan</th>
                            <th class="text-center">Penggunaan Lahan</th>
                            <th class="text-center">Rawan Bencana Longsor</th>
                            <th class="text-center">Curah Hujan</th>
                            <th class="text-center">Hidrogeologi</th>
                            <th class="text-center">Jenis Tanah</th>
                            <th class="text-center">Rawan Bencana Banjir</th>
                            {{-- <th class="text-right">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($db1 as $pd_view)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td>{{$pd_view->kecamatan->daerah}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_kelerengan*$db2[0]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_penggunaan_lahan*$db2[1]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_rawan_bencana_longsor*$db2[2]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_curah_hujan*$db2[3]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_hidrogeologi*$db2[4]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_jenis_tanah*$db2[5]->bobot}}</td>
                                <td class="text-center">{{$pd_view->nilai_klasifikasi_rawan_bencana_banjir*$db2[6]->bobot}}</td>
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
