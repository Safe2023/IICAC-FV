<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card shadow mt-5">
                    <div class="text-center">
                        <h4>Modifier un plat</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('update_resto', $plat->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom du plat</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="{{ $plat->nom }}">
                            </div>

                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix (FCFA)</label>
                                <input type="number" name="prix" id="prix" class="form-control" value="{{ $plat->prix }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Image actuelle</label><br>
                                <img src="{{ asset($plat->image) }}" alt="Image du plat" width="150" style="object-fit:cover; height:100px; border-radius:8px;">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Changer l'image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-danger">Mettre à jour</button>
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