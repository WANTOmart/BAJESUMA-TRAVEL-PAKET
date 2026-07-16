@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">
                    <i class="fas fa-tachometer-alt text-danger"></i>
                    Dashboard BAJESUMA
                </h1>
            </div>

            <div class="col-sm-6 text-right">
                <span class="text-muted">
                    {{ now()->format('d F Y H:i') }}
                </span>
            </div>

        </div>

    </div>
</div>


<section class="content">

<div class="container-fluid">

    {{-- Statistik --}}

    <div class="row">

        <div class="col-lg-3 col-6">

            <div class="small-box bg-primary">

                <div class="inner">
                    <h3>{{ $bookingToday }}</h3>
                    <p>Booking Hari Ini</p>
                </div>

                <div class="icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>

                <a href="{{ route('admin.booking.index') }}" class="small-box-footer">
                    Detail
                    <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>



        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">

                <div class="inner">
                    <h3>{{ $packageToday }}</h3>
                    <p>Paket Hari Ini</p>
                </div>

                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>

                <a href="{{ route('admin.paket.index') }}" class="small-box-footer">
                    Detail
                    <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>



        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">

                <div class="inner">
                    <h3>Rp {{ number_format($incomeToday,0,',','.') }}</h3>
                    <p>Pendapatan Hari Ini</p>
                </div>

                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>

                <a href="#" class="small-box-footer">
                    Detail
                    <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>



        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">

                <div class="inner">
                    <h3>{{ $totalUser }}</h3>
                    <p>Total User</p>
                </div>

                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>

                <a href="{{ route('admin.user.index') }}" class="small-box-footer">
                    Detail
                    <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>

    </div>



    {{-- Statistik Kedua --}}

    <div class="row">

        <div class="col-md-6">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        Data Master
                    </h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th>Total Armada</th>
                            <td>{{ $totalArmada }}</td>
                        </tr>

                        <tr>
                            <th>Total Driver</th>
                            <td>{{ $totalDriver }}</td>
                        </tr>

                        <tr>
                            <th>Total Booking</th>
                            <td>{{ $totalBooking }}</td>
                        </tr>

                        <tr>
                            <th>Total Paket</th>
                            <td>{{ $totalPackage }}</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>



        <div class="col-md-6">

            <div class="card card-success">

                <div class="card-header">

                    <h3 class="card-title">
                        Selamat Datang
                    </h3>

                </div>

                <div class="card-body">

                    <h4 class="text-danger">
                        BAJESUMA TRAVEL & PAKET
                    </h4>

                    <p>
                        Sistem Informasi Travel dan Pengiriman Paket
                        Area Banyuwangi - Jember - Surabaya - Malang.
                    </p>

                    <hr>

                    <ul>

                        <li>Booking Travel Online</li>

                        <li>Pengiriman Paket</li>

                        <li>Tracking Paket</li>

                        <li>Manajemen Armada</li>

                        <li>Manajemen Driver</li>

                        <li>Laporan Pendapatan</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>



    {{-- Booking Terbaru --}}

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Booking Terbaru
            </h3>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                <tr>

                    <th>Kode</th>

                    <th>Nama</th>

                    <th>Asal</th>

                    <th>Tujuan</th>

                    <th>Status</th>

                </tr>

                </thead>

                <tbody>

                @forelse($latestBookings as $item)

                    <tr>

                        <td>{{ $item->kode_booking }}</td>

                        <td>{{ $item->nama }}</td>

                        <td>{{ $item->asal }}</td>

                        <td>{{ $item->tujuan }}</td>

                        <td>

                            <span class="badge badge-success">
                                {{ $item->status }}
                            </span>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="text-center">
                            Belum ada data booking
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>



    {{-- Paket Terbaru --}}

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Paket Terbaru
            </h3>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                <tr>

                    <th>Resi</th>

                    <th>Pengirim</th>

                    <th>Penerima</th>

                    <th>Status</th>

                </tr>

                </thead>

                <tbody>

                @forelse($latestPackages as $item)

                    <tr>

                        <td>{{ $item->no_resi }}</td>

                        <td>{{ $item->pengirim }}</td>

                        <td>{{ $item->penerima }}</td>

                        <td>

                            <span class="badge badge-info">
                                {{ $item->status }}
                            </span>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center">
                            Belum ada data paket
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>


</div>

</section>

@endsection
