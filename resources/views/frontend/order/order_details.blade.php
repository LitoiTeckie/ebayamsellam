@extends('dashboard')
@section('user')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




  <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Accueil</a>
                    <span></span> Mon Compte
                </div>
            </div>
        </div>
        <div class="page-content pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
<div class="row">

<!-- // Start Col md 3 menu -->

 @include('frontend.body.dashboard_sidebar_menu')
<!-- // End Col md 3 menu -->



<!-- // Start Col md 9  -->
<div class="col-md-9">
    <div class="row">

        <div class="col-md-6">
            <div class="card">
               <div class="card-header"><h4>Infos pour la Livraison</h4> </div>
               <hr>
               <div class="card-body">
                 <table class="table" style="background:#F4F6FA;font-weight: 600;">
                    <tr>
                        <th>Nom:</th>
                        <th>{{ $order->name }}</th>
                    </tr>

                    <tr>
                        <th>Phone:</th>
                        <th>{{ $order->phone }}</th>
                    </tr>

                    <tr>
                        <th>Email:</th>
                        <th>{{ $order->email }}</th>
                    </tr>

                     <tr>
                        <th>Addresse:</th>
                        <th>{{ $order->address }}</th>
                    </tr>


                    <tr>
                        <th>Région:</th>
                       <th>{{ $order->region->region_name }}</th>
                    </tr>

                    <tr>
                        <th>Ville:</th>
                       <th>{{ $order->ville->ville_name }}</th>
                    </tr>

                    <tr>
                        <th>Quartier :</th>
                         <th>{{ $order->quartier->quartier_name }}</th>
                    </tr>

                     <tr>
                        <th>Heure  :</th>
                         <th>{{ $order->post_code }}</th>
                    </tr>

                     <tr>
                        <th>Date   :</th>
                        <th>{{ $order->order_date }}</th>
                    </tr>

                </table>

               </div>

            </div>
        </div>
<!-- // End col-md-6  -->


        <div class="col-md-6">
            <div class="card">
               <div class="card-header"><h4> Détails  :
<span class="text-danger"> Facture: {{ $order->invoice_no }} </span></h4>
                </div>
               <hr>
               <div class="card-body">
                <table class="table" style="background:#F4F6FA;font-weight: 600;">
                    <tr>
                        <th> Nom :</th>
                        <th>{{ $order->user->name }}</th>
                    </tr>

                    <tr>
                        <th>Phone :</th>
                      <th>{{ $order->user->phone }}</th>
                    </tr>

                    <tr>
                        <th>Type de paiement:</th>
                       <th>{{ $order->payment_method }}</th>
                    </tr>


                    <tr>
                        <th>Transx ID:</th>
                       <th>{{ $order->transaction_id }}</th>
                    </tr>

                    <tr>
                        <th>Facture:</th>
                       <th class="text-danger">{{ $order->invoice_no }}</th>
                    </tr>

                    <tr>
                        <th>Montant:</th>
                         <th>{{ $order->amount }} Fcfa</th>
                    </tr>

                     <tr>
                        <th>Statut:</th>
      <th><span class="badge rounded-pill bg-warning">{{ $order->status }}</span></th>
                    </tr>

                </table>

               </div>

            </div>
        </div>
<!-- // End col-md-6  -->

    </div><!-- // End Row  -->




   </div>
<!-- // End Col md 9  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
<table class="table" style="font-weight: 600;"  >
    <tbody>
        <tr>
            <td class="col-md-1">
                <label>Image </label>
            </td>
            <td class="col-md-2">
                <label> Nom de l'article </label>
            </td>
            <td class="col-md-2">
                <label>Vendeur </label>
            </td>
            <td class="col-md-1">
                <label> Code  </label>
            </td>
            <td class="col-md-1">
                <label>Couleur </label>
            </td>
            <td class="col-md-1">
                <label>Mesure </label>
            </td>
            <td class="col-md-1">
                <label>Taille </label>
            </td>
            <td class="col-md-1">
                <label>Qté </label>
            </td>

            <td class="col-md-3">
                <label>Prix  </label>
            </td>

        </tr>


        @foreach($orderItem as $item)
         <tr>
            <td class="col-md-1">
                <label><img src="{{ asset($item->product->product_thumbnail) }}" style="width:50px; height:50px;" > </label>
            </td>
            <td class="col-md-2">
                <label>{{ $item->product->product_name }}</label>
            </td>
            @if($item->vendor_id == NULL)
             <td class="col-md-2">
                <label>Owner </label>
            </td>
            @else
                <td class="col-md-2">
                <label>{{ $item->product->vendor->name }} </label>
            </td>
            @endif

            <td class="col-md-1">
                <label>{{ $item->product->product_code }} </label>
            </td>
            @if($item->color == NULL)
             <td class="col-md-1">
                <label>.... </label>
            </td>
            @else
            <td class="col-md-1">
                <label>{{ $item->color }} </label>
            </td>
            @endif
            @if($item->format == NULL)
             <td class="col-md-1">
                <label>.... </label>
            </td>
            @else
            <td class="col-md-1">
                <label>{{ $item->format }} </label>
            </td>
            @endif

            @if($item->size == NULL)
             <td class="col-md-1">
                <label>.... </label>
            </td>
            @else
            <td class="col-md-1">
                <label>{{ $item->size }} </label>
            </td>
            @endif
            <td class="col-md-1">
                <label>{{ $item->qty }} </label>
            </td>

            <td class="col-md-3">
                <label>{{ $item->price }} Fcfa<br> Total = {{ $item->price * $item->qty }} Fcfa </label>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

                    </div>

                </div>

<!--  // Start Return Order Option  -->

@if($order->status !== 'delivered')

@else

@php
$order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
@endphp

@if($order)
<form action="{{ route('return.order',$order->id) }}" method="post">
    @csrf

 <div class="form-group" style=" font-weight: 600; font-size: initial; color: #000000; ">
                    <label>En cas de Renvoi indiquez la Raison</label>
             <textarea name="return_reason" class="form-control"  style="width:40%;"></textarea>
                </div>
    <button type="submit" class="btn-sm btn-danger" style="width:40%;">Soumettre</button>
</form>

@else

<h5><span class=" " style="color:red;">Vous avez déjà envoyé une requête  renvoi pour cette article</span></h5><br><br>
@endif

@endif
<!--  // End Return Order Option  -->






            </div>
        </div>







@endsection
