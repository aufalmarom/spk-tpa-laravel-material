@extends('layouts/master')

@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    @endif

    <div class="col">
        <div class="row">
            <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#create-user" aria-expanded="false" aria-controls="collapseExample">
                create user
            </button>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="collapse" id="create-user">
                    <div class="card card-body">
                        <form method="POST" action="">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Username</label>
                                    <input type="text" name="daerah" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Password</label>
                                    <input type="password" name="daerah" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Full Name</label>
                                    <input type="text" name="daerah" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">ID Card(KTP/SIM)</label>
                                    <input type="number" name="daerah" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose">CREATE</button>
                        </form>
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
                    <h4 class="card-title">CRUD biasa -
                            <small class="category">iki data percobaan</small>
                    </h4>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Full Name</th>
                                <th>ID Card</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($data_kelerengan as $data_kelerengan_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$data_kelerengan_view->daerah}}</td>
                                    <td>{{$data_kelerengan_view->nilai}}</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Info" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">info</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button href="{{route('deletedata.admin', $data_kelerengan_view->id)}}" rel="tooltip" type="button" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">clear</i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach --}}

                            <div class="row">
                                <div class="col">
                                    <div class="collapse" id="update-form">
                                        <div class="card card-body">
                                            <form>
                                                {{csrf_field()}}
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Daerah</label>
                                                    <input type="text" name="daerah" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Nilai</label>
                                                    <input type="number" name="nilai" class="form-control">
                                                </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
