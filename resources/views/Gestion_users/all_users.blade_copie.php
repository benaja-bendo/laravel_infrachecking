@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tous les utilisateurs</h2>
        <div class="row">
            <div class="col-md-8">
                <info-user-component></info-user-component>
            </div>
            <div class="col-md-4">
{{--                                <div class="d-flex justify-content-end mb-4">--}}
{{--                                    <a class="btn btn-primary mr-3" href="{{ URL::to('users/export/')}}">Exporter en Excel</a>--}}
{{--                                    <a class="btn btn-primary mr-3" href="{{ URL::to('/users/pdf')}}">Exporter en PDF</a>--}}
{{--                                </div>--}}
                {{--                <div class="d-flex justify-content-end mb-4">--}}
                {{--                    <form class="form-inline my-2 my-lg-0">--}}
                {{--                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--                    </form>--}}
                {{--                </div>--}}
                {{--                <table class="table">--}}
                {{--                    <thead>--}}
                {{--                    <tr>--}}
                {{--                        <th scope="col">Nom</th>--}}
                {{--                        <th scope="col">tel</th>--}}
                {{--                        <th scope="col">action</th>--}}
                {{--                    </tr>--}}
                {{--                    </thead>--}}
                {{--                    <tbody>--}}
                {{--                    @foreach($utilisateurs as $utilisateur)--}}
                {{--                        <tr>--}}
                {{--                            <th scope="row">{{$utilisateur->name}}</th>--}}
                {{--                            <td>{{$utilisateur->tel}}</td>--}}
                {{--                            <td>--}}
                {{--                                <button>voir</button>--}}
                {{--                            </td>--}}
                {{--                        </tr>--}}
                {{--                    @endforeach--}}
                {{--                    </tbody>--}}
                {{--                </table>--}}
                <liste-user-component></liste-user-component>
            </div>
        </div>
    </div>
@endsection
