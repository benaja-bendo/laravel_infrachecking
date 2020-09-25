@extends('layouts.app-admin')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Vous êtes connecté!') }}
                        <a href="{{ route("entite.create") }}">ajouter une entité</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('les entitées') }}</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">image</th>
                                <th scope="col">nom</th>
                                <th scope="col">actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($entites as $entite)
                                <tr>
                                    <td>
                                        <img class="rounded" src="{{$entite->image}}" width="50" height="50" alt="">
                                    </td>
                                    <th scope="row">{{$entite->nom_entite}}</th>
                                    <td>
                                        <a class="btn text-primary" href="">éditer</a>
                                        <a class="btn" href="#">deactivé</a>

                                        <form action="{{ url('entite/'.$entite->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger" style="display: inline-block">supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
