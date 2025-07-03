<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <h2 class="mb-4 text-center">Ajouter une nouvelle galerie</h2>

            <div class="col-md-6">
                  @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                <form action="{{ route('galerie') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom_galerie" class="form-label">Nom de la galerie <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom_galerie" name="nom_galerie" value="{{ old('nom_galerie') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="categorie_id" class="form-label">Catégorie <span class="text-danger">*</span></label>
                        <select class="form-select" id="categorie_id" name="categorie_id" required>
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>
                                {{ $categorie->name_categorie }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="date_debut" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ old('date_debut') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date_fin" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ old('date_fin') }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo principale <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                    </div>

                    <div class="mb-3">
                        <label for="description_court" class="form-label">Description courte</label>
                        <textarea class="form-control" id="description_court" name="description_court" rows="3">{{ old('description_court') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-danger px-4">Ajouter la galerie</button>
                </form>
            </div>
        </div>

    </div>


</body>

</html>