<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="container">
                    <h2 class="mb-4">Modifier catégorie</h2>

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('update', $categorie->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de la catégorie</label>
                            <input type="text" name="name_categorie" value="{{ $categorie->name_categorie }}" class="form-control" id="name" placeholder="Ex: Exposition, Atelier..." required>

                            @error('name_categorie')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>