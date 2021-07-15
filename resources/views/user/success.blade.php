<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paiement réussi') }}
        </h2>
    </x-slot>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <img class="img-thumbnail" src="/images/payment-success.svg">
        </div>
        <div class="row alert text-success text-center">
            <h3>Votre paiement a été effectué avec succès !</h3>
            <h6>Votre commande va vous être envoyée.</h6>
        </div>
        <div class="row">
            <img class="img-thumbnail" src="/images/payment-success.svg">
        </div>
    </div>
</x-app-layout>