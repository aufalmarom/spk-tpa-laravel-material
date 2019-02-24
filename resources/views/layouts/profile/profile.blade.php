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
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#change-password" aria-expanded="false" aria-controls="collapseExample">
            ubah password
        </button>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="collapse" id="change-password">
                <div class="card card-body">
                    <form method="POST" action="{{route('profile.changepassword')}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4" class="bmd-label-floating">Password Lama</label>
                                <input type="password" name="password_lama" class="form-control" required>
                                <input type="hidden" name="id" value="{{$data->id}}" required>
                                {{-- kurang glyphicon --}}
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4" class="bmd-label-floating">Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" required>
                                {{-- kurang glyphicon --}}
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4" class="bmd-label-floating">Konfirmasi Password</label>
                                <input type="password" name="konfirmasi_password" class="form-control" required>
                                {{-- kurang glyphicon --}}
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rose">ubah password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">contacts</i>

            </div>
            <h4 class="card-title">Edit Profil
            </h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('user.create')}}"">
              {{csrf_field()}}
              {{-- <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="picture-container">
                            <div class="picture">
                            <img src="../../assets/img/fotoprofil.png" class="picture-src"">
                            <input type="file" name="" value="">
                            </div>
                            <h6 class="description text-center">Pilih Foto Profil</h6>
                        </div>
                    </div>
              </div> --}}
              <br><br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{$data->name}}" required>
                        <input type="hidden" name="id" value="{{$data->id}}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">E-Mail</label>
                        <input type="email" name="email" class="form-control" value="{{$data->email}}" required>
                        </div>
                    </div>
                </div>



              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group bmd-form-group is-filled">
                      <label class="label">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}" required>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                      <label class="bmd-label-floating">Bio</label>
                      <textarea class="form-control" name="bio" rows="5" required>{{$data->bio}}</textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
