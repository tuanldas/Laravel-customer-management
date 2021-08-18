<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::simplePaginate(10);
        return view('Customer.list',compact('customers'));
    }

    public  function test111() {
       echo ('asd');
    }

}
