<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $values = [
            'Name : Momin',
            'Addess : Sylhet ',
            'Phone : 123-123-123',
            'Some text here'
        ];
    
        return view('internals.customers',[
            'values' => $values,
        ]);
    }
}
