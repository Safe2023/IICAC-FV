@extends('layouts.head')
@section('content')
    <div class="container">
        <div class="row">

        <!-- Bouton pour ouvrir le modal -->
<div class="text-center my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#evenementModal">
        Ajouter un événement
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="evenementModal" tabindex="-1" aria-labelledby="evenementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-scrollable">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title" id="evenementModalLabel">Ajouter un événement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            
            <div class="modal-body">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('ajout_event') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom_event" class="form-label">Nom de l'événement</label>
                        <input type="text" name="nom_event" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="petite_description" class="form-label">Petite description</label>
                        <textarea name="petite_description" class="form-control" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description_complete" class="form-label">Description complète</label>
                        <textarea name="description_complete" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="date_debut" class="form-label">Date de début</label>
                            <input type="date" name="date_debut" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="date_fin" class="form-label">Date de fin</label>
                            <input type="date" name="date_fin" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="heure_debut" class="form-label">Heure de début</label>
                            <input type="time" name="heure_debut" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="heure_fin" class="form-label">Heure de fin</label>
                            <input type="time" name="heure_fin" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="lieu" class="form-label">Lieu</label>
                        <input type="text" name="lieu" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="categorie_id" class="form-label">Catégorie</label>
                        <select name="categorie_id" class="form-select">
                            <option value="">Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name_categorie }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="public_cible_id" class="form-label">Public cible</label>
                        <select name="public_cible_id" class="form-select">
                            <option value="">Choisir un public</option>
                            @foreach($cible as $cibles)
                            <option value="{{ $cibles->id }}">{{ $cibles->cible }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" name="prix" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Enregistrer l'événement</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Public cible</th>
                        <th>Période</th>
                        <th>Heure</th>
                        <th>Lieu</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Description complete</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($table_evenement as $index => $table_evenement)
                    <tr>
                        <td>{{ $index + 1 }}</td>

                        <td style="width: 90px;">
                            @if($table_evenement->image)
                            <img src="{{ asset('storage/' . $table_evenement->image) }}" alt="Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                            @else
                            <span class="text-muted">Aucune</span>
                            @endif
                        </td>

                        <td>{{ $table_evenement->nom_event }}</td>

                        <td>{{ $table_evenement->categorie->name_categorie ?? 'Non classé' }}</td>

                        <td>{{ $table_evenement->publicCible->cible ?? 'Tout public' }}</td>

                        <td>
                            @if($table_evenement->date_debut)
                            {{ \Carbon\Carbon::parse($table_evenement->date_debut)->format('d/m/Y') }}
                            @if($table_evenement->date_fin)
                            au {{ \Carbon\Carbon::parse($table_evenement->date_fin)->format('d/m/Y') }}
                            @endif
                            @else
                            <span class="text-muted">Non précisée</span>
                            @endif
                        </td>

                        <td>
                            {{ $table_evenement->heure_debut ?? '--:--' }} - {{ $table_evenement->heure_fin ?? '--:--' }}
                        </td>

                        <td>{{ $table_evenement->lieu ?? 'Non précisé' }}</td>

                        <td>
                            @if($table_evenement->prix)
                            {{ number_format($table_evenement->prix, 0, ',', ' ') }} FCFA
                            @else
                            Gratuit
                            @endif
                        </td>

                        <td>{{ \Illuminate\Support\Str::limit($table_evenement->petite_description, 50) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($table_evenement->description_complete) }}</td>
                        <td class="d-flex m-2">
                            <a href="{{ route('editees', $table_evenement->id) }}" class="btn btn-sm btn-warning mb-1"> <i class="bi bi-pencil-square"></i></a>

                            <form action="{{ route('delete_event', $table_evenement->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="text-center">Aucun événement trouvé.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
@endsection