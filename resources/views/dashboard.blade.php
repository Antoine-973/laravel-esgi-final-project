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
                    <h4>Bonjour {{Auth::user()->name }},</h4>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
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
                                    <div class="btn-actions d-flex justify-content-center"><a href="edit/{{ $product->id }}" class="btn btn-warning">&emsp;Modifier&emsp;<i class="bi bi-pencil-square"></i></a></div>
                                    <br>
                                    <div class="btn-actions d-flex justify-content-center"><a href="delete/{{ $product->id }}" class="btn btn-danger">&ensp;Supprimer&ensp;<i class="bi bi-trash-fill"></i></a></div>
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
            </div>
        </div>
    </div>
</x-app-layout>
