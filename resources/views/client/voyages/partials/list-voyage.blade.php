@foreach ($voyages as $voyage)
    <a href="{{ route('client.reservations.show', $voyage->id) }}">
        <div class="place-item mb-4">
            <div class="place-img">
                <div class="nav-center">
                    <img src="{{ asset('storage/' . $voyage->autocar->image) }}" class="img-fluid" alt="img">
                </div>
            </div>
            <div class="place-content">
                <h5>{{ $voyage->autocar->societe->raison_social }}</h5>
                <p>Matricule : {{ $voyage->autocar->matricule }}</p>
                <p>{{ $voyage->villeDepart->ville }} → {{ $voyage->villeArrivee->ville }}</p>
                <p>{{ $voyage->date_depart }} - {{ $voyage->date_arrivee }}</p>
                <h6 class="text-primary">{{ number_format($voyage->prix, 2, ',', '') }} DH</h6>
            </div>
        </div>
    </a>
@endforeach
