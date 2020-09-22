@extends('layouts.app-admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{route("entite.store")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nom_entite">Nom de l'entité</label>
                        <input name="nom_entite" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="image">logo ou image</label>
                        <input name="image" class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input name="password" class="form-control" type="password">
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">créé</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
