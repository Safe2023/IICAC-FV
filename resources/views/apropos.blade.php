 @extends('layouts.index')
 @section('content')


<!--  <div class="container-fluid bg-breadcrumb" style="background-image: url('img/img_apropos.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;padding: 160px 0 60px 0;">
    <div class="container text-center py-5" style="max-width: 900px;">
         <h3 class="display-3 mb-4 wow fadeInDown text-dark" data-wow-delay="0.1s" style="color: #E94F37;">À propos de nous</h1>
             <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                 <li class="breadcrumb-item text-dark" ><a href="index.html">Accueil</a></li>
                 <li class="breadcrumb-item active text-dark">A propos</li>
             </ol>
     </div> 
 </div> -->

 <section class="position-relative" style="background-image: url('/img/img_apropos.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
    <div class="container text-center text-white position-relative" style="z-index: 1;">
        <h1 class="display-4 fw-bold">À propos de nous</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">À propos</li>
            </ol>
        </nav>
    </div>
    <!-- Overlay sombre pour lisibilité du texte -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
</section>

 <div class="container-fluid py-5 bg-white">
     <div class="container ">
         <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
             <div class="sub-style">
                 <h6 class="sub-title mb-0" style="color: #E94F37;">À propos de l’Institut</h6>
             </div>
             <h1 class="text-dark mb-4">Un espace vivant au service de la créativité et de la culture</h1>
             <p class="">
                 L’Institut d’Innovation et de Créativité Artistique et Culturelle-Félicienne VODOUNNON (IICAC-FV) est un lieu d’expression, de transmission et de transformation.
                 À travers ses espaces dédiés, ses activités accessibles à tous, ses ateliers, ses partenariats et son engagement social, l’Institut œuvre chaque jour pour
                 faire rayonner l’art et la culture sous toutes leurs formes. Nous croyons que chaque individu porte en lui un potentiel créatif à éveiller.
             </p>
         </div>
     </div>
 </div>
 <div class="container-fluid about bg-light mb-5">
     <div class="container">
         <div class="row g-5 align-items-center">
             <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">

                 <h4 class="px-3 mb-0 text-center mb-3" style="color: #E94F37;">IICAC-FV</h4>

                 <h4 class="mb-3">Que faut-il savoir sur l’Institut d’Innovation et de Créativité Artistique et Culturelle - Félicienne VODOUNNON ?</h4>

                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                             Notre Mission & Vision
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                         <div class="accordion-body">
                             <strong>Notre engagement envers la créativité.</strong><br>
                             L’Institut d’Innovation et de Créativité Artistique et Culturelle-Félicienne VODOUNNON (IICAC-FV) a pour mission de promouvoir l’expression artistique sous toutes ses formes. Nous croyons en une culture inclusive, vivante et accessible à tous.
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                             Nos Espaces Créatifs
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                         <div class="accordion-body">
                             <strong>Un lieu, mille possibilités.</strong><br>
                             Studios de création, salles d'exposition, espaces de formation et agora culturelle… chaque espace est conçu pour favoriser l’inspiration, la rencontre et la transmission.
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                             Activités & Ateliers
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                         <div class="accordion-body">
                             <strong>Apprendre, créer, partager.</strong><br>
                             Des ateliers pour enfants et adultes, des formations artistiques, des masterclasses et des résidences rythment la vie de l’Institut.
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                             Abonnements & Accès
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                         <div class="accordion-body">
                             <strong>Une culture accessible à tous.</strong><br>
                             Formules flexibles : Pass Découverte, Abonnement Mensuel, Formule Famille, Tarif Solidaire.
                         </div>
                     </div>
                 </div>


                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                             Partenariats & Collaborations
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                         <div class="accordion-body">
                             <strong>Un réseau engagé pour la culture.</strong><br>
                             L’IICAC-FV s’associe à des artistes, institutions, écoles et acteurs culturels pour construire des projets collectifs, organiser des expositions, soutenir des jeunes talents et favoriser les échanges à l’échelle locale, nationale et internationale.
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                             Impact Social & Culturel
                         </button>
                     </h2>
                     <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                         <div class="accordion-body">
                             <strong>Transformer par l’art et la culture.</strong><br>
                             À travers ses actions, l’IICAC-FV lutte contre l’exclusion sociale, valorise les savoirs traditionnels, favorise le dialogue intergénérationnel et contribue à l’épanouissement personnel et collectif des participants.
                         </div>
                     </div>
                 </div>

             </div>


             <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                 <div class="about-img pb-5 ">
                     <img src="img/dessin7.jpg" class="img-fluid main-img" alt="Image principale">

                     <div class="about-img-inner">
                         <img src="img/dessin6.png" alt="Mini image circulaire">
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>
 @endsection