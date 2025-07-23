@extends('layouts.head')
@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Bouton pour ouvrir le modal -->
        <div class="text-center my-4">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#galerieModal">
                Ajouter une galerie
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="galerieModal" tabindex="-1" aria-labelledby="galerieModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="galerieModalLabel">Ajouter une nouvelle galerie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>

                    <div class="modal-body">
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

                            <div class="text-end">
                                <button type="submit" class="btn btn-success px-4">Ajouter la galerie</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Tableau des galeries -->
        <div class="col-md-7">
            <h4 class="mb-4">Liste des galeries</h4>
 @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Nom de la galerie</th>
                        <th>Catégorie</th>
                        <th>Période</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($table_galerie as $index => $table_galeries)
                    <tr>
                        <td>{{ $index + 1 }}</td>

                        <td style="width: 100px;">
                            <img src="{{ asset('storage/' . $table_galeries->photo) }}" alt="Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                        </td>

                        <td>{{ $table_galeries->nom_galerie }}</td>

                        <td>{{ $table_galeries->categorie->name_categorie ?? 'Non classé' }}</td>

                        <td>
                            @if($table_galeries->date_debut)
                            {{ \Carbon\Carbon::parse($table_galeries->date_debut)->format('d/m/Y') }}
                            @if($table_galeries->date_fin)
                            au {{ \Carbon\Carbon::parse($table_galeries->date_fin)->format('d/m/Y') }}
                            @endif
                            @else
                            <span class="text-muted">Non précisée</span>
                            @endif
                        </td>

                        <td>{{ \Illuminate\Support\Str::limit($table_galeries->description_court, 50) }}</td>

                        <td class="d-flex m-2">
                            <a href="{{ route('edites', $table_galeries->id) }}" class="btn btn-sm btn-warning mb-1"> <i class="bi bi-pencil-square"></i></a>

                            <form action="{{ route('suprimer', $table_galeries->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Aucune galerie enregistrée.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection