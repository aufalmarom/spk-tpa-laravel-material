@extends('layouts/master')

@section('content')

    <div class="row">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#change-password" aria-expanded="false" aria-controls="collapseExample">
            change password
        </button>
    </div>

    <div class="row">
        <div class="col-md-8">
                <div class="collapse" id="change-password">
                    <div class="card card-body">
                        <form method="POST" action="">
                            {{csrf_field()}}
                            <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4" class="bmd-label-floating">New Password</label>
                                <input type="password" name="" class="form-control" required>
                                {{-- kurang glyphicon --}}
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                            </div>

                            </div>
                            <button type="submit" class="btn btn-primary">CREATE</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>

    <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Edit Profile</h4>
          <p class="card-category">Editen profilmu</p>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">Full Name</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">E-Mail</label>
                    <input type="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="label">Date Birth</label>
                    <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">ID Card(KTP/SIM)</label>
                    <input type="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Address</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label class="bmd-label-floating">About - Me Deskripsikan dirimu</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-profile">
        <div class="card-avatar">
          <a href="#pablo">
            <img class="img" src="../assets/img/faces/marc.jpg" />
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-category text-gray">Tukang Sinau</h6>
          <h4 class="card-title">Aufal Marom</h4>
          <p class="card-description">
            Kuat ga kuat, opo-opo koe kudu ngomong karo Gusti-Mu
          </p>
          <a href="#" class="btn btn-primary btn-round">full information</a>
        </div>
      </div>
    </div>
  </div>


@endsection
