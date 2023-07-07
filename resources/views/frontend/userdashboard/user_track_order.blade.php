@extends('dashboard')
@section('user')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Accueil</a>
                    <span></span>Suivre la Commande
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




<div class="col-md-9">
<div class="tab-content account dashboard-content pl-50">
<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
   <div class="card">
        <div class="card-header">
            <h5>Suivez Votre Commande</h5>
        </div>
        <div class="card-body">



    <form method="post" action="{{ route('order.tracking') }}" >
            @csrf

<div class="row">

    <div class="form-group col-md-12">
        <label>Numéro <span class="required">*</span></label>
        <input  class="form-control" name="code" type="text" placeholder="Numéro de Facture de la Commande" required="" />

    </div>



    <div class="col-md-12">
        <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Soumettre</button>
    </div>
</div>
            </form>
        </div>
    </div>
</div>

  </div>
   </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection
