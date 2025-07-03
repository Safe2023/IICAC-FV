 @extends('layouts.index')
 @section('content')
 <!-- <div class="container-fluid bg-breadcrumb position-relative" style="background-image: url('img/imag_actualite.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 160px 0 60px 0;">

  
     <div class="overlay"></div>
   
    <div class="container text-center py-5 position-relative" style="max-width: 900px;">
        <h3 class="tdisplay-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="color: #E94F37;">Nos Actualités</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item" style="color: #E94F37;"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active" style="color: #E94F37;">Actualités</li>
        </ol>
    </div>
 </div> -->

 <section class="position-relative" style="background-image: url('/img/img_actualite.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
     <div class="container text-center text-white position-relative" style="z-index: 1;">
         <h1 class="display-4 fw-bold">Nos Actualités</h1>
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb justify-content-center">
                 <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                 <li class="breadcrumb-item active text-white" aria-current="page">Actualités</li>
             </ol>
         </nav>
     </div>
     <!-- Overlay sombre pour lisibilité du texte -->
     <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
 </section>

 </div>
 <div class="container-fluid py-5 bg-light">
     <div class="container ">
         <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
             <div class="sub-style">
                 <h4 class="sub-title mb-0" style="color: #E94F37;">Nos Actualités</h4>
             </div>
             <h1 class=" mb-4">Découvrez la vie du Centre au jour le jour</h1>
             <p class="mb-0 ">
                 Suivez les dernières nouvelles de l'IICAC-FV : entretiens avec nos artistes, coulisses de nos événements, nouveautés, projets à venir et plus encore.
                 Un aperçu vivant et inspirant de notre univers créatif.
             </p>
             <p>Dans l’actualité de l’artisanat, on observe une renaissance de l’intérêt pour les produits artisanaux et locaux, alimentée par une volonté croissante de durabilité, d’authenticité et de soutien aux petites entreprises. Les artisans adoptent des pratiques écoresponsables, utilisent des matériaux durables et mettent en avant leur savoir-faire unique pour se démarquer sur le marché. Parallèlement, les plateformes en ligne facilitent l’accès aux produits artisanaux, permettant aux artisans de toucher un public mondial. Cette tendance témoigne d’un retour à l’appréciation du travail manuel et de la valeur des objets faits à la main dans une société de plus en plus industrialisée.</p>
         </div>
         <div class="row g-4">
             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                 @foreach ($actualite as $actu)
                 <div class="bg-white rounded shadow-sm overflow-hidden h-100">
                     <img src="{{ asset('storage/' . $actu->image_actu) }}" class="img-fluid w-100" alt="Article 1">
                     <div class="p-4">
                         <small class="text-muted"><i class="far fa-calendar-alt me-2"></i>{{ \Carbon\Carbon::parse($actu->date_actu)->format('d M Y') }}</small>
                         <h5 class="mt-2 mb-3" style="color: #2C3E50;">{{ $actu->titre_actu }}</h5>
                         <p class="">{{ Str::limit($actu->description_actu, 50) }}</p>
                         <a href="{{ $actu->lien_actu }}" class="fw-bold" style="color: #E94F37;">Lire l'article <i class="fas fa-arrow-right ms-2"></i></a>
                     </div>
                 </div>
                  @endforeach
             </div>

         </div>

     </div>
 </div>
 @endsection