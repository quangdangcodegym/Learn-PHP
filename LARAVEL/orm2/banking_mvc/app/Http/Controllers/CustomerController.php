<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        return view('customers.index');
    }
    function create(){
        $customers = Customer::all();
        return view("customers.create", compact('customers'));
    }
    function store(Request $request){
        $customer = new Customer();
        $customer->full_name = $request->txtFullNameCre;
        $customer->email = $request->txtEmailCre;
        $customer->phone = $request->txtPhoneCre;
        $customer->address = $request->txtAddressCre;
        $customer->balance = 0;
        $customer->save();

        $customers = Customer::all();
        return view("customers.create", compact('customers'));
    }

    function edit(Customer $customer){
        // $customer = Customer::findOrFail($id);
        $customers = Customer::all();
       
        $id = $customer->id;
        dd($customer->id);
        return view('customers.edit', compact('customer', 'id', 'customers'));
    }
    function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->full_name = $request->txtFullNameEdit;
        $customer->email = $request->txtEmailEdit;
        $customer->phone = $request->txtPhoneEdit;
        $customer->address = $request->txtAddressEdit;
        $customer->save();

        $customers = Customer::all();
        return view("customers.create", compact('customers'));
    }
}
