<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6 mt-5">
                <h2>Modifier un membre de l’équipe</h2>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('update_equipe', $equipe->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom_equipe" class="form-control" value="{{ old('nom_equipe', $equipe->nom_equipe) }}" placeholder="Votre nom">
                        @error('nom_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="poste" class="form-label">Poste</label>
                        <input type="text" name="poste_equipe" class="form-control" value="{{ old('poste_equipe', $equipe->poste_equipe) }}" placeholder="Votre poste">
                        @error('poste_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo actuelle</label><br>
                        <img src="{{ asset('storage/' . $equipe->photo_equipe) }}" width="100" alt="Photo actuelle" class="mb-2 rounded">
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Nouvelle photo (facultatif)</label>
                        <input type="file" name="photo_equipe" class="form-control" accept="image/*">
                        @error('photo_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" name="lien_facebook" class="form-control" value="{{ old('lien_facebook', $equipe->lien_facebook) }}" placeholder="Lien Facebook">
                        @error('lien_facebook') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" name="lien_instagram" class="form-control" value="{{ old('lien_instagram', $equipe->lien_instagram) }}" placeholder="Lien Instagram">
                        @error('lien_instagram') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="url" name="lien_linkedin" class="form-control" value="{{ old('lien_linkedin', $equipe->lien_linkedin) }}" placeholder="Lien LinkedIn">
                        @error('lien_linkedin') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Mettre à jour</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>