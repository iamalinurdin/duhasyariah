<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = $request->user()->carts;

        return view('cart', compact('carts'));
    }

    public function apply(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();
        $total = Auth::user()->total;

        if ($coupon->type == 'currency') {
            session(['discount' => $total - $coupon->discount]);
            // dd($total - $coupon->discount);
            // return $total - $coupon->discount;
        } else {
            $discount = $total * ($coupon->discount / 100);

            session(['discount' => $discount]);

            // return $total - $discount;
        }

        $carts = $request->user()->carts;

        return view('cart', compact('carts'));
    }
}
