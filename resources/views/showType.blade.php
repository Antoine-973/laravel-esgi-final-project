<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le bon angle</title>

        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.3/css/all.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
        <div class="">
            <div class="flex justify-center text-center">
                <h3>Voici la liste des Pokemons type <i class="{{ $category->icon }}"></i></h3>
            </div>
            <div class="container">
                <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">État</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Types</th>
                    <th scope="col">Vendeur</th>
                    <th scope="col">Voir</th>
                    @if (Route::has('login'))
                        @auth
                        <th scope="col">Panier</th>
                        @else

                        @endauth
                    @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($productByType as $product)
                    <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><img class="card-img-top" src="/storage/products/{{ $product->user_id }}/{{ $product->image }}" alt="card image"></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->subtitle }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->price }}$</td>
                    <td>{{ isset($product->category->name) ? $product->category->name : "" }}</td>
                    <td>{{ isset($product->user->name) ? $product->user->name : "" }}</td>
                    <td><a href="{{ route('showProduct',$product->id) }}" type="button" class="btn btn-outline-info"><i class="bi bi-eye-fill"></i></a></td>
                    @if (Route::has('login'))
                        @auth
                        <td><a href="{{ route('storeCart', $product->id) }}" type="button" class="btn btn-outline-info"><i class="bi bi-bag-check"></i></a></td>
                        @else
                        @endauth
                    @endif
                    
                    </tr>
                    <tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">État</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Type</th>
                    <th scope="col">Vendeur</th>
                    <th scope="col">Voir</th>
                    @if (Route::has('login'))
                        @auth
                        <th scope="col">Panier</th>
                        @else

                        @endauth
                    @endif
                    </tr>
                </tfoot>
                </table>
            </div>
            <div class="flex justify-center text-center">
                <a href="{{ route('welcome') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left-square-fill"></i> Retour à la liste des articles en vente.</a>
            </div>
        </div>
    </body>
</html>