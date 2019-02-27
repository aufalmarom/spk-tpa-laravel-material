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
                                @foreach ($datas as $item)
                                    <th class="text-center">{{$item->daerah}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;

                            @endphp
                            @foreach ($datas1 as $pd_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$pd_view->parameter}}</td>
                                    @for ($i = 0; $i < count($datas); $i++)
                                        <td class="text-center">{{FaktorEvaluasi($datas[$i]['id'], $pd_view->id)}}</td>
                                    @endfor
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
