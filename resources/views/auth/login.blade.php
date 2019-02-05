@extends('templates.login')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login" style="height: 17rem;">
          <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title">MASUK DI SINI</h4>
              {{-- <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div> --}}
            </div>
            <div class="card-body">

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Email..." name="email" required autofocus>
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="Password..." name="password" required>
              </div>

              <p class="description text-center"><a href="{{ route('password.request') }}">Lupa Password?</a></p>

            </div>

            <div class="footer text-center">
              <button class="btn btn-rose btn-link btn-wd btn-lg">{{ __('Login') }}</button>
            </div>

          </form>
        </div>
      </div>
    </div>
@endsection
