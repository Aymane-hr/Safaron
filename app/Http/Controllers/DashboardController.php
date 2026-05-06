<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voyage;
use App\Models\Reservation;
use App\Models\autocar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalVoyages = Voyage::count();
        $totalReservations = Reservation::count();
        $totalAutocars = autocar::count();
        $totalRevenue = Reservation::sum('prix');

        $recentReservations = Reservation::with(['user', 'voyage'])->latest()->take(5)->get();

        // Chart Data: Reservations per month (last 6 months)
        $reservationsByMonth = Reservation::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month');

        $months = [];
        $reservationCounts = [];
        for ($i = 5; $i >= 0; $i--) {
            $month = now()->subMonths($i)->format('m');
            $months[] = now()->subMonths($i)->format('M');
            $reservationCounts[] = $reservationsByMonth[intval($month)] ?? 0;
        }

        // Chart Data: Top 5 Destinations
        $topDestinations = Reservation::join('villes', 'reservations.ville_arrivee_id', '=', 'villes.id')
            ->selectRaw('villes.ville as name, COUNT(*) as count')
            ->groupBy('villes.ville')
            ->orderByDesc('count')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalVoyages',
            'totalReservations',
            'totalAutocars',
            'totalRevenue',
            'recentReservations',
            'months',
            'reservationCounts',
            'topDestinations'
        ));
    }
}
