@extends('layouts.app')

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
                        <a href="{{ route('nUser') }}">ajouter un professeur</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 row">
        <div class="col-md-6">
            <form action="#">
                <div class="form-group">
                    <label for="matiere">Matiere</label>
                    <input class="form-control" type="text">
                </div>
                <div class="from-group">
                    <button class="btn btn-primary" type="submit">enregistrer</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">liste des matieres</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">nom</th>
                            <th scope="col">actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">XXXX</th>
                            <td>
                                <a href="#" class="btn">edit</a>
                                <a href="#" class="btn text-danger">delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
