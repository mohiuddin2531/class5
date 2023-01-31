<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers_view'); 
    }

    public function storeData(Request $r)
    {
        $customer = new Customer; 
        $customer->customer_name = $r['name']; 
        $customer->address = $r['address'];
        $customer->email= $r['email']; 
        $customer->contact_no = $r['contact'];  

        $customer->save(); 
        
    }
}
