<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon panier') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4>Vous avez {{ count(\Cart::session(Auth::user()->id)->getContent()) }} pokemon dans votre panier :</h4>
                </div>
                @if(count(\Cart::session(Auth::user()->id)->getContent()) > 0)
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Photo du Pokemon</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prix</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(\Cart::session(Auth::user()->id)->getContent() as $product)
                            <tr>
                                <td><img class="img-thumbnail" src="../storage/products/{{ $product->model->user_id }}/{{ $product->model->image }}" alt="card image"></td>
                                <td>{{ $product->model->title }}</td>
                                <td>{{ $product->model->price }}$</td>
                                <td>
                                    <a href="{{ route('destroyCart', $product->id) }}" type="button" class="btn btn-outline-secondary"><i class="bi bi-hourglass-bottom"></i></a>
                                    <a href="{{ route('destroyCart', $product->id) }}" type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">Photo du Pokemon</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prix</th>
                                <th scope="col"></th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('emptyCart') }}" type="button" class="btn btn-block btn-lg  btn-light"><i class="bi bi-trash"></i> Vider le panier <i class="bi bi-trash"></i></a>
                    </div>
                    @php 
                        $taxe = \Cart::getTotal() / 7;
                        $rounded = round($taxe,2);
                    @endphp
                    <p class="text-right">
                        Sous total : {{ \Cart::getSubtotal() }} euros <br><br>
                        Taxe : {{ $rounded }} euros <br><br>
                        Total : {{ \Cart::getTotal() + $rounded }} euros <br><br><br>
                        <a href="{{ route('payment') }}" type="button" class="btn btn-outline-success btn-lg"><i class="bi bi-patch-check-fill"></i>Acheter</a>
                    </p>
                </div>
                @else
                <div class="text-center">
                    <h4 class="my-5"><i class="bi bi-cart-x"></i> Panier vide ! <i class="bi bi-cart-x"></i></h4>
                </div>
                @endif
                <div class="col-6-md">
                    <a href="{{ route('welcome') }}" type="button" class="btn btn-outline-secondary"><i class="bi bi-arrow-return-left"></i>Continuer son shopping</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>