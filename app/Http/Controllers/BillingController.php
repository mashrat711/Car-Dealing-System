<?php

namespace App\Http\Controllers;

use App\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $billings=Billing::all();
        return view('Backend.Cart.billings.index',compact('billings'));
    }
}
