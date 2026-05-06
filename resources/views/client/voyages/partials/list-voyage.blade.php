@if($voyages->isEmpty())
    <div class="no-results-found text-center py-5">
        <div class="mb-4">
            <i class="isax isax-search-status text-primary" style="font-size: 4rem;"></i>
        </div>
        <h3 class="fw-medium mb-2">Aucun voyage trouvé</h3>
        <p class="text-muted mb-4">Désolé, nous n'avons trouvé aucun voyage correspondant à vos critères de recherche.</p>
        <div class="suggestions">
            <h6 class="fw-medium mb-3">Suggestions :</h6>
            <ul class="list-unstyled text-muted">
                <li><i class="fas fa-check-circle text-primary me-2"></i>Vérifiez les dates de voyage</li>
                <li><i class="fas fa-check-circle text-primary me-2"></i>Essayez d'autres villes de départ ou d'arrivée</li>
                <li><i class="fas fa-check-circle text-primary me-2"></i>Élargissez votre période de recherche</li>
            </ul>
        </div>
    </div>
@else
    @foreach ($voyages as $voyage)
        <a href="{{ route('client.reservations.show', $voyage->id) }}">
            <div class="place-item mb-4">
                <div class="place-img position-relative">
                    <div class="nav-center">
                        <img src="{{ $voyage->image ? asset('storage/' . $voyage->image) : asset('storage/' . $voyage->autocar->image) }}" class="img-fluid" alt="img">
                    </div>
                    <div class="fav-item position-absolute top-0 end-0 p-3">
                        <a href="javascript:void(0);" class="fav-icon wishlist-toggle {{ Auth::check() && Auth::user()->wishlists()->where('voyage_id', $voyage->id)->exists() ? 'active' : '' }}" data-id="{{ $voyage->id }}">
                            <i class="isax {{ Auth::check() && Auth::user()->wishlists()->where('voyage_id', $voyage->id)->exists() ? 'isax-heart5 text-danger' : 'isax-heart' }} bg-white p-2 rounded-circle shadow-sm"></i>
                        </a>
                    </div>
                </div>
                <div class="place-content">
                    <h5>{{ $voyage->autocar->societe->raison_social }}</h5>
                    <p>Matricule : {{ $voyage->autocar->matricule }}</p>
                    <p>{{ $voyage->villeDepart->ville }} → {{ $voyage->villeArrivee->ville }}</p>
                    <p>{{ $voyage->date_depart }} - {{ $voyage->date_arrivee }}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="text-primary mb-0">{{ number_format($voyage->prix, 2, ',', '') }} DH</h6>
                        <span class="badge bg-outline-success fs-10 fw-medium">{{ $voyage->autocar->nbr_siege - $voyage->reservations_count }} Places restantes</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endif
