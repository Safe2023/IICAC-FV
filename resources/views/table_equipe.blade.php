@extends('layouts.head')
@section('content')

<div class="row">
    <div class="text-center my-4">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#equipeModal">
            Ajouter un membre
        </button>
    </div>

    <!-- Modal d'ajout -->
    <div class="modal fade" id="equipeModal" tabindex="-1" aria-labelledby="equipeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un membre de l'équipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('ajout_equipe') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom_equipe" class="form-control" placeholder="Votre nom">
                            @error('nom_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="poste" class="form-label">Poste</label>
                            <input type="text" name="poste_equipe" class="form-control" placeholder="Votre poste">
                            @error('poste_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" name="photo_equipe" class="form-control" accept="image/*">
                            @error('photo_equipe') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="url" name="lien_facebook" class="form-control" placeholder="Lien Facebook">
                            @error('lien_facebook') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="url" name="lien_instagram" class="form-control" placeholder="Lien Instagram">
                            @error('lien_instagram') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <input type="url" name="lien_linkedin" class="form-control" placeholder="Lien LinkedIn">
                            @error('lien_linkedin') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau de l’équipe -->
    <div class="col-md-10 mx-auto">
        <h4 class="mb-4">Liste des membres de l'équipe</h4>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Poste</th>
                        <th style="min-width: 120px;">Facebook</th>
                        <th style="min-width: 120px;">LinkedIn</th>
                        <th style="min-width: 120px;">Instagram</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($equipe as $index => $equipe)
                    <tr>
                        <td>{{ $index + 1 }}</td>

                        <td style="width: 100px;">
                            <img src="{{ asset('storage/' . $equipe->photo_equipe) }}" alt="Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                        </td>

                        <td class="text-nowrap">{{ $equipe->nom_equipe }}</td>
                        <td class="text-nowrap">{{ $equipe->poste_equipe }}</td>

                        <td style="max-width: 150px;" class="text-truncate">
                            <a href="{{ $equipe->lien_facebook }}" target="_blank">{{ $equipe->lien_facebook }}</a>
                        </td>
                        <td style="max-width: 150px;" class="text-truncate">
                            <a href="{{ $equipe->lien_linkedin }}" target="_blank">{{ $equipe->lien_linkedin }}</a>
                        </td>
                        <td style="max-width: 150px;" class="text-truncate">
                            <a href="{{ $equipe->lien_instagram }}" target="_blank">{{ $equipe->lien_instagram }}</a>
                        </td>

                        <td class="d-flex flex-wrap gap-1">
                            <a href="{{ route('update_equipe', $equipe->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('destroy_equipe', $equipe->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Aucun membre enregistré.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection