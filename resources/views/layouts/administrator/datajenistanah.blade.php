@extends('layouts/master')

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
                    <h4 class="card-title">Data Jenis Tanah</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Daerah</th>
                                <th>Nilai Klasifikasi</th>
                                <th>Nilai Parameter</th>
                                {{-- <th class="text-right">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data_jt as $jt_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$jt_view->daerah}}</td>
                                    <td>{{$jt_view->nilai_klasifikasi}}</td>
                                    <td>{{$jt_view->nilai_parameter}}</td>
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
    </div>
@endsection
