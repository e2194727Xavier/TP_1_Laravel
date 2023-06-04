@extends('layout.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Étudiants')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste des étudiants</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($etudiants as $etudiant)
                            <tr>
                                
                                <td>{{ $etudiant->nom }}</td>
                                <td>{{ $etudiant->email }}</td>
                                <td>
                                    
                                <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-success btn-sm">Détails</a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $etudiants->links('pagination::bootstrap-4') }}
  
                @endsection