@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">nom</label>
                <input id="nom" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="prenom">prenom</label>
                <input id="prenom" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input id="email" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input id="image" class="form-control" type="file">
            </div>
            <div class="form-group">
                <label for="tel">tel</label>
                <input id="tel" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="adresse">adresse</label>
                <input id="adresse" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="cours">cours</label>
                <input id="courss" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="fonctions">fonctions (formateur ou prestataire)</label>
                <input id="fonctions" class="form-control" type="text">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
