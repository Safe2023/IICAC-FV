@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row">

        <!-- modal pour ajouter une cible -->
        <div class="text-center my-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cibleModal">
                Ajouter une cible
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="cibleModal" tabindex="-1" aria-labelledby="cibleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="cibleModalLabel">Gestion des publics cibles</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>

                    <div class="modal-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('cible') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom de la cible</label>
                                <input type="text" name="cible" class="form-control" id="name" placeholder="Ex: Exposition, Atelier..." required>
                                @error('name')
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
        <!-- tableau recapitulatif de cible -->
        <h4 class="mb-4">Liste des galeries</h4>
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom de la cible</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($table_cible as $index => $table_cibles)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>


                    <td>{{ $table_cibles->cible}}</td>

                    <td class="d-flex m-2" >
                        <a href="{{ route('edite', $table_cibles->id) }}" class="btn btn-sm btn-warning me-2"> <i class="bi bi-pencil-square"></i></a>

                        <form action="{{ route('deletes', $table_cibles->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Aucune cible enregistrée.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection