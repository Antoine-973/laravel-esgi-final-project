<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4>Veuillez décrire le pokemon en vente :</h4>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                {!! Form::open(['route' => 'store', 'files' => true]) !!}
                    @csrf
                    Nom du Pokémon : {!! Form::text('title'); !!}<br><br>
                    Type : {!! Form::select('category_id', $categories); !!}<br><br>
                    Son état : {!! Form::text('subtitle'); !!}<br><br>
                    Description : {!! Form::textarea('description'); !!}<br><br>
                    Image : {!! Form::file('image'); !!}<br><br>
                    Prix : {!! Form::number('price', 'price'); !!}<br><br>
                        <br><br>
                        <button type="submit" class="btn btn-lg btn-primary">Vendre l'article</button>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>