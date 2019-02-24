@extends('templates.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{$message}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#bobotparameter" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="collapse" id="bobotparameter">
                <div class="card card-body">
                    <h4>Nilai Bobot Parameter = <i>w<sub>j</sub></i></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if(Auth::user()->role != "operator")
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#create-data" aria-expanded="false" aria-controls="collapseExample">
            tambah parameter baru
        </button>
        @endif
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="collapse" id="create-data">
                <div class="card card-body">
                    <form method="POST" action="{{route('bobotparameter.create')}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="bmd-label-floating">Parameter</label>
                                <input type="text" name="parameter" class="form-control" required>
                                <input type="hidden" name="id" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4"class="bmd-label-floating">Bobot</label>
                                <input type="text" name="bobot" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rose">buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">Bobot Parameter</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Parameter</th>
                            <th class="text-center">Bobot</th>
                            <th class="text-center">Pembuat</th>
                            @if (Auth::user()->role != "operator")
                                <th class="text-center">Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $bp_view)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td>{{$bp_view->parameter}}</td>
                                <td class="text-center">{{$bp_view->bobot}}</td>
                                <td class="text-center">{{$bp_view->user->name}}</td>
                                @if (Auth::user()->role != "operator")


                                <td class="td-actions text-center">
                                    <button type="button" rel="tooltip" title="Edit" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-edit{{$bp_view->id}}">
                                    <i class="material-icons">edit</i>
                                    </button>

                                    <div class="modal fade modal-mini modal-rose" id="modal-edit{{$bp_view->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Edit Data Parameter</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="POST" action="{{route('bobotparameter.create')}}">
                                                        {{csrf_field()}}
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4" class="bmd-label-floating">Parameter</label>
                                                            <input type="text" name="parameter" class="form-control" value="{{$bp_view->parameter}}" required>
                                                            <input type="hidden" name="id" value="{{$bp_view->id}}" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4"class="bmd-label-floating">Bobot</label>
                                                                <input type="text" name="bobot" class="form-control" value="{{$bp_view->bobot}}" required>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-xl btn-rose text-right">simpan</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button rel="tooltip" type="button" title="Remove" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-delete{{$bp_view->id}}">
                                    <i class="material-icons">clear</i>
                                    <div class="ripple-container"></div>
                                    </button>

                                    <div class="modal fade modal-mini modal-rose" id="modal-delete{{$bp_view->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-small">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                </div>
                                                <div class="modal-body">
                                                <p>Apakah anda akan menghapus data {{$bp_view->daerah}}</p>
                                                </div>

                                                <form method="POST" action="{{route('bobotparameter.delete')}}">
                                                        {{csrf_field()}}
                                                    <div class="modal-footer justify-content-center">
                                                    <div style="display:none">
                                                        <input  type="text" name="id" value="{{$bp_view->id}}">
                                                    </div>
                                                        <button class="btn btn-primary" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-danger"> Iya</button>
                                                        <div class="ripple-container"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
