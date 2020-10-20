<?php

namespace App\Http\Controllers;

use App\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shippings=Shipping::all();
        return view('Backend.Cart.shippings.index',compact('shippings'));
    }
}
