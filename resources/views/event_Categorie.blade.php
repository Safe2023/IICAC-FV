 @extends('layouts.index')
 @section('content')

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
  
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
</section>

 <div class="container-fluid service ">
     <div class="container py-5">
         <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
             <div class="sub-style">
                 <h4 class="sub-title  mb-0" style="font-size: 15px;">Nos Événements</h4>
             </div>
             <h1 class="mb-4">Des expériences culturelles riches et variées</h1>
             <!--  <p class="mb-0">
                Retrouvez notre programmation artistique et culturelle : spectacles, expositions, ateliers, rencontres...
                Parcourez les événements à venir ou consultez nos archives pour revivre les temps forts.
                Filtrez par date, catégorie ou public pour découvrir ce qui vous correspond.
            </p> -->
         </div>

          <form method="GET" action="{{ route('event_Categorie', $categorieActive->id) }}">
    <div class="row mb-4 justify-content-end">
        <div class="col-md-10">
            <div class="d-flex flex-wrap gap-3 justify-content-end">

                <!-- Public cible -->
                <div class="input-group w-auto">
                    <span class="input-group-text bg-danger text-white border-danger">
                        <i class="fas fa-users"></i>
                    </span>
                    <select name="public_cible_id" class="form-select border-danger text-dark">
                        <option value="">Choisir un public</option>
                        @foreach($cible as $cibles)
                        <option value="{{ $cibles->id }}" {{ request('public_cible_id') == $cibles->id ? 'selected' : '' }}>
                            {{ $cibles->cible }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- Bouton filtre -->
                <div class="input-group w-auto">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-search me-1"></i> Filtrer
                    </button>
                </div>

                <!-- Bouton Réinitialiser -->
                <div class="input-group w-auto">
                    <a href="{{ route('event_Categorie', $categorieActive->id) }}" class="btn btn-outline-secondary">
                        Réinitialiser
                    </a>
                </div>

            </div>
        </div>
    </div>
</form>
>
        <div class="row g-4 justify-content-center">
    @if($evenements->isEmpty())
        <div class="text-center mt-5">
            <h5 class="text-muted">Aucun événement disponible pour cette catégorie.</h5>
        </div>
    @else
        @foreach ($evenements as $evenement)
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
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

                                <div  class="position-absolute top-0 end-0 bg-danger px-3 py-1 text-white small fw-semibold" style="background-color: #E94F37; border-top-right-radius: 8px;">
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
<a href="https://wa.me/2290192161743" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-3">Reserver</a>                        </div>
                    </div>
                </div>
            </div>

            @endforeach
    @endif
</div>

     </div>
 </div>

 @endsection