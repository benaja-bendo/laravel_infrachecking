@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="permission">
            <div class="navigation">
                <div class="nav_onglet">
                </div>
                <div class="nav_content">
                    <tab-component></tab-component>
                </div>
            </div>

            <div class="content">
                <div class="content_item">
                    <tabcontent-component></tabcontent-component>
                </div>
                <div class="content_footer">
                    <h4>traitement de la permission</h4>
                    <div class="form-group">
                        <label for="message">Méssage(facultatif)</label>
                        <textarea id="message" class="form-control"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary">accepter</button>
                        <button class="btn btn-danger">refuser</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
