 @extends('layouts.index')
 @section('content')
 <style>
     .icone {
         border: 1px solid #E94F37;
     }

     .dxqdzxq {
         color: #E94F37;
         border: 1px solid #E94F37;
     }
 </style>
 <section class="position-relative" style="background-image: url('/img/img_event.jpg'); background-size: cover; background-position: center; padding: 120px 0;">
     <div class="container text-center text-white position-relative" style="z-index: 1;">
         <h1 class="display-4 fw-bold">Nous Contacter</h1>
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb justify-content-center">
                 <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                 <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
             </ol>
         </nav>
     </div>

     <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
 </section>
 <!-- Contact Start -->
 <div class="container-fluid contact  py-5">
     <div class="container ">
         <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
             <div class="sub-style">

                 <h5 class="sub-title mb-0" style="color: #E94F37;">Nous Contacter</h5>
             </div>
             <h1 class=" mb-4">Découvrez la vie du Centre au jour le jour</h1>
             <p class="mb-0 text-black-50">
                 Vous avez une question, une suggestion ou souhaitez collaborer avec l’IICAC-FV ? N’hésitez pas à nous écrire ! Notre équipe est à votre écoute pour répondre à toutes vos demandes concernant nos événements, ateliers ou abonnements.
             </p>
         </div>

         <div class="row g-4 align-items-center">
             <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                 <h2 class="display-5 mb-2">Entrer en contact</h2>
                 <p class="mb-4">
                     Vous souhaitez nous poser une question, nous faire une suggestion ou proposer une collaboration ? Remplissez simplement ce formulaire, et notre équipe vous répondra dans les meilleurs délais.
                 </p>
                 @if (session('success'))<div class="alert alert-success">{{session('success')}}</div>
                 @endif
                 @if (session('error'))<div class="alert alert-danger">{{session('error')}}</div>
                 @endif
                 <form action="{{route('envoie_mail')}}" method="post">
                     @csrf
                     <div class="row g-3">
                         <div class="col-lg-12 col-xl-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" name="nom_prenom" placeholder="Nom prenom">
                                 <label for="name">Nom prenom</label>
                             </div>
                         </div>
                         <div class="col-lg-12 col-xl-6">
                             <div class="form-floating">
                                 <input type="email" class="form-control" name="email" placeholder="Votre email">
                                 <label for="email">Votre email</label>
                             </div>
                         </div>
                         <div class="col-lg-12 col-xl-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" name="numero" placeholder="Ex:0195000000">
                                 <label for="phone">Ex:0195000000</label>
                             </div>
                         </div>
                         <div class="col-lg-12 col-xl-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" name="suject" placeholder="sujet">
                                 <label for="project">Sujet</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-floating">
                                 <textarea class="form-control " placeholder="Leave a message here" name="message" style="height: 160px"></textarea>
                                 <label for="message">Rediger votre message</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <button class="btn btn-light w-100 py-3 dxqdzxq" type="submit">Message envoyer</button>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="bg-transparent rounded">
                     <div class="d-flex flex-column align-items-center text-center mb-4">
                         <div class="bg-white d-flex align-items-center justify-content-center mb-3 icone btn btn-lg-square btn btn-light" style="width: 90px; height: 90px; border-radius: 50px;">
                             <i class="fa fa-map-marker-alt fa-2x "></i>
                         </div>
                         <h4 class="text-dark">Adresse</h4>
                         <p class="mb-0">Abomey-sodium_crypto_pwhash_scryptsalsa208sha256_str_verify, Bénin</p>
                     </div>
                     <div class="d-flex flex-column align-items-center text-center mb-4">
                         <div class="bg-white d-flex align-items-center justify-content-center mb-3 icone btn btn-lg-square btn btn-light" style="width: 90px; height: 90px; border-radius: 50px;">
                             <i class="fa fa-phone-alt fa-2x"></i>
                         </div>
                         <h4 class="text-dark">Téléphone</h4>
                         <p class="mb-0">+229 01 92 16 17 43</p>
                     </div>
                     <div class="d-flex flex-column align-items-center text-center">
                         <div class="bg-white d-flex align-items-center justify-content-center mb-3 icone btn btn-lg-square btn btn-light" style="width: 90px; height: 90px; border-radius: 50px;">
                             <i class="fa fa-envelope-open fa-2x"></i>
                         </div>
                         <h4 class="text-dark">Email</h4>
                         <p class="mb-0">iicacfv@gmail.com</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                 <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank" href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations"><i class="fa-brands fa-whatsapp"></i></i></a>
                     <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank" href="https://www.facebook.com/share/1dpd53Hw1d/."><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank" href="https://www.tiktok.com/@iicacfv_drabo"><i class="fa-brands fa-tiktok"></i></a>
                     <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank" href="https://www.instagram.com/iicacfv?igsh=cWdqNXVjZm1ocWxu"><i class="fab fa-instagram"></i></a>
                  
                 </div>
                 <div class="rounded h-100">
                     <iframe class="rounded w-100"
                         style="height: 500px;"
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9189709119084!2d-122.08424968469258!3d37.42206597982598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb6ad2b8e6f0f%3A0x3bfc1d967d8be3b7!2sGoogleplex!5e0!3m2!1sfr!2sfr!4v1621234567890"
                         loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"
                         allowfullscreen></iframe>
                 </div>
             </div>
         </div>
     </div>

     @endsection