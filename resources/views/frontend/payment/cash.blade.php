@extends('frontend.master_dashboard')
@section('main')

 @section('title')
   Paiement en espèces - eBoutiQ
@endsection

 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Accueil</a>
                    <span></span> Paiement à la Livraison
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Paiement à la Livraison</h3>
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                    <div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Détails de la commande</h4>

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


                </div> <!-- // end lg md 6 -->


<div class="col-lg-6">
<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Confirmer la Commande </h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">


  <form action="{{ route('cash.order') }}" method="post" >
        @csrf
    <div class="form-row">
        <label for="card-element">


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

        <!-- Used to display form errors. -->

    </div>
    <br>
    <button class="btn btn-primary">Soumettre</button>
    </form>


    </div>
</div>



                </div>
            </div>
        </div>





@endsection




