<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customers = [
            'John Doe',
            'Jane Doe',
            'Bob the builder',
            'Another name'
        ];
        return view('internals.customers',[
            'customers'=> $customers,
        ]);
    }
}
