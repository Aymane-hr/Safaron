<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Ma Wishlist</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Wishlist Section -->
    <section class="wishlist-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @if($wishlist->isEmpty())
                        <div class="wishlist-content text-center py-5">
                            <div class="empty-wishlist mb-4">
                                <div class="icon-circle bg-white shadow-sm rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 120px; height: 120px;">
                                    <i class="isax isax-heart5 text-danger display-4"></i>
                                </div>
                                <h3 class="fw-bold mb-3">Votre wishlist est vide</h3>
                                <p class="text-muted mb-4 px-md-5">Vous n'avez pas encore ajouté de voyages à vos favoris. Parcourez nos offres et trouvez votre prochaine destination de rêve !</p>
                                <a href="{{ route('voyages.list') }}" class="btn btn-primary btn-lg rounded-pill px-5">Explorer les Voyages</a>
                            </div>
                        </div>
                    @else
                        <div class="row mt-4">
                            @foreach($wishlist as $item)
                                <div class="col-md-4 mb-4">
                                    <div class="place-item shadow-sm border-0 rounded-4 overflow-hidden bg-white h-100">
                                        <div class="place-img position-relative">
                                            <a href="{{ route('voyage.detail', ['id' => $item->voyage->id]) }}">
                                                <img src="{{ asset('storage/' . $item->voyage->autocar->image) }}" class="img-fluid w-100" alt="img" style="height: 200px; object-fit: cover;">
                                            </a>
                                            <div class="fav-item position-absolute top-0 end-0 p-3">
                                                <a href="javascript:void(0);" class="fav-icon wishlist-toggle active" data-id="{{ $item->voyage->id }}">
                                                    <i class="isax isax-heart5 text-danger bg-white p-2 rounded-circle shadow-sm"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="place-content p-3">
                                            <h5 class="fw-bold mb-2">{{ $item->voyage->autocar->societe->raison_social }}</h5>
                                            <p class="text-muted small mb-2"><i class="isax isax-location me-1"></i>{{ $item->voyage->villeDepart->ville }} → {{ $item->voyage->villeArrivee->ville }}</p>
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <h6 class="text-primary fw-bold mb-0">{{ number_format($item->voyage->prix, 2) }} DH</h6>
                                                <a href="{{ route('voyage.detail', ['id' => $item->voyage->id]) }}" class="btn btn-outline-primary btn-sm rounded-pill">Détails</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
