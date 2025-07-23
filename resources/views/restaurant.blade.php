 @extends('layouts.index')
 @section('content')
 <style>
   .card-hover .card-body {
     transition: background-color 0.3s ease, transform 0.3s ease;
   }

   .card-hover:hover .card-body {
     background-color: #fcecea;
     transform: scale(1.03);
     border-top: 1px solid #e5e5e5;
   }

   .card-hover .btn-outline-danger {
     transition: background-color 0.3s ease, color 0.3s ease;
   }

   .card-hover:hover .btn-outline-danger {
     background-color: #E94F37;
     color: #fff;
   }
 </style>
 <div id="carouselResto" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
     <!-- Slide 1 -->
     <div class="carousel-item active">
       <img src="/img/cuisine1.webp" class="d-block w-100" alt="Image 1" style="height: 550px; object-fit: cover;">
       <div class="carousel-caption d-none d-md-block">
         <h3 class="text-white">Des plats savoureux</h3>
         <p>Une cuisine locale et internationale raffinée.</p>
       </div>
     </div>

     <!-- Slide 2 -->
     <div class="carousel-item">
       <img src="/img/plat3.jpg" class="d-block w-100" alt="Image 2" style="height: 550px; object-fit: cover;">
       <div class="carousel-caption d-none d-md-block">
         <h3 class="text-white">Un cadre chaleureux</h3>
         <p>Profitez d'une ambiance conviviale et élégante.</p>
       </div>
     </div>

     <!-- Slide 3 -->
     <div class="carousel-item">
       <img src="/img/x1.jpg" class="d-block w-100" alt="Image 3" style="height: 550px; object-fit: cover;">
       <div class="carousel-caption d-none d-md-block">
         <h3 class="text-white">Service de qualité</h3>
         <p>Un personnel attentionné pour une expérience unique.</p>
       </div>
     </div>
   </div>

   <!-- Contrôles (flèches gauche/droite) -->
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselResto" data-bs-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselResto" data-bs-slide="next">
     <span class="carousel-control-next-icon"></span>
   </button>
 </div>

 <div class="container">
   <div class="row justify-content-center">
     <div class="col-lg-12 bg-light p-5 rounded shadow-sm">
       <h2 class="text-center text-uppercase fw-bold mb-4" style="color: #E94F37;">
         Dégustez nos plats savoureux au restaurant IICAC-FV
       </h2>
       <p class="fs-5 text-center mb-4" style="color: #2C3E50;">
         Une cuisine locale et variée vous attend chaque jour dans un cadre convivial et chaleureux.
         Découvrez nos menus équilibrés, préparés avec des produits frais et de qualité.
       </p>

       <p class="mb-3" style="color: #2C3E50;">
         Que vous soyez étudiant, personnel ou visiteur, notre service de restauration vous propose :
       </p>

       <ul class="mb-4" style="color: #2C3E50; list-style: square;">
         <li>Des plats traditionnels et modernes adaptés à tous les goûts</li>
         <li>Des formules complètes : entrée, plat, dessert</li>
         <li>Un service rapide et un accueil chaleureux</li>
         <li>Des menus à prix accessibles</li>
         <li><strong>Des boissons naturelles à base de fruits frais, sans sucre ajouté</strong></li>
       </ul>

       <p style="color: #2C3E50;">
         Nous avons à cœur de proposer une alimentation saine et savoureuse pour tous.
         Nos plats sont élaborés quotidiennement par une équipe passionnée et soucieuse de votre bien-être.
       </p>

       <div class="text-center mt-4">
         <a class="btn btn-primary rounded-pill text-white py-3 px-5" target="_blank" href="https://wa.me/2290192161743?">Effectuer une reservation</a>
       </div>

     </div>
   </div>
 </div>

 <div class="container-fluid py-5" style="background-color: #f9f9f9;">
   
   <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="sub-style d-inline-block">
       <h4 class="sub-title mb-0" style="color: #E94F37; font-size: 17px;">Notre Menu</h4>
     </div>
     <h1 class="text-dark mt-3">Un voyage culinaire riche en saveurs</h1>
     <p class="">Explorez nos plats faits maison, préparés avec passion à partir d’ingrédients frais et locaux.</p>
   </div>

   <div class="row justify-content-center gx-4 gy-4 px-4">
     @foreach ($plats as $plat)
     <div class="col-md-6 col-lg-3">
       <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
         <img src="{{ asset('storage/' . $plat->image) }}" class="card-img-top" alt="{{ $plat->nom }}" style="height: 250px; object-fit: cover;">
         <div class="card-body text-center">
           <h5 class="card-title fw-bold">{{ $plat->nom }}</h5>
           <p class="text-danger fw-semibold mb-3">{{($plat->prix) }} FCFA</p>
           <a href="https://wa.me/2290192161743?text=Bonjour%2C%20je%vpudrai%20commander%20se%20d'plat" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-3">
             Commander
           </a>
         </div>
       </div>
     </div>
     @endforeach

     <div class="container d-flex justify-content-center mt-4">
       @if ($plats->hasPages())
       <nav>
         <ul class="pagination justify-content-center">
           @if ($plats->onFirstPage())
           <li class="page-item disabled">
             <span class="page-link text-white" style="background-color: rgb(233, 145, 131);">Précédent</span>
           </li>
           @else
           <li class="page-item">
             <a class="page-link text-white" style="background-color: #E94F37;" href="{{ $plats->appends(request()->query())->previousPageUrl() }}" rel="prev">Précédent</a>
           </li>
           @endif

           @foreach ($elements = $plats->links()->elements[0] as $page => $url)
           @if ($page == $plats->currentPage())
           <li class="page-item active">
             <span class="page-link border-0 text-white" style="background-color: #E94F37;">{{ $page }}</span>
           </li>
           @else
           <li class="page-item">
             <a class="page-link text-dark border-0" href="{{ $url }}">{{ $page }}</a>
           </li>
           @endif
           @endforeach

           @if ($plats->hasMorePages())
           <li class="page-item">
             <a class="page-link text-white" style="background-color:rgb(233, 145, 131);" href="{{ $plats->appends(request()->query())->nextPageUrl() }}" rel="next">Suivant</a>
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





 @endsection