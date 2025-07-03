 @extends('layouts.index')
 @section('content')
<form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="titre" class="form-label">Titre de l’événement</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
    </div>

    <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie</label>
        <select class="form-select" id="categorie" name="categorie" required>
            <option value="">Choisir une catégorie</option>
            <option value="exposition">Exposition</option>
            <option value="atelier">Atelier</option>
            <option value="spectacle">Spectacle</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="public" class="form-label">Public Cible</label>
        <select class="form-select" id="public" name="public">
            <option value="tout-public">Tout public</option>
            <option value="adulte">Adulte</option>
            <option value="enfant">Enfant</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date de l’événement</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <div class="mb-3">
        <label for="horaire" class="form-label">Horaires</label>
        <input type="text" class="form-control" id="horaire" name="horaire" placeholder="Ex: 10h00 - 17h00">
    </div>

    <div class="mb-3">
        <label for="lieu" class="form-label">Lieu</label>
        <input type="text" class="form-control" id="lieu" name="lieu">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description complète</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Décrivez l'événement, son ambiance, ses intervenants, etc."></textarea>
    </div>

    <div class="mb-3">
        <label for="objectifs" class="form-label">Objectifs / Public visé / Prérequis (pour les ateliers)</label>
        <textarea class="form-control" id="objectifs" name="objectifs" rows="3" placeholder="Ex: Initier les enfants à la peinture sur verre..."></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image de l’événement</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <!-- Galerie photos/vidéos -->
    <div class="mb-3">
        <label for="galerie[]" class="form-label">Galerie Photos / Vidéos</label>
        <input type="file" class="form-control" id="galerie" name="galerie[]" multiple>
    </div>

    <!-- Tarif -->
    <div class="mb-3">
        <label for="tarif" class="form-label">Tarif</label>
        <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Ex: Gratuit, 2.000 FCFA, etc.">
    </div>

    <!-- Lien de réservation -->
    <div class="mb-3">
        <label for="lien_reservation" class="form-label">Lien de réservation (si applicable)</label>
        <input type="url" class="form-control" id="lien_reservation" name="lien_reservation" placeholder="https://...">
    </div>

    <!-- Statut -->
    <div class="mb-3">
        <label for="statut" class="form-label">Statut</label>
        <select class="form-select" id="statut" name="statut">
            <option value="à_venir">À venir</option>
            <option value="passé">Passé</option>
        </select>
    </div>

    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #E94F37;">Créer l’événement</button>
</form>
@endsection