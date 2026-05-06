@extends('admin.Layout.app')

@section('title', 'Tableau de Bord')

@section('content')
<div class="container-fluid py-4">
    <div class="row g-4 mb-4">
        <!-- Stats Cards -->
        <div class="col-xl-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1 fw-medium">Utilisateurs</p>
                            <h3 class="mb-0 fw-bold">{{ $totalUsers }}</h3>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                    </div>
                    <div class="text-success fs-14">
                        <i class="bi bi-arrow-up me-1"></i> 12% <span class="text-muted ms-1">depuis le mois dernier</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1 fw-medium">Voyages</p>
                            <h3 class="mb-0 fw-bold">{{ $totalVoyages }}</h3>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 text-success">
                            <i class="bi bi-map fs-4"></i>
                        </div>
                    </div>
                    <div class="text-success fs-14">
                        <i class="bi bi-arrow-up me-1"></i> 8% <span class="text-muted ms-1">nouveaux itinéraires</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1 fw-medium">Réservations</p>
                            <h3 class="mb-0 fw-bold">{{ $totalReservations }}</h3>
                        </div>
                        <div class="bg-warning bg-opacity-10 p-3 rounded-3 text-warning">
                            <i class="bi bi-calendar-check fs-4"></i>
                        </div>
                    </div>
                    <div class="text-danger fs-14">
                        <i class="bi bi-arrow-down me-1"></i> 3% <span class="text-muted ms-1">cette semaine</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1 fw-medium">Revenu Total</p>
                            <h3 class="mb-0 fw-bold">{{ number_format($totalRevenue, 2) }} DH</h3>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded-3 text-info">
                            <i class="bi bi-currency-dollar fs-4"></i>
                        </div>
                    </div>
                    <div class="text-success fs-14">
                        <i class="bi bi-arrow-up me-1"></i> 15% <span class="text-muted ms-1">croissance annuelle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-4 mb-4">
        <div class="col-xl-8">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-dark">Tendances des Réservations</h5>
                </div>
                <div class="card-body">
                    <canvas id="reservationsChart" height="300"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-dark">Top Destinations</h5>
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <canvas id="destinationsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Recent Reservations Table -->
        <div class="col-xl-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold text-dark">Réservations Récentes</h5>
                        <a href="{{ route('reservation.admin.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">Client</th>
                                    <th>Voyage</th>
                                    <th>Date</th>
                                    <th>Siège</th>
                                    <th class="pe-4 text-end">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentReservations as $reservation)
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-secondary bg-opacity-10 p-2 me-2">
                                                <i class="bi bi-person text-secondary"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fs-14">{{ $reservation->user->name }}</h6>
                                                <span class="text-muted fs-12">{{ $reservation->user->email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal">
                                            {{ $reservation->voyage->villeDepart->ville }} → {{ $reservation->voyage->villeArrivee->ville }}
                                        </span>
                                    </td>
                                    <td>{{ $reservation->created_at->format('d M Y') }}</td>
                                    <td><span class="badge bg-outline-info">N° {{ $reservation->num_siege }}</span></td>
                                    <td class="pe-4 text-end fw-bold text-primary">{{ number_format($reservation->prix, 2) }} DH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Autocars Status -->
        <div class="col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-dark">Flotte d'Autocars</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="display-4 fw-bold text-primary">{{ $totalAutocars }}</h1>
                        <p class="text-muted">Autocars actifs dans le système</p>
                    </div>
                    <div class="d-grid gap-3">
                        <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                            <span class="fw-medium">En service</span>
                            <span class="badge bg-success rounded-pill">90%</span>
                        </div>
                        <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                            <span class="fw-medium">Maintenance</span>
                            <span class="badge bg-warning rounded-pill">10%</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-top">
                        <a href="{{ route('autocars.index') }}" class="btn btn-primary w-100">Gérer la flotte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Reservations Chart
    const ctxRes = document.getElementById('reservationsChart').getContext('2d');
    new Chart(ctxRes, {
        type: 'line',
        data: {
            labels: {!! json_encode($months) !!},
            datasets: [{
                label: 'Réservations',
                data: {!! json_encode($reservationCounts) !!},
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 4,
                pointBackgroundColor: '#0d6efd'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { borderDash: [5, 5] }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    // Destinations Chart
    const ctxDest = document.getElementById('destinationsChart').getContext('2d');
    new Chart(ctxDest, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($topDestinations->pluck('name')) !!},
            datasets: [{
                data: {!! json_encode($topDestinations->pluck('count')) !!},
                backgroundColor: [
                    '#0d6efd', '#198754', '#ffc107', '#0dcaf0', '#6610f2'
                ],
                borderWidth: 0,
                cutout: '70%'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true
                    }
                }
            }
        }
    });
</script>

<style>
    .bg-outline-info {
        border: 1px solid #0dcaf0;
        color: #0dcaf0;
    }
    .fs-14 { font-size: 14px; }
    .fs-12 { font-size: 12px; }
</style>
@endsection
