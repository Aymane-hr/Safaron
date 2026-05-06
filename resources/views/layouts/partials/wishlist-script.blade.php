{{-- Vanilla JS: works when jQuery is still deferred (e.g. Cloudflare Rocket Loader + fake script types). --}}
@php
    $dummyVoyageId = (int) (\App\Models\Voyage::max('id') ?: 1);
    $wishlistTogglePrefix = preg_replace('#/\d+$#', '', route('wishlist.toggle', ['voyage' => $dummyVoyageId]));
@endphp
<script>
    (function() {
        'use strict';

        var loginUrl = @json(route('login'));
        var toggleBase = @json($wishlistTogglePrefix);

        function csrf() {
            var m = document.querySelector('meta[name="csrf-token"]');
            return m ? m.getAttribute('content') : '';
        }

        function toggleUrl(voyageId) {
            return toggleBase + '/' + encodeURIComponent(voyageId);
        }

        function bumpWishlistCount(delta) {
            document.querySelectorAll('.wishlist-count').forEach(function(el) {
                var n = parseInt(el.textContent, 10) || 0;
                el.textContent = String(Math.max(0, n + delta));
            });
        }

        function applyToggleVisual(voyageId, added) {
            document.querySelectorAll('.wishlist-toggle[data-id="' + voyageId + '"]').forEach(function(el) {
                el.classList.toggle('active', added);
                var icon = el.querySelector('i.isax');
                if (icon) {
                    if (added) {
                        icon.classList.remove('isax-heart');
                        icon.classList.add('isax-heart5', 'text-danger');
                    } else {
                        icon.classList.remove('isax-heart5', 'text-danger');
                        icon.classList.add('isax-heart');
                    }
                }
                el.querySelectorAll('.wishlist-text').forEach(function(span) {
                    span.textContent = added ? 'Enregistré' : 'Enregistrer';
                });
            });
        }

        document.addEventListener('click', function(e) {
            var btn = e.target.closest('.wishlist-toggle');
            if (!btn) {
                return;
            }
            e.preventDefault();
            e.stopPropagation();

            var voyageId = btn.getAttribute('data-id');
            if (!voyageId || btn.getAttribute('data-wishlist-loading') === '1') {
                return;
            }
            btn.setAttribute('data-wishlist-loading', '1');

            var body = new URLSearchParams();
            body.set('_token', csrf());

            fetch(toggleUrl(voyageId), {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf()
                    },
                    body: body.toString()
                })
                .then(function(res) {
                    if (res.status === 401) {
                        window.location.href = loginUrl;
                        return Promise.resolve({
                            skip: true
                        });
                    }
                    return res.json().then(function(data) {
                        return {
                            skip: false,
                            res: res,
                            data: data
                        };
                    }).catch(function() {
                        return {
                            skip: false,
                            res: res,
                            data: {}
                        };
                    });
                })
                .then(function(result) {
                    if (!result || result.skip) {
                        return;
                    }
                    var data = result.data || {};
                    var inWishlistSection = btn.closest('.wishlist-section');

                    if (inWishlistSection && data.status === 'removed') {
                        var card = btn.closest('.col-md-4');
                        if (card) {
                            card.style.transition = 'opacity 0.3s ease';
                            card.style.opacity = '0';
                            setTimeout(function() {
                                card.remove();
                                bumpWishlistCount(-1);
                                var row = document.querySelector('.wishlist-section .row.mt-4');
                                var remaining = row ? row.querySelectorAll('.col-md-4').length :
                                    0;
                                if (remaining === 0) {
                                    window.location.reload();
                                }
                            }, 300);
                            return;
                        }
                    }

                    if (data.status === 'added') {
                        applyToggleVisual(voyageId, true);
                        bumpWishlistCount(1);
                    } else if (data.status === 'removed') {
                        applyToggleVisual(voyageId, false);
                        bumpWishlistCount(-1);
                    }
                })
                .finally(function() {
                    btn.removeAttribute('data-wishlist-loading');
                });
        }, false);
    })();
</script>
