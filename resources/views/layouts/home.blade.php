<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Sistem Informasi Geografis - TPA</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />

</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{url('/')}}">
          SIG - TPA </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://bappedapemalang.wordpress.com/" target="_blank" data-original-title="Website Bappeda Pemalang">
                <i class="material-icons">language</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/bappedapemalang" target="_blank" data-original-title="Twitter Bappeda Pemalang">
              <i class="fa fa-twitter"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/pemalangbappeda" target="_blank" data-original-title="Instagram Pemalang Bappeda">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/pemalang.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="title">Sistem Informasi Geografis Tempat Pembuangan Akhir</h1>
          <h4>Dirancang untuk menentukan lokasi terbaik dibangunnya sebuah Tempat Pembuangan Akhir di suatu daerah demi membuat lingkungan persampahan yang lebih terkelola.</h4>
          <br>
          <br>
            <a href="{{ url('/login')}}" class="btn btn-danger btn-raised btn-lg">
            <i class="fa"></i> Masuk Platform
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">MARI BICARA PRODUK</h2>
            <h5 class="description">Sistem Informasi Geografis ini dapat menghandle fungsi-fungsi CRUD(Create, Read, Update & Delete), pengolahan menggunakan metode SMART(Simple Multi Attribute Rating Technique) dan juga akan menampilkan hasil olahan tersebut pada Carto Map</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">map</i>
                </div>
                <h4 class="info-title">Carto Map</h4>
                <p>Hasil pengolahan data akan ditampilkan dalam bentuk map dengan marker</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Pengguna Terverifikasi</h4>
                <p>Pengguna yang akan mengakses di sini hanya akan dapat dibuat oleh Administrator</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="info-title">SMART</h4>
                <p>Pengolahan Data menggunakan metode SMART(Simple Multi Attribute Rating Technique)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="{{url('/')}}">
              SIG-TPA
            </a>
          </li>
        </ul>
      </nav>
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
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>
