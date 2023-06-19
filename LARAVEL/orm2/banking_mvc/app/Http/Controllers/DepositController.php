<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DepositController extends Controller
{
    function view_deposit(){

    }
    function deposit(){
        $customers = Customer::all();
        return view("deposits.create", compact('customers'));
    }
}
