<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>POKE-EBAY</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Styles -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.3/css/all.css">

        @section('scripts')
        {!! NoCaptcha::renderJs() !!}
        @stop
    </head>

    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand btn btn-outline-light btn-lg" href="{{ route('welcome') }}">Home</a>
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></button>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cart') }}" class="nav-link">
                            <i class="bi bi-cart4"></i> Votre panier
                            @if(count(\Cart::session(Auth::user()->id)->getContent()) > 0)
                                <span class="badge bg-danger">
                                    {{ count(\Cart::session(Auth::user()->id)->getContent()) }}
                                </span>
                            @endif
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                    </li>
                    @endif
                    @endauth
                @endif
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-6 text-center">
                    <img class="rounded"  style="width: 20rem;" src="/storage/products/{{ $product->user_id }}/{{ $product->image }}" alt="card image">
                </div>
                <div class="col-6 d-flex justify-content-center text-center">
                    <div class="card">
                        <h4 class="card-header">Voici l'article de {{ $product->user->name }}</h4>
                        <div class="card-body">
                            <h5 class="card-title"><br>{{ $product->title }} <i class="{{ $product->category->icon }}"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->subtitle }}</h6>
                            <p class="card-text">
                                Description : <br>{{ $product->description}}<br><br>
                                Mise en ligne le : {{ $product->created_at }} <i class="bi bi-clock"></i>
                            </p>
                            @if (Route::has('login'))
                                @auth
                                <a href="{{ route('storeCart', $product->id) }}" type="button" class="btn btn-outline-success"><i class="bi bi-bag-check"></i> Ajouter au panier <i class="bi bi-bag-check"></i></a>
                                @else

                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Les commentaires
                    </div>
                    <ul class="list-group list-group-flush">
                    @foreach($comments as $comment)
                        <li class="list-group-item">
                            <p class="alert alert-dark">
                                Commentaire de {{ isset($comment->user->name) ? $comment->user->name : "" }}<br><br>
                                {{ $comment->title }}<br><br>
                                {{ $comment->description }}
                            </p>
                            Le {{ $comment->created_at }} <i class="bi bi-clock"></i>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="container">
                @if (Route::has('login'))
                    <div class="border border-dark">
                        @auth
                        {!! Form::open(['route' => ['createComment', $product->id]]) !!}
                        @csrf
                            <span class="input-group-text">Ecrire un commentaire</span>
                            Titre : {!! Form::text('title'); !!}
                            Commentaire : {!! Form::text('description'); !!}
                            {!! Form::submit('Envoyer le commentaire',array('class' => 'btn btn-success')); !!}
                            <div class="form-group row justify-content">
                                {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                @error('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        {!! Form::close() !!}
                        @else
                        <div class="text-center">
                            <p>Vous devez être connecté pour écrire un commentaire.</p><br>
                            <a href="{{ route('login') }}" class="btn btn-outline-dark">Se connecter</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark">S'inscrire</a>
                            @endif

                        </div>
                        @endauth
                    </div>
                @endif
            </div>
            <div class="flex justify-center">
                <br><br>
                <a href="{{ route('listProducts') }}" type="button" class="btn btn-dark btn-lg"><i class="bi bi-arrow-left-square-fill"></i> Retour à la liste des articles en vente.</a>
            </div>
        </div>
        @yield('scripts')
    </body>
</html>