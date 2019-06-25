<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Sistem Pendukung Keputusan - TPA</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />

</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{url('/')}}">
          SPK - TPA </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      {{-- <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
        </ul>
      </div> --}}

    </div>
  </nav>

  <div class="page-header header-filter" style="background-image: url('../assets/img/sampah.jpeg'); background-size: cover; background-position: top center;">
    @yield('content')
  </div>


    <footer class="footer">
      <div class="container">

        {{-- <nav class="float-left">
          <ul>
            <li>
              <a href="{{url('/')}}">
                Home
              </a>
            </li>
          </ul>
        </nav> --}}

        <div class="copyright float-right">
          &copy;
          {{-- <script>
            document.write(new Date().getFullYear())
          </script>  --}}
          2018 made with <i class="material-icons">favorite</i> by
          <a href="#" target="_blank">Aufal Marom</a>
        </div>
      </div>
    </footer>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>

  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>
