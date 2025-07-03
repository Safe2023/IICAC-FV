@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row">

        <div class="container my-4">
            <h4 class="mb-3">Ajouter actualités</h4>


            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#ajoutActualiteModal">
                + Ajouter une actualité
            </button>
            <div class="modal fade" id="ajoutActualiteModal" tabindex="-1" aria-labelledby="ajoutActualiteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
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


            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr> <th>#</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Lien</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($actualite as $index => $actu)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td style="width: 100px;">
                                <img src="{{ asset('storage/' . $actu->image_actu) }}" alt="Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                            </td>
                            <td>{{ $actu->titre_actu }}</td>
                            <td>{{ \Carbon\Carbon::parse($actu->date_actu)->format('d M Y') }}</td>
                            <td>{{ Str::limit($actu->description_actu, 50) }}</td>
                            <td><a href="{{ $actu->lien_actu }}" target="_blank">Voir</a></td>
                            <td>
                                <a href="{{ route('editx', $actu->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                <form action="{{ route('destroyx', $actu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
@endsection