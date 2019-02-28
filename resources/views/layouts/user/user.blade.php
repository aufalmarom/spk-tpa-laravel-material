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

    <div class="col">
        <div class="row">
            @if(Auth::user()->role == "administrator")
            <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#create-user" aria-expanded="false" aria-controls="collapseExample">
                    tambah user baru
            </button>
            @endif
        </div>

        <div class="row">
            <div class="col-8">
                <div class="collapse" id="create-user">
                    <div class="card card-body">
                        <form method="POST" action="{{route('user.create')}}">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="bmd-label-floating">Nama</label>
                                    <input type="text" name="name" class="form-control" required>
                                    <input type="hidden" name="id">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="bmd-label-floating">E-Mail</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <label>Role</label>
                                <div class="form-group">
                                    <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="administrator"> Administrator
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="manager"> Manager
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="operator"> Operator
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose">tambah</button>
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
                    <h4 class="card-title">Data User</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>E-Mail</th>
                                <th>Role</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $u_view)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$u_view->name}}</td>
                                    <td>{{$u_view->email}}</td>
                                    <td>{{$u_view->role}}</td>
                                    <td class="td-actions text-center">

                                        <button type="button" rel="tooltip" title="Detail Informasi" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-info{{$u_view->id}}">
                                            <i class="material-icons">info</i>
                                        </button>

                                        <div class="modal fade modal-rose" id="modal-info{{$u_view->id}}"role="dialog" ">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-center">
                                                        <h3>Detail Informasi Data User</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="text-center">Nama : {{$u_view->name}} </h5>
                                                        <h5 class="text-center"> E-Mail : {{$u_view->email}} </h5>
                                                        <h5 class="text-center"> Role : {{$u_view->role}} </h5>
                                                        <h5 class="text-center">Tanggal Lahir : {{$u_view->tanggal_lahir}} </h5>
                                                        <h5 class="text-center"> Alamat : {{$u_view->alamat}} </h5>
                                                        <h5 class="text-center"> Bio : {{$u_view->bio}} </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if(Auth::user()->role == "administrator")
                                        <button type="button" rel="tooltip" title="Edit" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-edit{{$u_view->id}}">
                                            <i class="material-icons">edit</i>
                                        </button>

                                        <div class="modal fade modal-mini modal-rose" id="modal-edit{{$u_view->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-center">
                                                        <h3>Edit Data User</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('user.create')}}">
                                                            {{csrf_field()}}
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputEmail4" class="bmd-label-floating">Nama</label>
                                                                <input type="text" name="name" class="form-control" value="{{$u_view->name}}" required>
                                                                <input type="hidden" name="id" value="{{$u_view->id}}" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputPassword4" class="bmd-label-floating">E-Mail</label>
                                                                    <input type="email" name="email" class="form-control" value="{{$u_view->email}}" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-xl btn-rose text-right">simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <button rel="tooltip" type="button" title="Hapus" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-delete{{$u_view->id}}">
                                            <i class="material-icons">clear</i>
                                            <div class="ripple-container"></div>
                                        </button>

                                        <div class="modal fade modal-rose" id="modal-delete{{$u_view->id}}"role="dialog" ">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-center">
                                                        <h3>Hapus Data User</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center">Apakah anda akan menghapus {{$u_view->name}} ?</p>
                                                    </div>

                                                    <form method="POST" action="{{route('user.delete')}}">
                                                            {{csrf_field()}}
                                                        <div class="modal-footer justify-content-center">
                                                        <div style="display:none">
                                                            <input  type="text" name="id" value="{{$u_view->id}}">
                                                        </div>
                                                            <button class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                            <button type="submit" class="btn btn-danger"> Iya</button>
                                                            <div class="ripple-container"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

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
