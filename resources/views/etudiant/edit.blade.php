@extends('layout.app')
@section('title', "Modification étudiant")
@section('titleHeader', 'Modification étudiant')
@section('content')

    <div class="row mt-5 justify-content-center">

        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                <div class="card-header">
                    Modification de l'étudiant
                </div>
                <div class="card-body">
                    <label for="title">Nom</label>
                    <input type="text" id="title" class="form-control" value="{{ $etudiant->nom}}" name="nom"><!-- Le nom doit être le même que celui dans la BD -->
                    <label for="address">Adresse</label>
                    <input type='text' name="address" id="address" class="form-control" value="{{ $etudiant->address}}"></input>
                    <label for="phone">Téléphone</label>
                    <input type='text' name="phone" id="phone" class="form-control" value="{{ $etudiant->phone}}"></input>
                    <label for="email">Email</label>
                    <input type='text' name="email" id="email" class="form-control" value="{{ $etudiant->email}}"></input>
                    <label for="date">Date de naissance</label>
                    <input type='date' name="date_of_birth" id="date" class="form-control" value="{{ $etudiant->date_of_birth}}"></input>
                    <label for="villes">Villes</label>
                    <select name="ville_id" id="villes">
                        @foreach($villes as $ville)
                        <option value="{{ $ville->id }}" {{ $ville->id == $etudiant->ville_id ? 'selected' : '' }}>
                        {{ $ville->nom }}
                         </option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" value="Modifier" class="btn btn-success">
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection