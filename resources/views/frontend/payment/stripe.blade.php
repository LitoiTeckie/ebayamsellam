@extends('frontend.master_dashboard')
@section('main')

{{-- @section('title')
   Stripe Payment
@endsection --}}

<style>

.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>


 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Accueil</a>
                    <span></span> Paiement Stripe
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Paiement Stripe</h3>
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                	<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Détails de votre commande</h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">

 <table class="table no-border">
        <tbody>

        @if(Session::has('coupon'))

         <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">SousTotal</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">{{ $cartTotal }} Fcfa</h4>
                </td>
            </tr>

            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Coupon </h6>
                </td>
                <td class="cart_total_amount">
                    <h6 class="text-brand text-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</h6>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Réduction</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">{{ session()->get('coupon')['discount_amount'] }} Fcfa</h4>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">{{ session()->get('coupon')['total_amount'] }} Fcfa</h4>
                </td>
            </tr>

        @else



            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">{{ $cartTotal }} Fcfa</h4>
                </td>
            </tr>
     @endif

        </tbody>
    </table>





    </div>
</div>


                </div>


<div class="col-lg-6">
<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Payer </h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">


  <form action="{{ route('stripe.order') }} " method="post" id="payment-form">
        @csrf
    <div class="form-row">
        <label for="card-element">
        Credit or debit card

  <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
  <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
  <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
  <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
  <input type="hidden" name="region_id" value="{{ $data['region_id'] }}">
  <input type="hidden" name="ville_id" value="{{ $data['ville_id'] }}">
  <input type="hidden" name="quartier_id" value="{{ $data['quartier_id'] }}">
  <input type="hidden" name="address" value="{{ $data['shipping_address'] }}">
  <input type="hidden" name="notes" value="{{ $data['notes'] }}">


        </label>

        <div id="card-element">
        </div>
        <div id="card-errors" role="alert"></div>
    </div>
    <br>
    <button class="btn btn-primary">Soumettre le Paiement</button>
    </form>


    </div>
</div>



                </div>
            </div>
        </div>


<script type="text/javascript">
        var stripe = Stripe('pk_test_51MwGMCIDQA0sO73sup162A3g5CeIT2pCvG7v4jKtVSQmFv0YlnHWGFqpa7X1Dk954WyYuFqgG98R6ev08roOnBuC00YC72LEIs');
        var elements = stripe.elements();

        var style = {
        base: {
            color: '#32325d',
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
        var card = elements.create('card', {style: style});
        card.mount('#card-element');
        card.on('change', function(event) {
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
        stripe.createToken(card).then(function(result) {
            if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            stripeTokenHandler(result.token);
            }
        });
        });
        function stripeTokenHandler(token) {
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        form.submit();
        }
</script>


@endsection




