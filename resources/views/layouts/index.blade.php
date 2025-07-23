<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Institut d'innovation et de créativité artistique et culturelle (IICAC-FV)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<style>
    .accordion-button:not(.collapsed) {
        background-color: #E94F37;
        color: white;
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(233, 79, 55, 0.4);
        border-color: #E94F37;
    }

    .accordion-body {
        background-color: #fffbe6;
        color: #2C3E50;
        border-top: 1px solid #F4C430;
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /*   .bg-light {
        background-color: #fffbe6 !important;
        
    }
 */
    ul li::marker {
        color: #E94F37;
    }

    .form-select:focus {
        border-color: #E94F37;
        box-shadow: 0 0 0 0.2rem rgba(233, 79, 55, 0.25);
    }

    .input-group-text {
        background-color: #E94F37 !important;
        border-color: #E94F37 !important;
    }


    .gallery-img-container {
        height: 250px;
        /* fixe la hauteur pour toutes les images */
        overflow: hidden;
        border-radius: 5px 5px 0 0;
    }

    .gallery-img-container img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-card:hover .gallery-img-container img {
        transform: scale(1.1);
    }

    .offcanvas-start {
        width: 75%;
        padding-left: 25px;

    }

    .offcanvas-start {
        background-color: white;
        border-right: 1px solid #ccc;
        z-index: 1055;
    }

    .offcanvas {
        visibility: visible !important;
    }
</style>
<style>
    .hero-actualite {
        background-image: url('/img/img_actualite.jpg');
        background-size: cover;
        background-position: center;
        height: 350px;
        padding-top: 100px;
        padding-bottom: 100px;
    }

    @media (max-width: 768px) {
        .hero-actualite {
            height: 250px;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .hero-actualite h1 {
            font-size: 2rem;
        }
    }

    /* Animation douce */
    .animate-fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease-out forwards;
    }

    .animate-fade-in.delay-1 {
        animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .bg-danger {
        background-color: #E94F37 !important;
        transition: background-color 0.3s ease;
    }

    .bg-danger:hover {
        background-color: #2C3E50 !important;
        cursor: pointer;
    }

    .text-danger {
        color: #E94F37 !important;
        transition: color 0.3s ease;
    }

    .text-danger:hover {
        color: #2C3E50 !important;
        cursor: pointer;
    }

    .sdse {
        background-color: #2C3E50 !important;
    }

    .sqdxqs {
        color: #E94F37 !important;
    }

    #spinner {
        background-color: #ffffff;
        position: fixed;
        z-index: 9999;
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.3s ease-in-out;
    }

    .custom-spinner {
        width: 4rem;
        height: 4rem;
        border: 0.5rem solid #f3f3f3;
        border-top: 0.5rem solid #E94F37;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Par défaut pour desktop */
    .logo-img {
        width: 150px;
        height: auto;
    }

    /* Ajustement pour mobile */
    @media (max-width: 576px) {


        .logo-img {
            width: 80px;
            height: auto;
        }


    }
</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show">
        <div class="custom-spinner" role="status" aria-label="Chargement..."></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block sdse">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2 sqdxqs"></i>Localisation</a>
                    <a href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2 sqdxqs"></i>+229 01 92 16 17 43</a>
                    <a href="mailto:iicacfv@gmail.com?subject=Demande%20d'information&body=Bonjour%2C%20j'aimerais%20avoir%20plus%20d'informations%20sur..." class="text-light me-0"><i class="fas fa-envelope text-primary me-2 sqdxqs"></i>iicacfv@gmail.com</a>
                    <div class="col-md-2 text-end">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-light btn-square border rounded-circle nav-fill me-3" target="_blank" href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations"><i class="fa-brands fa-whatsapp"></i></i></a>
                    <a class="btn btn-light btn-square border rounded-circle nav-fill me-3 " target="_blank" href="https://www.facebook.com/share/1dpd53Hw1d/."><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-square border rounded-circle nav-fill me-3 " target="_blank" href="https://www.tiktok.com/@iicacfv_drabo"><i class="fa-brands fa-tiktok"></i></a>
                    <a class="btn btn-light btn-square border rounded-circle nav-fill me-0 " target="_blank" href="https://www.instagram.com/iicacfv?igsh=cWdqNXVjZm1ocWxu"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0 d-flex align-items-center gap-2 flex-wrap flex-sm-nowrap">
                <img src="/img/logo_iicacfv.png" class="logo-img" alt="Logo 1">
                <img src="/img/evas_logo.jpg" class="logo-img" alt="Logo 2">
            </a>

            <!-- Bouton menu mobile -->
            <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <span class="fa fa-bars fa-lg"></span>
            </button>

            <!-- Menu desktop -->
            <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/apropos">À propos de nous</a></li>
                    <li class="nav-item"><a class="nav-link" href="/actualite">Nos actualités</a></li>
                    <li class="nav-item"><a class="nav-link" href="/service">Services</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Événements
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $categorie)
                            <li>
                                <a class="dropdown-item" href="{{ route('event_Categorie', $categorie->id) }}">
                                    {{ $categorie->name_categorie }}
                                </a>
                            </li>
                            @endforeach
                        </ul>


                    </li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
                <a href="/restaurant" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-3">
                    Service de Restauration
                </a>

            </div>

            <!-- Menu mobil -->
            <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="/apropos">À propos de nous</a></li>
                        <li class="nav-item"><a class="nav-link" href="/actualite">Nos actualités</a></li>
                        <li class="nav-item"><a class="nav-link" href="/service">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos Événements
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($categories as $categorie)
                                <li>
                                    <a class="dropdown-item" href="{{ route('event_Categorie', $categorie->id) }}">
                                        {{ $categorie->name_categorie }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                    <a href="/restaurant" class="btn btn-primary w-100 rounded-pill text-white py-2 mt-3">Service de Restauration</a>

                    <div class="col-lg-4 text-center text-lg-end" style=" position: absolute; bottom: 0;">
                        <div class="d-flex align-items-center  " style="justify-content: space-around;">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/share/1dpd53Hw1d/."><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations"><i class="fa-brands fa-whatsapp"></i></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.tiktok.com/@iicacfv_drabo"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/iicacfv?igsh=cWdqNXVjZm1ocWxu"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container ">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <a href="/" class="navbar-brand p-0 d-flex align-items-center gap-2 flex-wrap flex-sm-nowrap">
                                <img src="/img/logo_iicacfv.png" class="logo-img" alt="Logo 1">
                                <img src="/img/evas_logo.jpg" class="logo-img" alt="Logo 2">
                            </a>
                            <p>
                                L’Institut d’Innovation et de Créativité Artistique et Culturelle-Félicienne VODOUNNON est un espace vivant de promotion de la culture, de la création et des talents artistiques du Bénin et d’ailleurs.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/share/1dpd53Hw1d/."><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations"><i class="fa-brands fa-whatsapp"></i></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.tiktok.com/@iicacfv_drabo"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/iicacfv?igsh=cWdqNXVjZm1ocWxu"><i class="fab fa-instagram"></i></a>
                                <!--  <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href="/apropos"><i class="fas fa-angle-right me-2"></i> A propos</a>
                            <a href="/service"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="/actuelite"><i class="fas fa-angle-right me-2"></i> Actualités</a>
                            <a href="/evenement"><i class="fas fa-angle-right me-2"></i> Evenements</a>
                            <a href="/contact"><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href="/restaurant"><i class="fas fa-angle-right me-2"></i> Restauration</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contacte Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Rue de la Création, Cotonou, Bénin</a>
                            <a href=""><i class="fas fa-envelope me-2"></i>iicacfv@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +229 01 92 16 17 43</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="newsletter-form">
                                <h4 class="mb-4 text-white">Restez informé(e) des actualités de l’IICAC-FV</h4>
                                <p class="mb-4 text-muted">Recevez nos événements, ateliers, expositions et nouveautés directement dans votre boîte mail.</p>
                                @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <form action="{{route('newsletter')}}" method="post" class="subscribe">
                                    @csrf
                                    <input type="email" class="form-control mb-3" name="mail" id="newsletter-email" placeholder="Votre adresse email" required>
                                    <button type="submit" class="btn text-white w-100 " style="background-color: #E94F37;">
                                        Je m’abonne
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const currentPath = window.location.pathname;
                document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                    const linkPath = new URL(link.href).pathname;

                    if (linkPath === currentPath) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }

                    if (link.textContent.trim().includes("Nos Événements")) {
                        if (currentPath.startsWith("/event")) {
                            link.classList.add("active");
                        } else {
                            link.classList.remove("active");
                        }
                    }
                });
            });
        </script>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>