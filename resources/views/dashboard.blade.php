<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4>Bonjour {{Auth::user()->name }}, voici la liste de vos pokémons en vente :</h4>
                </div>
                <div class="container col-12">
                    <div class="row">
                    @if(count(Auth::user()->products) > 0)
                        @foreach(Auth::user()->products as $product)
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="/storage/products/{{ $product->user_id }}/{{ $product->image }}" alt="card image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $product->title }}</h6>
                                    <p class="card-text">{{ $product->subtitle}}</p>
                                    <span><i class="bi bi-clock"></i> {{ $product->created_at }} </span>
                                    <br><br>
                                    <div class="d-flex justify-content-center"><a href="{{ route('edit',$product->id) }}" class="btn btn-warning">&emsp;Modifier&emsp;<i class="bi bi-pencil-square"></i></a></div>
                                    <br>
                                    <div class="d-flex justify-content-center"><a href="delete/{{ $product->id }}" class="btn btn-danger">&ensp;Supprimer&ensp;<i class="bi bi-trash-fill"></i></a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                    <div class="row">
                        <h5>Vous n'avez aucun article en vente.</h5>
                        <div class="btn-actions d-flex justify-content-center"><a href="create" class="btn btn-primary">Vendre un article ?</a></div>
                    </div>
                    @endif
                </div>
                @if(count(Auth::user()->payments) > 0)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h4>Voici la liste de vos ventes terminées :</h4>
                        <h5 class="text-right text-success ">Total de vos gains : {{ $total_gain }} €</h5>
                    </div>
                    <div class="container col-12">
                        <div class="row">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pokémon</th>
                                    <th scope="col">Mail de l'acheteur</th>
                                    <th scope="col">Total de la vente</th>
                                    <th scope="col">Gain</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach(Auth::user()->payments as $payment)
                                    <tr>
                                        <th scope="row">{{ $payment->id }}</th>
                                        <td>{{ $payment->product->title }}</td>
                                        <td>{{ $payment->email }}</td>
                                        <td>{{ $payment->amount }} €</td>
                                        <td>{{ $payment->seller_part }} €</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
