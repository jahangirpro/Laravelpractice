<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Company;

class CustomerController extends Controller
{
    public function create(Request $request){
        //validation 
        $customer = request()->validate([
            'company_id' => 'required',
            'name' => 'required|min:4',
            'email' => 'required|email|unique:customers',
            'active' => 'required',
           
        ]);

        Customers::create($customer); // Must be used protected fillable in this class of guarded
        return back();

    }
    public function list(){
        
        $ActiveCustomers = Customers::Active()->get();
        $InactiveCustomers = Customers::Inactive()->get();
        $ParttimeCustomers = Customers::Parttime()->get();

        $companies = Company::all();
        // dd($companies);
        return view('internals.customers',compact('ActiveCustomers','InactiveCustomers','ParttimeCustomers','companies'));
    }


}
