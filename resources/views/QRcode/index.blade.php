@extends('layouts.app')

@section('content')

    <div class="container text-center" id="qrcode">
        <a href="{{ url('/nusers') }}">(ctrl+p) pour imprimer</a>
        <div class="text-center mt-5">
            {!! QrCode::size(500)->color(116, 175 ,226)->generate('Make me a QrCode!'); !!}
        </div>
    </div>

@endsection
