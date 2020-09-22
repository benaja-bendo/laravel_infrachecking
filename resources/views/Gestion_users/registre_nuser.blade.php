@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">nom</label>
                <input name="name" id="nom" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="prenom">prenom</label>
                <input name="prenom"  id="prenom" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input name="email"  id="email" class="form-control" type="text">
            </div>
            {{--<div class="form-group">
                <label for="image">image</label>
                <input name="image"  id="image" class="form-control" type="file">
            </div>--}}
            <div class="form-group">
                <label for="tel">tel</label>
                <input name="tel"  id="tel" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="adresse">adresse</label>
                <input name="adresse"  id="adresse" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="cours">cours</label>
                <input name="cours"  id="cours" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="fonction">fonctions (formateur ou prestataire)</label>
                <input name="fonction"  id="fonction" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input name="password"  id="password" class="form-control" type="password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
