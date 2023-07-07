<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipRegion;
use App\Models\ShipVille;
use App\Models\ShipQuartier;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;

class CheckoutController extends Controller
{
    public function VilleGetAjax($region_id)
    {

        $ship = ShipVille::where('region_id', $region_id)->orderBy('ville_name', 'ASC')->get();
        return json_encode($ship);

    } // End Method

    public function QuartierGetAjax($ville_id)
    {

        $ship = ShipQuartier::where('ville_id', $ville_id)->orderBy('quartier_name', 'ASC')->get();
        return json_encode($ship);

    }
    // End Method



    public function CheckoutStore(Request $request)
    {

        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['post_code'] = $request->post_code;

        $data['region_id'] = $request->region_id;
        $data['ville_id'] = $request->ville_id;
        $data['quartier_id'] = $request->quartier_id;
        $data['shipping_address'] = $request->shipping_address;
        $data['notes'] = $request->notes;
        $cartTotal = Cart::total();

        if ($request->payment_option == 'stripe') {
            return view('frontend.payment.stripe', compact('data', 'cartTotal'));
        } elseif ($request->payment_option == 'card') {
            return 'Card Page';
        } else {
            return view('frontend.payment.cash', compact('data', 'cartTotal'));
        }


    }
// End Method


}
