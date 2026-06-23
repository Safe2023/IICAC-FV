@extends('layouts.index')
@section('content')

{{--
    Page dédiée : FESTAKA 2026 — Le Festival des Intelligences Créatives
    Institut Félicienne VODOUNNON — Abomey-Calavi (Drabô) — du 22 au 26 juillet 2026
    Page statique. Les couleurs sont limitées au conteneur .festaka pour ne pas
    impacter le reste du site. Affiches dans /public/img/festaka/.
--}}

<style>
    .festaka {
        --fk-navy: #16294F;
        --fk-navy-soft: #1d3460;
        --fk-orange: #F26522;
        --fk-orange-soft: #f47b41;
        --fk-cream: #FBF6EC;
        --fk-gold: #F4C430;
    }

    /* HERO */
    .festaka-hero {
        position: relative;
        background:
            linear-gradient(135deg, rgba(22, 41, 79, 0.94), rgba(22, 41, 79, 0.86)),
            url('/img/festaka/affiche_pourquoi.jpg');
        background-size: cover;
        background-position: center 20%;
        color: #fff;
        padding: 120px 0 90px;
        overflow: hidden;
    }

    .festaka-hero .badge-edition {
        display: inline-block;
        background: var(--fk-orange);
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        padding: 6px 18px;
        border-radius: 50rem;
        text-transform: uppercase;
        font-size: 13px;
    }

    .festaka-hero h1 {
        color: #fff;
        font-weight: 700;
        font-size: clamp(2.6rem, 6vw, 4.5rem);
        line-height: 1.05;
        margin: 18px 0 6px;
    }

    .festaka-hero h1 .accent {
        color: var(--fk-orange);
    }

    .festaka-hero .tagline {
        font-size: 1.15rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--fk-gold);
    }

    .festaka-hero .lead-info {
        font-size: 1.05rem;
        color: rgba(255, 255, 255, 0.92);
    }

    .festaka-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin: 26px 0 30px;
    }

    .festaka-meta .meta-pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.25);
        padding: 12px 20px;
        border-radius: 12px;
        font-weight: 600;
    }

    .festaka-meta .meta-pill i {
        color: var(--fk-orange);
        font-size: 1.2rem;
    }

    .festaka-meta .meta-pill.free {
        background: var(--fk-orange);
        border-color: var(--fk-orange);
    }

    .festaka-meta .meta-pill.free i {
        color: #fff;
    }

    .btn-fk {
        background: var(--fk-orange);
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 50rem;
        padding: 13px 30px;
        transition: all .3s ease;
    }

    .btn-fk:hover {
        background: #fff;
        color: var(--fk-navy);
    }

    .btn-fk-outline {
        background: transparent;
        color: #fff;
        font-weight: 600;
        border: 2px solid rgba(255, 255, 255, 0.7);
        border-radius: 50rem;
        padding: 11px 28px;
        transition: all .3s ease;
    }

    .btn-fk-outline:hover {
        background: #fff;
        color: var(--fk-navy);
        border-color: #fff;
    }

    /* COUNTDOWN */
    .festaka-countdown {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 8px;
    }

    .festaka-countdown .cd-box {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 12px 18px;
        text-align: center;
        min-width: 78px;
    }

    .festaka-countdown .cd-num {
        font-size: 2rem;
        font-weight: 700;
        line-height: 1;
        color: var(--fk-gold);
        font-family: "Playfair Display", serif;
    }

    .festaka-countdown .cd-label {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: .85;
    }

    /* SECTION TITLES */
    .festaka .fk-eyebrow {
        color: var(--fk-orange);
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .festaka .fk-heading {
        color: var(--fk-navy);
        font-weight: 700;
    }

    /* POURQUOI */
    .festaka-why {
        background: var(--fk-cream);
        padding: 80px 0;
    }

    .why-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        height: 100%;
        border-left: 4px solid var(--fk-orange);
        box-shadow: 0 10px 30px rgba(22, 41, 79, 0.06);
        transition: transform .3s ease;
    }

    .why-card:hover {
        transform: translateY(-6px);
    }

    .why-card .icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--fk-navy);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 16px;
    }

    .why-card h5 {
        color: var(--fk-navy);
        font-weight: 700;
    }

    /* PROGRAMME */
    .festaka-program {
        padding: 80px 0;
    }

    .prog-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 14px;
        padding: 26px 20px;
        text-align: center;
        height: 100%;
        transition: all .3s ease;
    }

    .prog-card:hover {
        border-color: var(--fk-orange);
        box-shadow: 0 12px 28px rgba(242, 101, 34, 0.15);
        transform: translateY(-5px);
    }

    .prog-card .prog-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--fk-navy), var(--fk-navy-soft));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 16px;
        transition: background .3s ease;
    }

    .prog-card:hover .prog-icon {
        background: linear-gradient(135deg, var(--fk-orange), var(--fk-orange-soft));
    }

    .prog-card h6 {
        color: var(--fk-navy);
        font-weight: 700;
        margin: 0;
        font-size: 1rem;
    }

    /* CHIFFRES */
    .festaka-stats {
        background: var(--fk-navy);
        color: #fff;
        padding: 70px 0;
    }

    .stat-num {
        font-family: "Playfair Display", serif;
        font-size: clamp(2.4rem, 5vw, 3.4rem);
        font-weight: 700;
        color: var(--fk-gold);
        line-height: 1;
    }

    .stat-label {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 13px;
        opacity: .9;
        margin-top: 8px;
    }

    /* AFFICHES */
    .festaka-posters {
        padding: 80px 0;
        background: var(--fk-cream);
    }

    .poster-frame {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(22, 41, 79, 0.18);
        cursor: pointer;
        transition: transform .35s ease;
    }

    .poster-frame:hover {
        transform: scale(1.02);
    }

    .poster-frame img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* COMMUNICATION / RÉSEAUX */
    .festaka-com {
        padding: 80px 0;
    }

    .com-social a {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--fk-navy);
        color: #fff;
        font-size: 1.3rem;
        margin: 6px;
        transition: all .3s ease;
    }

    .com-social a:hover {
        background: var(--fk-orange);
        transform: translateY(-4px);
    }

    .hashtags span {
        display: inline-block;
        background: rgba(242, 101, 34, 0.12);
        color: var(--fk-orange);
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50rem;
        margin: 5px;
    }

    /* PARTENAIRES */
    .festaka-partners {
        padding: 70px 0;
        background: var(--fk-cream);
    }

    .partner-badge {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 18px 22px;
        font-weight: 600;
        color: var(--fk-navy);
        text-align: center;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80px;
        transition: all .3s ease;
    }

    .partner-badge:hover {
        border-color: var(--fk-orange);
        color: var(--fk-orange);
    }

    /* INFOS PRATIQUES */
    .festaka-infos {
        padding: 80px 0;
    }

    .info-line {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        margin-bottom: 22px;
    }

    .info-line .info-ic {
        width: 48px;
        height: 48px;
        flex: 0 0 48px;
        border-radius: 12px;
        background: var(--fk-orange);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    .info-line h6 {
        color: var(--fk-navy);
        font-weight: 700;
        margin-bottom: 2px;
    }

    .info-line a {
        color: #555;
    }

    .info-line a:hover {
        color: var(--fk-orange);
    }

    /* Modal affiche */
    .poster-modal .modal-content {
        background: transparent;
        border: none;
    }

    .poster-modal img {
        width: 100%;
        border-radius: 12px;
    }
</style>

<div class="festaka">

    <!-- ============ HERO ============ -->
    <section class="festaka-hero">
        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="badge-edition">1ʳᵉ édition</span>
                    <h1>FESTAKA <span class="accent">2026</span></h1>
                    <p class="tagline mb-3">Le Festival des Intelligences Créatives</p>
                    <p class="lead-info mb-1">
                        Du 22 au 26 juillet 2026, l’Institut Félicienne VODOUNNON à Abomey-Calavi
                        accueille la toute première édition du Festival des Intelligences Créatives.
                    </p>
                    <p class="lead-info"><em>« Penser, créer, rayonner. »</em></p>

                    <div class="festaka-meta">
                        <span class="meta-pill"><i class="fas fa-calendar-alt"></i> 22 – 26 juillet 2026</span>
                        <span class="meta-pill"><i class="fas fa-map-marker-alt"></i> Institut F. VODOUNNON · Abomey-Calavi</span>
                    </div>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20participer%20au%20FESTAKA%202026"
                            target="_blank" class="btn-fk">
                            <i class="fab fa-whatsapp me-2"></i>Je participe
                        </a>
                        <a href="#programme" class="btn-fk-outline">Voir le programme</a>
                        <a href="mailto:contact@iicac.org?subject=Partenariat%20FESTAKA%202026&body=Bonjour%2C%20nous%20souhaitons%20devenir%20partenaire%20du%20FESTAKA%202026."
                            class="btn-fk-outline">Devenir partenaire</a>
                    </div>

                    <!-- Compte à rebours -->
                    <div class="festaka-countdown" id="festakaCountdown" aria-label="Compte à rebours avant le festival">
                        <div class="cd-box"><div class="cd-num" data-cd="days">--</div><div class="cd-label">Jours</div></div>
                        <div class="cd-box"><div class="cd-num" data-cd="hours">--</div><div class="cd-label">Heures</div></div>
                        <div class="cd-box"><div class="cd-num" data-cd="minutes">--</div><div class="cd-label">Min</div></div>
                        <div class="cd-box"><div class="cd-num" data-cd="seconds">--</div><div class="cd-label">Sec</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ POURQUOI FESTAKA ============ -->
    <section class="festaka-why">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fk-eyebrow mb-1">Pourquoi FESTAKA ?</p>
                <h2 class="fk-heading">Parce que les talents béninois méritent une scène</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="why-card">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <h5>Une terre de talents</h5>
                        <p class="mb-0 text-muted">Abomey-Calavi regorge de talents qui n’ont pas encore de scène à leur hauteur.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="why-card">
                        <div class="icon"><i class="fas fa-trophy"></i></div>
                        <h5>Croire en la jeunesse</h5>
                        <p class="mb-0 text-muted">Un jeune qui gagne une compétition scolaire se souvient toute sa vie que quelqu’un a cru en lui.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="why-card">
                        <div class="icon"><i class="fas fa-palette"></i></div>
                        <h5>Révéler les artistes</h5>
                        <p class="mb-0 text-muted">Un artiste qui expose son œuvre pour la première fois ne redevient jamais tout à fait le même.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.2s">
                <h3 class="fk-heading" style="font-weight:700;">FESTAKA 2026, c’est ça.</h3>
                <p class="tagline" style="color: var(--fk-orange); letter-spacing:3px;">PENSER · CRÉER · RAYONNER</p>
            </div>
        </div>
    </section>

    <!-- ============ AU PROGRAMME ============ -->
    <section class="festaka-program" id="programme">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fk-eyebrow mb-1">Au programme</p>
                <h2 class="fk-heading">Cinq jours d’activités culturelles, éducatives et créatives</h2>
            </div>
            <div class="row g-4">
                @php
                    $programme = [
                        ['icon' => 'fa-bullhorn',     'titre' => 'Caravane culturelle'],
                        ['icon' => 'fa-trophy',       'titre' => 'Championnat du Savoir et de la Créativité'],
                        ['icon' => 'fa-store',        'titre' => 'Mini-marché des arts'],
                        ['icon' => 'fa-microphone',   'titre' => 'Conférences-débats sur les ICC'],
                        ['icon' => 'fa-image',        'titre' => 'Exposition d’objets d’art'],
                        ['icon' => 'fa-music',        'titre' => 'Soirées artistiques'],
                        ['icon' => 'fa-headphones',   'titre' => 'Ensemble vocal « Les Airs Sacrés »'],
                        ['icon' => 'fa-film',         'titre' => 'Projection cinématographique'],
                        ['icon' => 'fa-dumbbell',     'titre' => 'Fitness communautaire'],
                        ['icon' => 'fa-door-open',    'titre' => 'Journée portes ouvertes'],
                    ];
                @endphp
                @foreach ($programme as $i => $item)
                <div class="col-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.{{ $i % 4 + 1 }}s">
                    <div class="prog-card">
                        <div class="prog-icon"><i class="fas {{ $item['icon'] }}"></i></div>
                        <h6>{{ $item['titre'] }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ============ CHIFFRES CLÉS ============ -->
    <section class="festaka-stats">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="stat-num">10 000</div>
                    <div class="stat-label">Participants attendus</div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="stat-num">500+</div>
                    <div class="stat-label">Jeunes compétiteurs</div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="stat-num">30+</div>
                    <div class="stat-label">Établissements scolaires</div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="stat-num">20+</div>
                    <div class="stat-label">Partenaires mobilisés</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ AFFICHES ============ -->
    <section class="festaka-posters">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fk-eyebrow mb-1">Communication</p>
                <h2 class="fk-heading">Les affiches officielles</h2>
                <p class="text-muted">Téléchargez et partagez largement autour de vous. <strong>#FESTAKA2026</strong></p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="poster-frame" data-bs-toggle="modal" data-bs-target="#posterModal1">
                        <img src="/img/festaka/affiche_officiel.jpg" alt="Affiche officielle FESTAKA 2026">
                    </div>
                    <div class="text-center mt-3">
                        <a href="/img/festaka/affiche_officiel.jpg" download class="btn-fk">
                            <i class="fas fa-download me-2"></i>Télécharger l’affiche
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="poster-frame" data-bs-toggle="modal" data-bs-target="#posterModal2">
                        <img src="/img/festaka/affiche_pourquoi.jpg" alt="Affiche FESTAKA 2026 — Pourquoi FESTAKA">
                    </div>
                    <div class="text-center mt-3">
                        <a href="/img/festaka/affiche_pourquoi.jpg" download class="btn-fk">
                            <i class="fas fa-download me-2"></i>Télécharger l’affiche
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SUIVEZ LA COMMUNICATION ============ -->
    <section class="festaka-com">
        <div class="container text-center">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="fk-eyebrow mb-1">Restez connectés</p>
                <h2 class="fk-heading mb-3">Suivez FESTAKA 2026 au quotidien</h2>
                <p class="text-muted mb-4">
                    Capsules vidéo, témoignages, décompte avant le festival, directs et couverture en temps réel.
                    Rejoignez la communauté et partagez !
                </p>
                <div class="com-social mb-4">
                    <a href="https://www.facebook.com/share/1dpd53Hw1d/." target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://wa.me/2290192161743?text=Bonjour%2C%20je%20souhaite%20suivre%20le%20FESTAKA%202026" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.tiktok.com/@iicacfv_drabo" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/iicacfv?igsh=cWdqNXVjZm1ocWxu" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="hashtags">
                    <span>#FESTAKA2026</span>
                    <span>#IntelligencesCreatives</span>
                    <span>#AbomeyCalavi</span>
                    <span>#BeninCulturel</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PARTENAIRES ============ -->
    <section class="festaka-partners">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fk-eyebrow mb-1">Ils nous accompagnent</p>
                <h2 class="fk-heading">Les partenaires de FESTAKA 2026</h2>
            </div>
            <div class="row g-3 justify-content-center">
                @php
                    $partenaires = [
                        'Mairie d’Abomey-Calavi', 'GAB — La Générale des Assurances du Bénin',
                        'SOBEBRA', 'Magic Récré', 'REVOO', 'CinéDoc Bénin',
                        'SAFE Immo Agency', 'MECAPRO Garage', 'EVAS — Ensemble Vocal les Airs Sacrés',
                    ];
                @endphp
                @foreach ($partenaires as $p)
                <div class="col-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="partner-badge">{{ $p }}</div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="mailto:contact@iicac.org?subject=Partenariat%20FESTAKA%202026" class="btn-fk">
                    Devenir partenaire
                </a>
            </div>
        </div>
    </section>

    <!-- ============ INFOS PRATIQUES ============ -->
    <section class="festaka-infos">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fk-eyebrow mb-1">Infos pratiques</p>
                    <h2 class="fk-heading mb-4">Venez nous rencontrer</h2>

                    <div class="info-line">
                        <div class="info-ic"><i class="fas fa-calendar-alt"></i></div>
                        <div>
                            <h6>Dates</h6>
                            <span class="text-muted">Du 22 au 26 juillet 2026</span>
                        </div>
                    </div>
                    <div class="info-line">
                        <div class="info-ic"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h6>Lieu</h6>
                            <a href="https://maps.app.goo.gl/vxio3rNB2HW5P4qSA" target="_blank">
                                Institut Félicienne VODOUNNON — Abomey-Calavi, quartier Drabô
                                (4ᵉ rue à droite après le bar Taureau)
                            </a>
                        </div>
                    </div>
                    <div class="info-line">
                        <div class="info-ic"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h6>Téléphone</h6>
                            <a href="tel:+2290192161743">+229 01 92 16 17 43</a> ·
                            <a href="tel:+2290197649369">+229 01 97 64 93 69</a>
                        </div>
                    </div>
                    <div class="info-line">
                        <div class="info-ic"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h6>Email</h6>
                            <a href="mailto:contact@iicac.org">contact@iicac.org</a>
                        </div>
                    </div>
                    <div class="info-line">
                        <div class="info-ic"><i class="fas fa-ticket-alt"></i></div>
                        <div>
                            <h6>Inscriptions &amp; renseignements</h6>
                            <a href="mailto:contact@iicac.org">contact@iicac.org</a> ·
                            <a href="https://wa.me/2290192161743" target="_blank">WhatsApp</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps?q=Institut%20Felicienne%20Vodounnon%20Abomey-Calavi&output=embed"
                            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Localisation FESTAKA 2026"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ MODALES AFFICHES ============ -->
    <div class="modal fade poster-modal" id="posterModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <img src="/img/festaka/affiche_officiel.jpg" alt="Affiche officielle FESTAKA 2026">
            </div>
        </div>
    </div>
    <div class="modal fade poster-modal" id="posterModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <img src="/img/festaka/affiche_pourquoi.jpg" alt="Affiche FESTAKA 2026 — Pourquoi FESTAKA">
            </div>
        </div>
    </div>

</div>

<script>
    // Compte à rebours jusqu'au 22 juillet 2026 (00:00, heure du Bénin UTC+1)
    (function () {
        var target = new Date('2026-07-22T00:00:00+01:00').getTime();
        var box = document.getElementById('festakaCountdown');
        if (!box) return;

        function pad(n) { return n < 10 ? '0' + n : '' + n; }

        function tick() {
            var diff = target - new Date().getTime();
            if (diff <= 0) {
                box.querySelector('[data-cd="days"]').textContent = '0';
                box.querySelector('[data-cd="hours"]').textContent = '00';
                box.querySelector('[data-cd="minutes"]').textContent = '00';
                box.querySelector('[data-cd="seconds"]').textContent = '00';
                return;
            }
            var d = Math.floor(diff / 86400000);
            var h = Math.floor((diff % 86400000) / 3600000);
            var m = Math.floor((diff % 3600000) / 60000);
            var s = Math.floor((diff % 60000) / 1000);
            box.querySelector('[data-cd="days"]').textContent = d;
            box.querySelector('[data-cd="hours"]').textContent = pad(h);
            box.querySelector('[data-cd="minutes"]').textContent = pad(m);
            box.querySelector('[data-cd="seconds"]').textContent = pad(s);
        }
        tick();
        setInterval(tick, 1000);
    })();
</script>

@endsection
