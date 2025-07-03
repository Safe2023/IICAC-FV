 @extends('layouts.index')
 @section('content')
<!--  <div class="container-fluid bg-breadcrumb" style="background-image: url('img/dance4.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;padding: 160px 0 60px 0;">
     <div class="container text-center py-5" style="max-width: 900px;">
         <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nos Événements</h1>
             <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                 <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                 <li class="breadcrumb-item"><a href="#">Pages</a></li>
                 <li class="breadcrumb-item active ">Evenements</li>
             </ol>
     </div>
 </div> -->

  <section class="position-relative" style="background-image: url('/img/img_event.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
    <div class="container text-center text-white position-relative" style="z-index: 1;">
        <h1 class="display-4 fw-bold">Nos Événements</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Événements</li>
            </ol>
        </nav>
    </div>
    <!-- Overlay sombre pour lisibilité du texte -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
</section>
 <div class="container-fluid service ">
     <div class="container py-5">
         <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
             <div class="sub-style">
                 <h4 class="sub-title mb-0">Tous les Événements</h4>
             </div>
             <h1 class="mb-4">Des expériences culturelles riches et variées</h1>
             <p class="mb-0">
                 Retrouvez notre programmation artistique et culturelle : spectacles, expositions, ateliers, rencontres...
                 Parcourez les événements à venir ou consultez nos archives pour revivre les temps forts.
                 Filtrez par date, catégorie ou public pour découvrir ce qui vous correspond.
             </p>
         </div>
         <form method="GET" action="{{ route('evenement') }}">
             <div class="row mb-4 justify-content-end">
                 <div class="col-md-10">
                     <div class="d-flex flex-wrap gap-3 justify-content-end">

                         <!-- Filtre Catégorie -->
                         <div class="input-group w-auto">
                             <span class="input-group-text bg-danger text-white border-danger">
                                 <i class="fas fa-layer-group"></i>
                             </span>
                             <select name="categorie_id" class="form-select border-danger text-dark">
                                 <option value="">Toutes les catégories</option>
                                 @foreach($categories as $categorie)
                                 <option value="{{ $categorie->id }}" {{ request('categorie_id') == $categorie->id ? 'selected' : '' }}>
                                     {{ $categorie->name_categorie }}
                                 </option>
                                 @endforeach
                             </select>
                         </div>

                         <!-- Filtre Public -->
                         <div class="input-group w-auto">
                             <span class="input-group-text bg-danger text-white border-danger">
                                 <i class="fas fa-users"></i>
                             </span>
                             <select name="public_cible_id" class="form-select border-danger text-dark">
                                 <option value="">Tous les publics</option>
                                 @foreach($cible as $cibles)
                                 <option value="{{ $cibles->id }}" {{ request('public_cible_id') == $cibles->id ? 'selected' : '' }}>
                                     {{ $cibles->cible }}
                                 </option>
                                 @endforeach
                             </select>
                         </div>

                         <!-- Bouton Filtrer -->
                         <div class="input-group w-auto">
                             <button type="submit" class="btn btn-danger">
                                 <i class="fas fa-search me-1"></i> Filtrer
                             </button>
                         </div>

                         <!-- Réinitialiser -->
                         <div class="input-group w-auto">
                             <a href="{{ route('evenement') }}" class="btn btn-outline-secondary">
                                 Réinitialiser
                             </a>
                         </div>

                     </div>
                 </div>
             </div>
         </form>


         <div class="row g-4 justify-content-center">
             @foreach ($evenements as $evenement)
             <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="blog-item rounded shadow-sm overflow-hidden position-relative">
                     @if($evenements->isEmpty())
                     <div class="text-center py-5">
                         <h5>Aucun événement trouvé pour cette catégorie.</h5>
                     </div>
                     @endif
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
                         <button class="btn btn-sm text-white rounded-pill px-4 py-2" style="background-color: #E94F37;" data-bs-toggle="modal" data-bs-target="#evenementModal{{ $evenement->id }}">
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
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                         </div>
                     </div>
                 </div>
             </div>

             @endforeach
             <div class="container d-flex justify-content-center mt-4">
                 @if ($evenements->hasPages())
                 <nav>
                     <ul class="pagination justify-content-center">
                         @if ($evenements->onFirstPage())
                         <li class="page-item disabled">
                             <span class="page-link text-white" style="background-color: rgb(233, 145, 131);">Précédent</span>
                         </li>
                         @else
                         <li class="page-item">
                             <a class="page-link text-white" style="background-color: #E94F37;" href="{{ $evenements->appends(request()->query())->previousPageUrl() }}" rel="prev">Précédent</a>
                         </li>
                         @endif

                         @foreach ($elements = $evenements->links()->elements[0] as $page => $url)
                         @if ($page == $evenements->currentPage())
                         <li class="page-item active">
                             <span class="page-link border-0 text-white" style="background-color: #E94F37;">{{ $page }}</span>
                         </li>
                         @else
                         <li class="page-item">
                             <a class="page-link text-dark border-0" href="{{ $url }}">{{ $page }}</a>
                         </li>
                         @endif
                         @endforeach

                         @if ($evenements->hasMorePages())
                         <li class="page-item">
                             <a class="page-link text-white" style="background-color:rgb(233, 145, 131);" href="{{ $evenements->appends(request()->query())->nextPageUrl() }}" rel="next">Suivant</a>
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
 <!-- SECTION GALERIE AVEC FILTRES -->
 <div class="container-fluid  bg-white">
     <div class="container py-3">

         <!-- TITRE DE SECTION -->
         <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
             <div class=" sub-style d-inline-block">
                 <h4 class="sub-title px-3 mb-0" style="color: #E94F37;">Galerie</h4>
             </div>
             <h1 class="text-dark mt-3">Voyage artistique et culturel</h1>
             <p class="">Explorez nos expositions, ateliers, spectacles et moments forts à travers une galerie immersive.</p>
         </div>

         <div class="row g-4">
             <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                 @foreach($galeries as $galerie)
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
                 @endforeach

             </div>
         </div>

         @endsection