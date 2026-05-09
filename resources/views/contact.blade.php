<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Contactez-nous</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Contact Us -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="contact-info-wrap p-4 bg-light rounded-4 shadow-sm">
                        <div class="section-header mb-4">
                            <h2 class="fw-bold">Prendre contact avec nous</h2>
                            <p class="text-muted">Nous sommes là pour répondre à toutes vos questions et vous aider à
                                organiser votre prochain voyage avec Safaron.</p>
                        </div>
                        <div class="contact-info">
                            <!-- Phone Item -->
                            <div class="contact-info-item d-flex align-items-center mb-4">
                                <!-- Removed fs-4 and added a larger inline font-size -->
                                <span
                                    class="avatar avatar-lg bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="ti ti-phone text-white" style="font-size: 24px;"></i>
                                </span>
                                <div class="contact-info-content">
                                    <p class="mb-0 text-muted small">Soutien Client</p>
                                    <h6 class="fw-bold mb-0">+1 56589 54598</h6>
                                </div>
                            </div>

                            <!-- Email Item -->
                            <div class="contact-info-item d-flex align-items-center mb-4">
                                <span
                                    class="avatar avatar-lg bg-secondary rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="ti ti-mail text-white" style="font-size: 24px;"></i>
                                </span>
                                <div class="contact-info-content">
                                    <p class="mb-0 text-muted small">Envoyez-nous un Email</p>
                                    <h6 class="fw-bold mb-0">contact@safaron.com</h6>
                                </div>
                            </div>

                            <!-- Location Item -->
                            <div class="contact-info-item d-flex align-items-center">
                                <span
                                    class="avatar avatar-lg bg-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="ti ti-map-pin text-white" style="font-size: 24px;"></i>
                                </span>
                                <div class="contact-info-content">
                                    <p class="mb-0 text-muted small">Notre Emplacement</p>
                                    <h6 class="fw-bold mb-0">123 Rue de Voyage, Casablanca, Maroc</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card contact-card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <h4 class="fw-bold mb-4">Envoyez-nous un message</h4>

                            @if(session('success'))
                                <div class="alert alert-success border-0 shadow-sm mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Nom Complet</label>
                                            <input type="text" name="name" class="form-control form-control-lg bg-light border-0"
                                                placeholder="Entrez votre nom" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Adresse Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg bg-light border-0"
                                                placeholder="Entrez votre email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Sujet</label>
                                            <input type="text" name="subject" class="form-control form-control-lg bg-light border-0"
                                                placeholder="Sujet de votre message" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label class="form-label fw-medium">Message</label>
                                            <textarea name="message" class="form-control form-control-lg bg-light border-0" rows="5"
                                                placeholder="Votre message ici..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg w-100 py-3 shadow-sm rounded-3">Envoyer le
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Us -->

    <!-- Map Section -->
    <div class="map-section mt-5 overflow-hidden shadow-sm" style="height: 450px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.846357247714!2d-7.589843384797!3d33.573110380738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778daa113%3A0x10c067d5ff5fc32!2sCasablanca!5e0!3m2!1sen!2sma!4v1620000000000!5m2!1sen!2sma"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</x-app-layout>