@extends('layouts.index')
@section('content')

<style>
    .dfxfxd {
        height: 500px !important;
    }
</style>
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="img/well.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Espace de Création</h5>
                <h1 class=" text-capitalize text-white mb-4">Exprimez votre art, partagez votre vision</h1>
                <p class="mb-5 fs-5">L'IICAC-FV est un lieu d'expression libre, où chaque idée devient une œuvre, chaque talent une lumière.

                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/evenement">Découvrir l’Institut</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/dessin2.avif" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Ateliers & Formations</h5>
                <h1 class=" text-capitalize text-white mb-4">Apprenez, créez, inspirez</h1>
                <p class="mb-5 fs-5 animated slideInDown">Ne manquez aucun de nos événements artistiques. Vivez des moments uniques de partage et de découverte.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/evenement">Voir les Ateliers</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/dessin4.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Événements & Rencontres</h5>
                <h1 class=" text-capitalize text-white mb-4">Vibrez au rythme de la culture</h1>
                <p class="mb-5 fs-5 animated slideInDown">Ne manquez aucun de nos événements artistiques. Vivez des moments uniques de partage et de découverte.

                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/evenement">Voir le Calendrier</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/dessin2.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Accès Culture</h5>
                <h1 class=" text-capitalize text-white mb-4">Des formules pour tous les curieux</h1>
                <p class="mb-5 fs-5 animated slideInDown">Choisissez le pass qui vous ressemble pour accéder librement à nos espaces, ateliers et événements toute l’année.

                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Découvrir l’Institut</a>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 bg-light p-5 rounded shadow-sm">
            <h2 class="text-center text-uppercase fw-bold mb-4" style="color: #E94F37;">
                Trouvez un artisan d'art près de chez vous
            </h2>
            <p class="fs-5 text-center mb-4" style="color: #2C3E50;">
                Vous êtes artisan d’art ? Ne perdez plus de temps : l’inscription est <strong>100% gratuite</strong> !
            </p>

            <p class="mb-3" style="color: #2C3E50;">
                Notre plateforme vous permet de créer gratuitement une fiche descriptive complète pour valoriser votre savoir-faire :
            </p>

            <ul class="mb-4" style="color: #2C3E50; list-style: square;">
                <li>Galerie photos de vos créations</li>
                <li>Formulaire de contact et messagerie instantanée</li>
                <li>Partage de vos actualités et promotions</li>
                <li>Avis clients et système de notation</li>
                <li>Outils de suivi statistique (visites, clics, interactions)</li>
            </ul>

            <p style="color: #2C3E50;">
                Les visiteurs peuvent facilement <strong>rechercher des artisans</strong> par région, spécialité ou technique, s’informer sur les <strong>métiers d’art</strong>, consulter l’agenda des <strong>événements</strong> à venir, et découvrir des talents près de chez eux.
            </p>
            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations">S'inscrire gratuitemant</a>
        </div>
    </div>
</div>

