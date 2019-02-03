<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>
    Sistem Informasi Geografis - TPA
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--Fonts and icons-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />



</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="{{route('dashboard.admin')}}" class="simple-text logo-mini">
          ST
        </a>
        <a href="{{route('dashboard.admin')}}" class="simple-text logo-normal text-left">
          SIG-TPA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/marc.jpg">
            </div>
            <div class="user-info">
                <a href="#user" data-toggle="collapse" class="username">
                    <span>
                        Aufal Marom
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="user" style>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{route('profile.admin')}}" class="nav-link">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" data-toggle="collapse" href="#data" aria-expanded="false">
            <i class="material-icons">grid_on</i>
            <p>Data
                <b class="caret"></b>
            </p>
        </a>
            <div class="collapse" id="data" style>
                <ul class="nav">
                        <li class="nav-item">
                                <a class="nav-link " href="{{route('datakelerengan.admin')}}">
                                    <span class="sidebar-mini">DK</span>
                                    <span class="sidebar-normal">Data Kelerengan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datapenggunaanlahan.admin')}}">
                                    <span class="sidebar-mini">DPL</span>
                                    <span class="sidebar-normal">Data Penggunaan Lahan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datarawanbencanalongsor.admin')}}">
                                    <span class="sidebar-mini">DRBL</span>
                                    <span class="sidebar-normal">Data Rawan Bencana Longsor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datacurahhujan.admin')}}">
                                    <span class="sidebar-mini">DCH</span>
                                    <span class="sidebar-normal">Data Curah Hujan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datahidrogeologi.admin')}}">
                                    <span class="sidebar-mini">DH</span>
                                    <span class="sidebar-normal">Data Hidrogeologi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datajenistanah.admin')}}">
                                    <span class="sidebar-mini">DJT</span>
                                    <span class="sidebar-normal">Data Jenis Tanah</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('datarawanbencanabanjir.admin')}}">
                                    <span class="sidebar-mini">DBB</span>
                                    <span class="sidebar-normal">Data Rawan Bencana Banjir</span>
                                </a>
                            </li>
                </ul>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#smart" aria-expanded="false">
                <i class="material-icons">widgets</i>
                <p>SMART
                    <b class="caret"></b>
                </p>
            </a>
                <div class="collapse" id="smart" style>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parameterdata.admin')}}">
                                <span class="sidebar-mini">PD</span>
                                <span class="sidebar-normal">Parameter dan Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotparameter.admin')}}">
                                <span class="sidebar-mini">BP</span>
                                <span class="sidebar-normal">Bobot Parameter</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotrelatif.admin')}}">
                                <span class="sidebar-mini">BR</span>
                                <span class="sidebar-normal">Bobot Relatif</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faktorevaluasi.admin')}}">
                                <span class="sidebar-mini">FE</span>
                                <span class="sidebar-normal">Faktor Evaluasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotevaluasi.admin')}}">
                                <span class="sidebar-mini">BE</span>
                                <span class="sidebar-normal">Bobot Evaluasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ranking.admin')}}">
                                <span class="sidebar-mini">DCH</span>
                                <span class="sidebar-normal">Ranking</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('maps.admin')}}">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.admin')}}">
                    <i class="material-icons">people</i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
              <div class="navbar-minimize">
                  <button class="btn btn-just-icon btn-white btn-fab btn-round" id="minimizeSidebar">
                      <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                      <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                      <div class="ripple-container"></div>
                  </button>
              </div>
          <a class="navbar-brand"></a>
          </div>
          <button class="navbar-toggler toggled" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">


            <ul class="navbar-nav ">
              <li class=" nav-item dropdown ">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('logout')}}" class="dropdown-item" >Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
      <div>

      <footer class="footer">
        <div class="container-fluid">
            @yield('footer')
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  SIG-TPA
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            2018 made with <i class="material-icons">favorite</i> by
            Aufal Marom.
          </div>


        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!-- Notifications Plugin -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Material Dashboard -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <script src="../assets/js/style.js" type="text/javascript"></script>

</body>

</html>
