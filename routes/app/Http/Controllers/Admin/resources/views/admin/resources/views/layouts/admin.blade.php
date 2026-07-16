<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | BAJESUMA TRAVEL & PAKET</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <!-- AdminLTE -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>

        body{
            font-size:14px;
        }

        .brand-link{
            background:#d60000;
            color:#fff !important;
        }

        .main-sidebar{
            background:#1f2937;
        }

        .nav-sidebar .nav-link{
            color:#ffffff;
        }

        .nav-sidebar .nav-link.active{
            background:#dc3545;
        }

        .content-wrapper{
            background:#f4f6f9;
        }

        .navbar{
            border-bottom:3px solid #dc3545;
        }

    </style>

    @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">

            <li class="nav-item">

                <a class="nav-link" data-widget="pushmenu" href="#">
                    <i class="fas fa-bars"></i>
                </a>

            </li>

        </ul>

        <ul class="navbar-nav ms-auto">

            <li class="nav-item">

                <span class="nav-link">

                    <i class="fas fa-user-circle"></i>

                    {{ Auth::user()->name }}

                </span>

            </li>

        </ul>

    </nav>


    <!-- Sidebar -->

    <aside class="main-sidebar elevation-4">

        <a href="{{ route('admin.dashboard') }}" class="brand-link text-center">

            <span class="brand-text fw-bold">

                BAJESUMA

            </span>

        </a>


        <div class="sidebar">

            <nav class="mt-3">

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

                    <li class="nav-item">

                        <a href="{{ route('admin.dashboard') }}" class="nav-link">

                            <i class="fas fa-gauge"></i>

                            <p> Dashboard </p>

                        </a>

                    </li>

                    <li class="nav-header">
                        MASTER DATA
                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.armada.index') }}" class="nav-link">

                            <i class="fas fa-bus"></i>

                            <p>Armada</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.driver.index') }}" class="nav-link">

                            <i class="fas fa-id-card"></i>

                            <p>Driver</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.kota.index') }}" class="nav-link">

                            <i class="fas fa-city"></i>

                            <p>Kota</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.rute.index') }}" class="nav-link">

                            <i class="fas fa-route"></i>

                            <p>Rute</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.jadwal.index') }}" class="nav-link">

                            <i class="fas fa-calendar-alt"></i>

                            <p>Jadwal</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.tarif.index') }}" class="nav-link">

                            <i class="fas fa-money-bill-wave"></i>

                            <p>Tarif</p>

                        </a>

                    </li>

                    <li class="nav-header">
                        TRAVEL
                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.booking.index') }}" class="nav-link">

                            <i class="fas fa-ticket-alt"></i>

                            <p>Booking Travel</p>

                        </a>

                    </li>

                    <li class="nav-header">
                        PAKET
                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.paket.index') }}" class="nav-link">

                            <i class="fas fa-box"></i>

                            <p>Paket</p>

                        </a>

                    </li>

                    <li class="nav-header">
                        USER
                    </li>

                    <li class="nav-item">

                        <a href="{{ route('admin.user.index') }}" class="nav-link">

                            <i class="fas fa-users"></i>

                            <p>User</p>

                        </a>

                    </li>

                    <li class="nav-item mt-3">

                        <form action="{{ route('logout') }}" method="POST">

                            @csrf

                            <button class="btn btn-danger w-100">

                                <i class="fas fa-sign-out-alt"></i>

                                Logout

                            </button>

                        </form>

                    </li>

                </ul>

            </nav>

        </div>

    </aside>


    <!-- Content -->

    <div class="content-wrapper">

        @yield('content')

    </div>


    <!-- Footer -->

    <footer class="main-footer">

        <strong>

            BAJESUMA TRAVEL & PAKET

        </strong>

        <div class="float-end">

            Version 1.0

        </div>

    </footer>

</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script>

$(function () {

    $('.datatable').DataTable({
        responsive:true,
        autoWidth:false
    });

});

</script>

@stack('js')

</body>
</html>
