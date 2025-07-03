<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="text-center">
                        <h4>Ajouter un événement</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('ajout_event') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nom_event" class="form-label">Nom de l'événement</label>
                                <input type="text" name="nom_event" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="petite_description" class="form-label">Petite description</label>
                                <textarea name="petite_description" class="form-control" rows="2" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="description_complete" class="form-label">Description complète</label>
                                <textarea name="description_complete" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="date_debut" class="form-label">Date de début</label>
                                    <input type="date" name="date_debut" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="date_fin" class="form-label">Date de fin</label>
                                    <input type="date" name="date_fin" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="heure_debut" class="form-label">Heure de début</label>
                                    <input type="time" name="heure_debut" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="heure_fin" class="form-label">Heure de fin</label>
                                    <input type="time" name="heure_fin" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="lieu" class="form-label">Lieu</label>
                                <input type="text" name="lieu" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="categorie_id" class="form-label">Catégorie</label>
                                <select name="categorie_id" class="form-select">
                                    <option value="">Choisir une catégorie</option>
                                    @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name_categorie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="public_cible_id" class="form-label">Public cible</label>
                                <select name="public_cible_id" class="form-select">
                                    <option value="">Choisir un public</option>
                                    @foreach($cible as $cibles)
                                    <option value="{{ $cibles->id }}">{{ $cibles->cible }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix</label>
                                <input type="text" name="prix" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">

                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Enregistrer l'événement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>