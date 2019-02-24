@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#faktorevaluasi" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="collapse" id="faktorevaluasi">
                <div class="card card-body">
                    <h3><i>u<sub>ij</sub></i> = <i>Max P<sub>j</sub></i> - <i>A<sub>i</sub></i>  /  <i>Max P<sub>j</sub></i> - <i>Min A<sub>i</sub></i></h3>
                    <h4>Keterangan :</h4>
                    <h5>- <i>u<sub>ij</sub></i> : Nilai Faktor Evaluasi</h5>
                    <h5>- <i>Max P<sub>j</sub></i> : Nilai Maksimal setiap Kolom Parameter </h5>
                    <h5>- <i>A<sub>i</sub></i> : Nilai Hasil Perkalian Nilai Data Alternatif dengan Bobot Parameternya</h5>
                    <h5>- <i>Min A<sub>i</sub></i> : Nilai Minimal setiap Baris Data Alternatif</h5>
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
                    <h4 class="card-title">Faktor Evaluasi</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Kriteria</th>
                                <th class="text-center">P1</th>
                                <th class="text-center">P2</th>
                                <th class="text-center">P3</th>
                                <th class="text-center">P4</th>
                                <th class="text-center">P5</th>
                                <th class="text-center">P6</th>
                                <th class="text-center">P7</th>
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
                                    <td class="text-center">{{ round(FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_kelerengan,1), 2)}}</td>
                                    <td class="text-center">{{ round(FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_penggunaan_lahan,2), 2)}}</td>
                                    <td class="text-center">{{ FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_rawan_bencana_longsor,3)}}</td>
                                    <td class="text-center">{{ FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_curah_hujan,4)}}</td>
                                    <td class="text-center">{{ FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_hidrogeologi,5)}}</td>
                                    <td class="text-center">{{ round(FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_jenis_tanah,6), 2)}}
                                    <td class="text-center">
                                        @if (MaxNilaiParameter(7)-MinDaerah($pd_view->id_kecamatan) == 0)
                                            {{0}}
                                        @else
                                        {{ FaktorEvaluasi($pd_view->id_kecamatan,$pd_view->nilai_klasifikasi_rawan_bencana_banjir,7)}}
                                        @endif

                                    </td>
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
