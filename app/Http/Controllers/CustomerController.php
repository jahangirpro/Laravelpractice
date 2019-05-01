<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{
    public function create(Request $request){
        //validation 
        $customer = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:customers',
            'active' => 'required'
        ]);
        // Insert data 
        $customer = New Customers;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->active = $request->active;
        $customer->save();

        // return redirect()->route('list');
        return back();

    }
    public function list(){
        
        $ActiveCustomers = Customers::where('active','1')->get();
        $InactiveCustomers = Customers::where('active','0')->get();
        $ParttimeCustomers = Customers::where('active','2')->get();
        // $customers = Customers::all();
        return view('internals.customers',compact('ActiveCustomers','InactiveCustomers','ParttimeCustomers'));
    }


}
