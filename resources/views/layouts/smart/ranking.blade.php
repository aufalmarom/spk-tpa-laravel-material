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
            <div class="card col-sm-6">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>

                    </div>
                    <h4 class="card-title">Ranking</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Daerah</th>
                                <th class="text-center">Bobot Evaluasi</th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;

                            @endphp
                            @foreach($result as $x => $x_value)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td class="text-center">{{$x}}</td>
                                    <td class="text-center">{{$x_value}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
