@extends('templates.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assessment</i>

                    </div>
                    <h4 class="card-title">Hasil Ranking dari Metode SMART</h4>

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Peringkat</th>
                                            <th class="text-center">Daerah</th>
                                            <th class="text-center">Bobot Evaluasi</th>
                                            {{-- <th class="text-center">Warna</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                        foreach($result as $x => $x_value){
                                        ?>
                                            <tr>
                                                <td class="text-center">{{$no}}</td>
                                                <td class="text-center">{{$x}}</td>
                                                <td class="text-center">{{$x_value}}</td>
                                                {{-- <td class="text-center"> </td> --}}
                                            </tr>
                                        <?php
                                            if($no == 7){
                                                break;
                                            }
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-7 ml-auto mr-auto">
                            <div id="worldMap" >
                                <div class="jvectormap-container" style="background-color: transparent"></div>
                                <iframe width="100%" height="400" frameborder="0" src="https://aufalmarom.carto.com/builder/696bc91d-9c17-4868-b22b-84d4007cbf23/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
