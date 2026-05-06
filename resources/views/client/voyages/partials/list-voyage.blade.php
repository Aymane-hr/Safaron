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
        @php
            $voyageImage = $voyage->image ? asset('storage/' . $voyage->image) : 
                          ($voyage->autocar->image ? asset('storage/' . $voyage->autocar->image) : 
                          asset('assets/img/citys/Ville-Oujda-Maroc.jpg')); // Using Oujda as default city image
        @endphp
        <div class="card voyage-card mb-4 border-0 shadow-sm overflow-hidden">
            <div class="row g-0 h-100">
                <div class="col-md-4 col-sm-5">
                    <div class="voyage-img-wrapper h-100 position-relative">
                        <a href="{{ route('client.reservations.show', $voyage->id) }}" class="d-block h-100">
                            <img src="{{ $voyageImage }}" class="img-fluid h-100 w-100 object-fit-cover" alt="{{ $voyage->autocar->societe->raison_social }}">
                        </a>
                        <div class="position-absolute top-0 end-0 p-3">
                            <a href="javascript:void(0);" class="fav-icon wishlist-toggle {{ Auth::check() && Auth::user()->wishlists()->where('voyage_id', $voyage->id)->exists() ? 'active' : '' }}" data-id="{{ $voyage->id }}">
                                <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                    <i class="isax {{ Auth::check() && Auth::user()->wishlists()->where('voyage_id', $voyage->id)->exists() ? 'isax-heart5 text-danger' : 'isax-heart' }}"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <div class="card-body p-4 d-flex flex-column h-100">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="card-title fw-bold text-dark mb-1">{{ $voyage->autocar->societe->raison_social }}</h5>
                                <div class="text-muted fs-12">Matricule : {{ $voyage->autocar->matricule }}</div>
                            </div>
                            <div class="text-end">
                                <div class="badge bg-outline-success rounded-pill px-3 py-2 fs-12">
                                    {{ $voyage->autocar->nbr_siege - $voyage->reservations_count }} Places restantes
                                </div>
                            </div>
                        </div>

                        <div class="voyage-details mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="isax isax-location text-primary me-2"></i>
                                <span class="fw-medium">{{ $voyage->villeDepart->ville }}</span>
                                <i class="bi bi-arrow-right mx-2 text-muted"></i>
                                <span class="fw-medium">{{ $voyage->villeArrivee->ville }}</span>
                            </div>
                            <div class="d-flex align-items-center text-muted fs-14">
                                <i class="isax isax-calendar me-2"></i>
                                <span>{{ $voyage->date_depart }} - {{ $voyage->date_arrivee }}</span>
                            </div>
                        </div>

                        <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                            <div>
                                <span class="text-muted fs-14">Prix par siège</span>
                                <h4 class="text-primary fw-bold mb-0">{{ number_format($voyage->prix, 2, ',', ' ') }} DH</h4>
                            </div>
                            <a href="{{ route('client.reservations.show', $voyage->id) }}" class="btn btn-primary rounded-pill px-4 shadow-sm hover-lift">
                                Réserver <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
