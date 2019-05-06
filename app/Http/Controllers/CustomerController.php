<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomerController extends Controller
{

    public function index(){
        $customers = Customer::paginate(5);
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
            'name' => 'required|min:4',
            'email' => 'required|email|unique:customers',
            'active' => 'required',
            'company_id' => 'required',
           
        ]);

        Customer::create($customer); // Must be used protected fillable in this class of guarded
        return redirect('customers');

    }

    public function show($customer)
    {
        $customer = Customer::where('id',$customer)->firstOrFail();
        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer)
    {
        
        return view('customers.edit',compact('customer'));
    }

    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
           
        ]);
        

        $customer->update($data);  
        return redirect('customers/'.$customer->id );
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customers');
    }
}
