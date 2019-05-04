<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Company;

class CustomerController extends Controller
{

    public function index(){
        $customers = Customers::all();
        return view('customers.index',compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create',compact('companies'));
    }
    public function store(Request $request){
        //validation 
        $customer = request()->validate([
            'company_id' => 'required',
            'name' => 'required|min:4',
            'email' => 'required|email|unique:customers',
            'active' => 'required',
           
        ]);

        Customers::create($customer); // Must be used protected fillable in this class of guarded
        return redirect('customers');

    }
    // Route model binding is the easiest way to fetch data
    public function show(Customers $customer)
    { 
        return view('customers.show',compact('customer'));
    } 

 
}
