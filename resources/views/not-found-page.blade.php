@extends('layouts.website.layout-website')
@section('content')
    <div class="notfound-body">
    <div class="notfound-container">
        <div class='notfound-card'>
            <h1>404</h1>
            <h2>Oops! Page Not Found!</h2>
            <p>
                Il semble que la page que vous recherchez <br />
                n'existe pas ou a peut-être été supprimée.
            </p>
            <div>
                <a href="{{ route('home-page') }}" class="btn btn-link">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</div>
@endsection