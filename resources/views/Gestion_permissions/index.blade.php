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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Date</a>
                            <a href="#" class="card-link">heure</a>
                        </div>
                    </div>
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
