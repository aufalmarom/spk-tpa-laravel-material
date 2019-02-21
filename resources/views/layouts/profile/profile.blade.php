@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#change-password" aria-expanded="false" aria-controls="collapseExample">
            ubah password
        </button>
    </div>

    <div class="row">
        <div class="col-md-8">
                <div class="collapse" id="change-password">
                    <div class="card card-body">
                        <form method="POST" action="{{route('user.create')}}">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Password Lama</label>
                                    <input type="password" name="" class="form-control" required>
                                    {{-- kurang glyphicon --}}
                                    <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Password Baru</label>
                                    <input type="password" name="" class="form-control" required>
                                    {{-- kurang glyphicon --}}
                                    <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputEmail4" class="bmd-label-floating">Konfirmasi Password</label>
                                    <input type="password" name="" class="form-control" required>
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
            <h4 class="card-title">Edit Profile
            </h4>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('user.create')}}"">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" required>
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
                    <div class="form-group">
                    <label class="label">Date Birth</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Address</label>
                  <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label class="bmd-label-floating">About - Me Deskripsikan dirimu</label>
                    <textarea class="form-control" name="bio" rows="5" value="{{$data->bio}}" required></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-profile">
        <div class="card-avatar">
          <a href="#">
            <img class="img" src="../assets/img/faces/marc.jpg" />
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">{{$data->name}}</h4>
          <p class="card-description">
           {{$data->bio}}
          </p>
          <a href="#" class="btn btn-rose btn-round">full information</a>
        </div>
      </div>
    </div>
  </div>


@endsection