<!-- Services Start -->
<div class="container-fluid service pt-3">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title  mb-0" style="color: #E94F37;font-size: 17px;">Nos Événements</h4>
            </div>
            <h1 class="mb-4">Des expériences culturelles riches et variées</h1>
            <p class="mb-0">
                Retrouvez notre programmation artistique et culturelle : spectacles, expositions, ateliers, rencontres...
                Parcourez les événements à venir ou consultez nos archives pour revivre les temps forts.
                Filtrez par date, catégorie ou public pour découvrir ce qui vous correspond.
            </p>
        </div>



        <div class="row g-4 justify-content-center">
            @foreach ($evenements as $evenement)
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s ">
                <div class="blog-item rounded shadow-sm overflow-hidden position-relative">
                    <div class="position-absolute top-0 end-0 bg-danger px-3 py-1 text-white small fw-semibold" style="background-color: #E94F37; border-bottom-left-radius: 8px;">
                        <strong>{{ $evenement->categorie->name_categorie }}</strong>
                    </div>

                    <div class="blog-img">
                        <img src="{{ asset('storage/' . $evenement->image) }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="Image">
                    </div>

                    <div class="blog-centent p-4 bg-light">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0 text-muted">
                                <i class="fa fa-calendar-alt me-1 text-danger"></i> {{ \Carbon\Carbon::parse($evenement->date_debut)->format('d M Y') }}
                            </p>
                            <p class="mb-0 text-muted">
                                <i class="fa fa-user me-1 text-secondary"></i> {{ $evenement->publicCible->cible ?? 'Tout public' }}
                            </p>
                        </div>
                        <a href="#" class="h5 d-block mb-2 text-dark text-decoration-none fw-bold">
                            {{ $evenement->nom_event }}
                        </a>
                        <p class="mb-4 text-muted">
                            {{ Str::limit($evenement->petite_description, 120) }}
                        </p>

                        <!-- Bouton modal -->
                        <button class="btn btn-sm text-white rounded-pill sqxsx px-4 py-2 bg-danger" style="background-color: #E94F37;" data-bs-toggle="modal" data-bs-target="#evenementModal{{ $evenement->id }}">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="evenementModal{{ $evenement->id }}" tabindex="-1"
                aria-labelledby="evenementModalLabel{{ $evenement->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-center text-dark w-100" id="evenementModalLabel{{ $evenement->id }}">
                                {{ $evenement->nom_event }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>

                        <div class="modal-body">
                            <div class="position-relative mb-4">
                                <img src="{{ asset('storage/' . $evenement->image) }}"
                                    class="img-fluid w-100 rounded" style="height: 300px; object-fit: cover;" alt="Image">

                                <div class="position-absolute top-0 end-0 bg-danger px-3 py-1 text-white small fw-semibold" style="background-color: #E94F37; border-top-right-radius: 8px;">
                                    {{ $evenement->categorie->name_categorie ?? 'Non classé' }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap mb-3">
                                <p><strong>Date :</strong> {{ \Carbon\Carbon::parse($evenement->date_debut)->format('d M Y') }}
                                    @if($evenement->date_fin)
                                    au {{ \Carbon\Carbon::parse($evenement->date_fin)->format('d M Y') }}
                                    @endif
                                </p>
                                <p><strong>Lieu :</strong> {{ $evenement->lieu ?? 'Non précisé' }}</p>
                            </div>

                            <div class="d-flex justify-content-between flex-wrap mb-3">
                                <p>{{ $evenement->heure_debut ?? '--:--' }} à {{ $evenement->heure_fin ?? '--:--' }}</p>
                                <p>{{ $evenement->publicCible->cible ?? 'Tout public' }}</p>
                            </div>

                            @if($evenement->prix)
                            <div class="mb-3">
                                <strong>Prix :</strong> {{ number_format($evenement->prix, 0, ',', ' ') }} FCFA
                            </div>
                            @endif

                            <p class="mb-2">{{ $evenement->petite_description }}</p>

                            @if($evenement->description_complete)
                            <p><br>{!! nl2br(e($evenement->description_complete)) !!}</p>
                            @endif
                        </div>

                        <div class="modal-footer border-0">
                            <a href="https://wa.me/2290192161743" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-3">Reserver</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

        <div class="col-12 text-center wow fadeInUp pt-5" data-wow-delay="0.2s">
            <a href="{{route('evenement')}}" class="btn btn-primary rounded-pill text-white py-3 px-5">Voir tous les evenements</a>
        </div>
    </div>
</div>

<div class="container-fluid feature">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">IICAC-FV</h4>
            </div>
            <h2 class="mb-4">Un lieu vivant au service de la créativité</h2>
            <p class="mb-0">L’Institut d’Innovation et de Créativité Artistique et Culturelle-Félicienne Vodounnon (IICAC-FV) est bien plus qu’un centre culturel. C’est une plateforme inclusive, ouverte, moderne et humaine où s’épanouissent les talents et les idées.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-brain fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Créativité en action</h5>
                            <p class="mb-0">Expositions, spectacles, ateliers… une programmation riche et en perpétuelle évolution pour stimuler l'imaginaire.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-people-arrows fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">

                            <h5 class="mb-4">Communauté inclusive</h5>
                            <p class="mb-0">Un espace d’échange et de dialogue pour tous les publics, sans barrière d’âge ou de culture.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-palette fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Soutien aux artistes</h5>
                            <p class="mb-0">Mise en lumière des talents émergents et accompagnement des créateurs dans leurs parcours professionnels.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-globe-africa fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4 ">Identité culturelle forte</h5>
                            <p class="mb-0">Valorisation des patrimoines africains, des traditions revisitées, et de l’innovation culturelle contemporaine.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-photo-video fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4 ">Galeries immersives</h5>
                            <p class="mb-0">Photos, vidéos, expériences numériques… pour vivre l’art autrement, même à distance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-handshake fa-3x text-danger"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Partenariats engagés</h5>
                            <p class="mb-0">Collaboration avec des institutions locales et internationales pour renforcer l'impact de nos actions culturelles.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="/service" class="btn btn-primary rounded-pill text-white py-3 px-5">En savoir plus</a>
            </div>
        </div>
    </div>
</div>

<!-- SECTION GALERIE AVEC FILTRES -->
<div class="container-fluid  bg-white">
    <div class="container py-3">

        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class=" sub-style d-inline-block">
                <h4 class="sub-title mb-0" style="color: #E94F37;">Galerie</h4>
            </div>
            <h1 class="text-dark mt-3">Voyage artistique et culturel</h1>
            <p class="">Explorez nos expositions, ateliers, spectacles et moments forts à travers une galerie immersive.</p>
        </div>

        <div class="row g-4">
            @foreach($galeries as $galerie)
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden shadow-sm gallery-card mb-4">

                    <span class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill text-white" style="background-color: #E94F37;">
                        {{ $galerie->categorie->name_categorie ?? 'Non classé' }}
                    </span>

                    <div class="gallery-img-container">
                        <img src="{{ asset('storage/' . $galerie->photo) }}" class="img-fluid w-100">
                    </div>

                    <div class="bg-light p-4">
                        <h5 class="text-dark fw-bold mb-2">{{ $galerie->nom_galerie }}</h5>
                        <p class="mb-2 text-muted">{{ $galerie->description_court }}</p>
                        <small class="text-secondary">
                            <i class="far fa-calendar-alt me-2"></i>
                            {{ \Carbon\Carbon::parse($galerie->date_debut)->format('d M Y') }} au {{ \Carbon\Carbon::parse($galerie->date_fin)->format('d M Y') }}
                        </small>
                    </div>

                </div>

            </div>
            @endforeach

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="{{route('evenement')}}" class="btn btn-primary rounded-pill text-white py-3 px-5">Voir toutes les galeries</a>
            </div>
        </div>
    </div>
</div>
<!-- //////////equipe///// -->
<div class="container pt-5">
    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" sub-style d-inline-block">
            <h4 class="sub-title mb-0" style="color: #E94F37;font-size: 17px;">Notre Équipe</h4>
        </div>
        <h1 class="text-dark mt-3">Des passionnés à votre service</h1>
        <p class="">Découvrez les visages qui font vivre notre institution artistique et culturelle.</p>
    </div>

   <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($equipe->chunk(3) as $chunkIndex => $chunk)
            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                <div class="row justify-content-center g-4">
                    @foreach($chunk as $equipe)
                        <div class="col-md-4">
                            <div class="card text-center border-0 shadow team-card h-100 rounded-4 overflow-hidden" style="transition: transform 0.3s;">
                                <img src="{{ asset('storage/' . $equipe->photo_equipe) }}" class="card-img-top" style="height: 280px; object-fit: cover;" alt="{{ $equipe->nom_equipe }}">
                                <div class="card-body bg-light" style="background-color: #f8f9fa;">
                                    <h5 class="fw-bold mb-1">{{ $equipe->nom_equipe }}</h5>
                                    <p class="text-muted mb-3">{{ $equipe->poste_equipe }}</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        @if($equipe->lien_facebook)
                                            <a href="{{ $equipe->lien_facebook }}" class="text-danger"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($equipe->lien_instagram)
                                            <a href="{{ $equipe->lien_instagram }}" class="text-danger"><i class="fab fa-instagram"></i></a>
                                        @endif
                                        @if($equipe->lien_linkedin)
                                            <a href="{{ $equipe->lien_linkedin }}" class="text-danger"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Contrôles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>


</div>


<!-- Effet hover -->
<style>
    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .team-card .card-body {
        transition: background-color 0.3s ease;
    }

    .team-card:hover .card-body {
        background-color: #e9f0ff;
    }
    </style>


<div class="container-fluid pt-5  bg-white">
    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="sub-style">
            <h4 class="sub-title mb-0" style="color: #E94F37;font-size: 17px;">Nos Partenaires</h4>
        </div>
        <h2 class="mb-4">Ils nous font confiance</h2>


        <div class="partner-slider mt-5">
            <div class="partner-track">
                <div class="partner-logo"><img src="/img/evas_logo.jpg" alt="Partenaire 1"></div>
                <div class="partner-logo"><img src="img/logo1.jpg" alt="Partenaire 2"></div>
                <div class="partner-logo"><img src="img/c1.jpeg" alt="Partenaire 3"></div>
                <div class="partner-logo"><img src="img/c2.jpeg" alt="Partenaire 4"></div>
                <div class="partner-logo"><img src="img/c3.png" alt="Partenaire 5"></div>
                <div class="partner-logo"><img src="img/c4.jpeg" alt="Partenaire 6"></div>
                <div class="partner-logo"><img src="img/c4.jpg" alt="Partenaire 7"></div>
            </div>
        </div>



    </div>
</div>
<style>
    .partner-slider {
        overflow: hidden;
        width: 100%;
    }

    .partner-track {
        display: flex;
        gap: 60px;
        animation: scroll 40s linear infinite;
        align-items: center;
    }

    .partner-logo {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .partner-logo img {
        max-height: 60px;
        max-width: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;

    }

    .partner-logo:hover img {
        transform: scale(1.05);
        filter: grayscale(0%);
    }

    .partner-slider:hover .partner-track {
        animation-play-state: paused;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Responsive optionnel */
    @media (max-width: 768px) {
        .partner-track {
            gap: 40px;
        }

        .partner-logo img {
            max-height: 50px;
        }
    }
</style>


@endsection