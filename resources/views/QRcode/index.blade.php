@extends('layouts.app')

@section('content')

    <div class="container" id="qrcode">
        <h2>QRcode <small>(ctrl+p) pour imprimer</small></h2>
        <div class="text-center">
            {!! QrCode::size(500)->color(116, 175 ,226)->generate('Make me a QrCode!'); !!}
            <p>QRCode de l'application</p>
            <button type="button" onclick="printJS('docs/printjs.pdf')">
                Print PDF
            </button>
        </div>
    </div>

@endsection
