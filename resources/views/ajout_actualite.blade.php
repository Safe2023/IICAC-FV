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
                        <form action="{{ route('ajout_actualite') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
                            @csrf

                            <div class="mb-3">
                                <label for="image" class="form-label">Image d'illustration</label>
                                <input type="file" class="form-control" name="image_actu" id="image" required>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date de publication</label>
                                <input type="date" class="form-control" name="date_actu" id="date" required>
                            </div>

                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre de l’article</label>
                                <input type="text" class="form-control" name="titre_actu" id="titre" required>
                            </div>

                            <div class="mb-3">
                                <label for="contenu" class="form-label">Contenu / Description</label>
                                <textarea class="form-control" name="description_actu" id="contenu" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="lien" class="form-label">Lien de l’article (facultatif)</label>
                                <input type="url" class="form-control" name="lien_actu" id="lien" placeholder="https://...">
                            </div>

                            <button type="submit" class="btn btn-primary" style="background-color: #E94F37; border: none;">Publier l’actualité</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>