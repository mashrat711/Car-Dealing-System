<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::all();
        return view('Backend.Cart.purchases.index',compact('purchases'));
    }
}
