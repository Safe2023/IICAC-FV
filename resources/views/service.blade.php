@extends('layouts.index')
@section('content')
<style>
    .sxq{
        margin-bottom: 10px;
    }
</style>
   <section class="position-relative" style="background-image: url('/img/img_service.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
    <div class="container text-center text-white position-relative sxq" style="z-index: 1;">
        <h1 class="display-4 fw-bold ">Nos services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
  
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
</section>
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title mb-0" style="color: #E94F37;">Nos Services</h4>
            </div>
            <h1 class="text-dark mb-4">Explorez nos activités et formules culturelles</h1>
            <p class="">
                L’Institut vous propose une offre culturelle variée et accessible : spectacles, expositions, ateliers, ainsi que des formules d'abonnement sur mesure pour vivre l'art au quotidien.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded shadow-sm h-100">
                    <img src="img/dessin7.jpg" class="img-fluid rounded-top w-100" alt="Expositions">
                    <div class="p-4">
                        <h5 class="mb-3 text-dark"><i class="fas fa-palette me-2 text-danger"></i>Expositions & Spectacles</h5>
                        <p class="">Découvrez nos programmations en cours ou à venir : œuvres, installations, performances scéniques. Accès aux artistes, résumés et galeries photos/vidéos.</p>
                        <a href="#" class="text-primary fw-bold">Voir la programmation <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-light rounded shadow-sm h-100">
                    <img src="img/dessin7.jpg" class="img-fluid rounded-top w-100" alt="Abonnements">
                    <div class="p-4">
                        <h5 class="mb-3 text-dark"><i class="fas fa-id-card-alt me-2 text-danger"></i>Abonnements & Pass</h5>
                        <p class="">Choisissez la formule qui vous convient : accès illimité, pass week-end, tarifs réduits. Consultez tous les avantages et conditions d’inscription.</p>
                        <a href="#" class="text-primary fw-bold">Voir les formules <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded shadow-sm h-100">
                    <img src="img/dessin7.jpg" class="img-fluid rounded-top w-100" alt="Adhésion">
                    <div class="p-4">
                        <h5 class="mb-3 text-dark"><i class="fas fa-user-plus me-2 text-danger"></i>Rejoignez-nous</h5>
                        <p class="">Remplissez une demande en ligne ou contactez-nous pour toute question liée à l’adhésion, aux tarifs ou à l’accessibilité de nos événements.</p>
                        <a href="#" class="text-primary fw-bold">Demander des infos <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid feature py-3">
    <div class="container ">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title mb-0">IICAC-FV</h4>
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

        </div>
    </div>
</div>

@endsection

<!-- <div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Meet our team</h4>
            </div>
            <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Message Physio Therapist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Rehabilitation Therapist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Doctor of Physical therapy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Doctor of Physical therapy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->

<!-- Blog Start -->
<!--  <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                </div>
                <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>

                            </div>
                            <a href="#" class="h4">Remove back Pain While Working on o physio</a>
                            <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                            <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4">Regular excercise can slow ageing process</a>
                            <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->