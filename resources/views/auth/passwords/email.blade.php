@extends('templates.login')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login" style="height: 10rem;">
          <form class="form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title">MASUKKAN EMAIL</h4>
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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                @endif

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>
                  </span>
                </div>

                <input type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>

            <div class="footer text-center">
              <button class="btn btn-rose btn-link btn-wd btn-lg">{{ __('Send Password Reset Link') }}</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>
@endsection
