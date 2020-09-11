@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>QRcode</h2>
        <div class="text-center">
            {!! QrCode::size(500)->generate('google.com'); !!}
            <p>QRCode de l'application</p>
        </div>

    </div>
@endsection
