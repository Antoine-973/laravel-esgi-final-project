<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Votre Profil</h1>
                    <h4>Bonjour {{Auth::user()->name }}</h4>
                    <form action="{{ route('update', $id = Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Pseudo')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Mot de passe')" />

                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                         type="password"
                                         name="password_confirmation" required />
                            </div>

                            <x-button class="ml-4">
                                {{ __('Confirmer') }}
                            </x-button>
                    </form>
                </div>
                <div class="container col-12">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
