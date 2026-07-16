<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Armada;
use App\Models\Driver;
use App\Models\Booking;
use App\Models\Package;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Dashboard Admin
     */
    public function index()
    {
        $today = now()->toDateString();

        // Statistik
        $totalArmada = Armada::count();
        $totalDriver = Driver::count();
        $totalUser = User::count();

        $totalBooking = Booking::count();
        $bookingToday = Booking::whereDate('created_at', $today)->count();

        $totalPackage = Package::count();
        $packageToday = Package::whereDate('created_at', $today)->count();

        // Pendapatan Hari Ini
        $incomeToday = Booking::whereDate('created_at', $today)
            ->where('status', 'Lunas')
            ->sum('total_harga');

        // Booking Terbaru
        $latestBookings = Booking::latest()
            ->take(10)
            ->get();

        // Paket Terbaru
        $latestPackages = Package::latest()
            ->take(10)
            ->get();

        return view('admin.dashboard', compact(
            'totalArmada',
            'totalDriver',
            'totalUser',
            'totalBooking',
            'bookingToday',
            'totalPackage',
            'packageToday',
            'incomeToday',
            'latestBookings',
            'latestPackages'
        ));
    }
}
