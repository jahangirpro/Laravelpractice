<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{
    public function create(Request $request){
        //validation 
        $customer = request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:customers',
        ]);
        // Insert data 
        $customer = New Customers;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();

        // return redirect()->route('list');
        return back();

    }
    public function list(){
        
        $customers = Customers::all();
        return view('internals.customers',[
            'customers' => $customers,
        ]);
    }


}
