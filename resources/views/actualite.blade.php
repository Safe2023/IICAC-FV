 @extends('layouts.index')
 @section('content')


 <section class="position-relative" style="background-image: url('/img/img_actualite.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
     <div class="container text-center text-white position-relative" style="z-index: 1;">
         <h1 class="display-4 fw-bold text-white">Nos Actualités</h1>
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
                 <h4 class="sub-title mb-0" style="color: #E94F37;">Actualités</h4>
             </div>
             <h1 class=" mb-4">Découvrez la vie du Centre au jour le jour</h1>
             <p class="mb-0 ">
                 Suivez les dernières nouvelles de l'IICAC-FV : entretiens avec nos artistes, coulisses de nos événements, nouveautés, projets à venir et plus encore.
                 Un aperçu vivant et inspirant de notre univers créatif.
             </p>
             <p>Dans l’actualité de l’artisanat, on observe une renaissance de l’intérêt pour les produits artisanaux et locaux, alimentée par une volonté croissante de durabilité, d’authenticité et de soutien aux petites entreprises. Les artisans adoptent des pratiques écoresponsables, utilisent des matériaux durables et mettent en avant leur savoir-faire unique pour se démarquer sur le marché. Parallèlement, les plateformes en ligne facilitent l’accès aux produits artisanaux, permettant aux artisans de toucher un public mondial. Cette tendance témoigne d’un retour à l’appréciation du travail manuel et de la valeur des objets faits à la main dans une société de plus en plus industrialisée.</p>
         </div>
         <div class="row g-4">
             @foreach ($actualite as $actu)
            <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="card h-100 border-0 shadow-sm">
        <div style="height: 250px; overflow: hidden;">
            <img src="{{ asset('storage/' . $actu->image_actu) }}" class="w-100 h-100" style="object-fit: cover;" alt="Image actualité">
        </div>
        <div class="card-body d-flex flex-column justify-content-between" style="background-color: #f9f9f9;">
            <div>
                <small class="text-muted">
                    <i class="far fa-calendar-alt me-2"></i>
                    {{ \Carbon\Carbon::parse($actu->date_actu)->format('d M Y') }}
                </small>
                <h5 class="mt-2 mb-3" style="color: #2C3E50;">{{ $actu->titre_actu }}</h5>
                <p class="mb-3">{{ Str::limit($actu->description_actu, 50) }}</p>
            </div>
            <a href="{{ $actu->lien_actu }}" class="fw-bold mt-auto" style="color: #E94F37;">
                Lire l'article <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>

             @endforeach

             <div class="container d-flex justify-content-center mt-4">
                 @if ($actualite->hasPages())
                 <nav>
                     <ul class="pagination justify-content-center">
                         @if ($actualite->onFirstPage())
                         <li class="page-item disabled">
                             <span class="page-link text-white" style="background-color: rgb(233, 145, 131);">Précédent</span>
                         </li>
                         @else
                         <li class="page-item">
                             <a class="page-link text-white" style="background-color: #E94F37;" href="{{ $actualite->appends(request()->query())->previousPageUrl() }}" rel="prev">Précédent</a>
                         </li>
                         @endif

                         @foreach ($elements = $actualite->links()->elements[0] as $page => $url)
                         @if ($page == $actualite->currentPage())
                         <li class="page-item active">
                             <span class="page-link border-0 text-white" style="background-color: #E94F37;">{{ $page }}</span>
                         </li>
                         @else
                         <li class="page-item">
                             <a class="page-link text-dark border-0" href="{{ $url }}">{{ $page }}</a>
                         </li>
                         @endif
                         @endforeach

                         @if ($actualite->hasMorePages())
                         <li class="page-item">
                             <a class="page-link text-white" style="background-color:rgb(233, 145, 131);" href="{{ $actualite->appends(request()->query())->nextPageUrl() }}" rel="next">Suivant</a>
                         </li>
                         @else
                         <li class="page-item disabled">
                             <span class="page-link text-white" style="background-color:rgb(233, 145, 131);">Suivant</span>
                         </li>
                         @endif

                     </ul>
                 </nav>
                 @endif

             </div>
         </div>

     </div>
 </div>
 @endsection