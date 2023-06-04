@extends('layout.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Étudiants')
@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{route ('etudiant.index')}}" class="btn btn-outline-primary btn-sm">Retour</a>
        <h2 class="display-6 mt-5">
            Étudiant #{{$etudiant->id}}
        </h2>
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Nom : </strong>{{$etudiant->nom}}</h5>
                        <p class="card-text"><strong>Date de naissance :</strong> {{$etudiant->date_of_birth}}</p>
                        <p class="card-text"><strong>Adresse :</strong> {{$etudiant->address}}</p>
                        <p class="card-text"><strong>Email : </strong>{{$etudiant->email}}</p>
                        <p class="card-text"><strong>Téléphone :</strong> {{$etudiant->phone}}</p>
                        <p class="card-text"><strong>Ville :</strong> {{$etudiant->etudiantHasVille->nom}}</p>
                        </div>
                        </div>
 
    </div>
</div>
<div class="row">
    <div class="col-6">
        <a href="{{route('etudiant.edit',$etudiant->id)}}" class="btn btn-success">Modifier</a><!-- Si nous avons plusieurs on doit mettre entre crochet [] -->
    </div>
    <div class="col-6">
   
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Effacer
        </button>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             Êtes-vous sûr de vouloir effacer l'étudiant : {{$etudiant ->id}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <form method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Effacer" class="btn btn-danger">
        </form>
            </div>
        </div>
    </div>
</div>
@endsection
