<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paiement en ligne') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="order-details my-5">
                    <h3>Détails de la commande</h3>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><img class="cart-img" src="" /> </td>
                                <td><p><b>Titre du cours</b></p><p>Par Nom du formateur</p></td>
                                <td class="text-right">19,99 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <form action="{{route('afterPayment')}}"  method="post" id="payment-form">
                        @csrf                    
                        <div class="form-group">
                            <div class="card-header">
                                <label for="card-element">
                                    Entrez votre carte de crédit
                                </label>
                            </div>
                            <div class="card-body">
                                <div id="card-element">
                                <!-- Stripe element -->
                                </div>
                                <!-- Display des erreurs -->
                                <div id="card-errors" role="alert"></div>
                                <input type="hidden" name="plan" value="" />
                            </div>
                        </div>
                        <div class="card-footer">
                          <button id="card-button" class="btn btn-lg btn-success" type="submit" data-secret="{{ $intent }}"> Payer </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                    Résumé
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p>Prix d'origine:</p>  
                            <p>19,99</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Taxe:</p>  
                            <p>3,00</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p><b>Prix total:</b></p>  
                            <p><b>22,99</b></p>
                        </div>
                        <small class="card-text">En passant votre commande, vous acceptez les conditions générales de vente de POKE-EBAY. Veuillez consulter notre notice protection de vos informations personnelles, notre notice cookies et notre notice annonces pubicitaires basées sur vos centres d'intérêt.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://js.stripe.com/v3/"></script>
<script>
    @php
        $stripe_key = 'pk_test_51JDXPIE3tpO6aovcd5LhbDm1ltKopdYFoos9a7w6C0fd2uOPgeLAXNMWK9TcsRFDV1e3iFYFDmlGZcsBL1WhEars00tb4JebxH';
    @endphp
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' });
    const elements = stripe.elements();
    const cardElement = elements.create('card', { style: style });
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    cardElement.mount('#card-element');
    cardElement.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

    stripe.handleCardPayment(clientSecret, cardElement, {
            payment_method_data: {
            }
        })
        .then(function(result) {
            console.log(result);
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                console.log(result);
                form.submit();
            }
        });
    });
</script>