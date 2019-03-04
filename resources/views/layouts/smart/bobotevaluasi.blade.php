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
                    <h3><i>U<sub>i</sub></i> = &Sigma;<i>W<sub>j</sub></i> * <i>u<sub>ij</sub></i></h3>
                    <h4>Keterangan :</h4>
                    <h5>- <i>U<sub>i</sub></i> : Nilai Bobot Evaluasi</h5>
                    <h5>- <i>W<sub>j</sub></i> : Nilai Nilai Bobot Relatif</h5>
                    <h5>- <i>u<sub>ij</sub></i> : Nilai Faktor Evaluasi</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        @php
            $no_daerah = 1;
        @endphp
        @foreach ($datas as $data)
        <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">subject</i>
                    </div>
                <h4 class="card-title">Bobot Evaluasi {{$data->daerah}} (A{{$no_daerah}})</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Parameter</th>
                                <th class="text-center">Faktor Evaluasi A{{$no_daerah}}</th>
                                <th class="text-center">Bobot Relatif </th>
                                <th class="text-center">Bobot Evaluasi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $totalFE = 0;
                                $totalBR = 0;
                                $totalBE = 0;
                            @endphp
                            @for ($i = 0; $i < count($datas1); $i++)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$datas1[$i]['parameter']}}</td>
                                    <td class="text-center">
                                        @php
                                            $FaktorEvaluasi = FaktorEvaluasi($data->id, $datas1[$i]['id']);
                                            $totalFE += $FaktorEvaluasi;
                                        @endphp
                                        {{$FaktorEvaluasi}}</td>
                                    <td class="text-center">
                                            @php
                                                $BobotRelatif = $datas1[$i]['bobot_relatif'];
                                                $totalBR += $BobotRelatif;
                                            @endphp
                                            {{$BobotRelatif}}</td>
                                    <td class="text-center">
                                            @php
                                                $Total = $FaktorEvaluasi * $BobotRelatif;
                                                $totalBE += $Total;
                                            @endphp
                                            {{$Total}}</td>
                                </tr>
                            @endfor


                            <tr>
                                <td class="text-center"></td>
                                <td>Total</td>
                                <td class="text-center">
                                    {{ $totalFE }}</td>
                                <td class="text-center">
                                    {{ $totalBR }}</td>
                                <td class="text-center">{{ $totalBE }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @php
            $no_daerah++;
        @endphp
        @endforeach




    </div>

@endsection
