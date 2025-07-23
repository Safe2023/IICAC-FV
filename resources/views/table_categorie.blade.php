@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <!-- Bouton pour ouvrir le modal -->
<div class="text-center my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categorieModal">
        Ajouter une catégorie
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="categorieModal" tabindex="-1" aria-labelledby="categorieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title" id="categorieModalLabel">Ajouter une nouvelle catégorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            
            <div class="modal-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('categorie') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de la catégorie</label>
                        <input type="text" name="name_categorie" class="form-control" id="name" placeholder="Ex: Exposition, Atelier..." required>
                        @error('name_categorie')
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

        <div class="col-md-6">
             <h4 class="mb-4">Liste des galeries</h4>
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom de la catégorie</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table_categorie as $index => $table_categories)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>


                        <td>{{ $table_categories->name_categorie }}</td>

                        <td class="d-flex m-2">
                            <a href="{{ route('edit', $table_categories->id) }}" class="btn btn-sm btn-warning me-2"> <i class="bi bi-pencil-square"></i></a>

                            <form action="{{ route('delete', $table_categories->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection