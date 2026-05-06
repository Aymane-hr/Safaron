@extends('admin.Layout.app')

@section('title', 'Liste des Réservations')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Réservations</h1>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3">Date</th>
                            <th class="py-3">Client</th>
                            <th class="py-3">Voyage</th>
                            <th class="py-3">N° Siège</th>
                            <th class="py-3">Prix</th>
                            <th class="pe-4 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reserva)
                            <tr>
                                <td class="ps-4">
                                    <div class="fw-medium text-dark">{{ $reserva->date_reservation }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-secondary bg-opacity-10 p-2 me-2 text-secondary">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <span class="fw-bold text-dark">{{ $reserva->user->name }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-light text-dark border fw-normal">
                                            {{ $reserva->villeDepart->ville ?? $reserva->voyage->villeDepart->ville }} → {{ $reserva->villeArrivee->ville ?? $reserva->voyage->villeArrivee->ville }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info border border-info-subtle px-3 rounded-pill">
                                        Siège {{ $reserva->num_siege }}
                                    </span>
                                </td>
                                <td>
                                    <span class="fw-bold text-success">{{ number_format($reserva->prix, 2) }} DH</span>
                                </td>
                                <td class="pe-4 text-center">
                                    <a href="{{ route('reservation.admin.show', $reserva->id) }}" class="btn btn-sm btn-light border text-primary rounded-circle p-2" title="Voir les détails">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $reservations->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    .bg-info-subtle { background-color: #cff4fc; }
    .text-info { color: #055160; }
    .border-info-subtle { border-color: #b6effb; }
    .table thead th {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 700;
        color: #555;
    }
    .btn-light:hover {
        background-color: #f8f9fa;
        transform: scale(1.1);
    }
</style>
@endsection
