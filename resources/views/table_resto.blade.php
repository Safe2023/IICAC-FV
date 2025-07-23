@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <!-- Bouton pour ouvrir le modal -->
<div class="text-center my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#platModal">
        Ajouter un plat
    </button>
</div>

<!-- Modal d'ajout de plat -->
<div class="modal fade" id="platModal" tabindex="-1" aria-labelledby="platModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title" id="platModalLabel">Ajouter un nouveau plat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            
            <div class="modal-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('ajout_resto') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom du plat</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="{{ old('nom') }}" placeholder="Ex: Pizza, Attiéké poisson..." required>
                        @error('nom')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix (FCFA)</label>
                        <input type="number" name="prix" class="form-control" id="prix" value="{{ old('prix') }}" placeholder="Ex: 2500" required>
                        @error('prix')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image du plat</label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                        @error('image')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="col-md-9">
     @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    <table class="table table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix (FCFA)</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($table_resto as $index => $plat)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $plat->nom }}</td>
                <td>{{ $plat->prix }}</td>
                <td>
                    @if($plat->image)
                        <img src="{{ asset('storage/'.$plat->image) }}" alt="plat" width="80" class="img-thumbnail">
                    @else
                        <span class="text-muted">Aucune image</span>
                    @endif
                </td>
                <td class="d-flex m-2">
                    <a href="{{ route('edit_resto', $plat->id) }}" class="btn btn-sm btn-warning me-2">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <form action="{{ route('delete_resto', $plat->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Aucun plat enregistré.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
                                              
@endsection