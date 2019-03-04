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
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar.jpg">
        <div class="logo">
        <a href="{{route('dashboard.read')}}" class="simple-text logo-mini">
            ST
        </a>
        <a href="{{route('dashboard.read')}}" class="simple-text logo-normal text-left">
            SIG-TPA
        </a>
        </div>
        <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/fotoprofilakun.png">
            </div>
            <div class="user-info">
                <a href="#user" data-toggle="collapse" class="username">
                    <span>
                            {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="user" style>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{route('profile.read', ['id' => Auth::user()->id])}}" class="nav-link">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav navbar-nav nav-mobile-menu">
            <li class=" nav-item dropdown ">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('logout')}}" class="dropdown-item" >Log Out</a>
                </div>
            </li>
        </ul>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.read')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" href="#data-baru" aria-expanded="false">
                    <i class="material-icons">grid_on</i>
                        <p>Data
                            <b class="caret"></b>
                        </p>
                </a>
            <div class="collapse" id="data-baru" style>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('datakecamatan.read')}}">
                            <span class="sidebar-mini">DK</span>
                            <span class="sidebar-normal">Data Kecamatan</span>
                        </a>
                    </li>
                </ul>
                @php
                    $menu = MenuParameter();
                @endphp
                @foreach ($menu as $menuitem)
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('dataparameter.read', $menuitem->id)}}">
                            <span class="sidebar-mini">D{{HurufAwal($menuitem->parameter)}}</span>
                                <span class="sidebar-normal">Data {{$menuitem->parameter}}</span>
                            </a>
                    </ul>
                @endforeach



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
                            <a class="nav-link" href="{{route('nilaiklasifikasi.read')}}">
                                <span class="sidebar-mini">NK</span> 
                                <span class="sidebar-normal">Nilai Klasifikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotparameter.read')}}">
                                <span class="sidebar-mini">BP</span>
                                <span class="sidebar-normal">Bobot Parameter</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotrelatif.read')}}">
                                <span class="sidebar-mini">BR</span>
                                <span class="sidebar-normal">Bobot Relatif</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parameternilai.read')}}">
                                <span class="sidebar-mini">PD</span>
                                <span class="sidebar-normal">Parameter & Nilai</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parameternilaibobot.read')}}">
                                <span class="sidebar-mini">HP</span>
                                <span class="sidebar-normal">Parameter & Nilai Bobot</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faktorevaluasi.read')}}">
                                <span class="sidebar-mini">FE</span>
                                <span class="sidebar-normal">Faktor Evaluasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bobotevaluasi.read')}}">
                                <span class="sidebar-mini">BE</span>
                                <span class="sidebar-normal">Bobot Evaluasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ranking.read')}}">
                                <span class="sidebar-mini">DCH</span>
                                <span class="sidebar-normal">Ranking</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{route('maps')}}">
                <i class="material-icons">location_ons</i>
                <p>Maps</p>
            </a>
            </li>
            <?php
            if (Auth::user()->role != "operator"){
            ?>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.read')}}">
                    <i class="material-icons">people</i>
                    <p>Users</p>
                </a>
            </li>
            <?php } ?>
        </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top bg-rose">
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
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
                <a href="{{url('/dashboard')}}">
                    SIG-TPA
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
<script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

</body>

</html>
