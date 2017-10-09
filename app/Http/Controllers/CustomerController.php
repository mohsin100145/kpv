<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$customers = Customer::OrderBy('id', 'desc')->get();
    	return view('customer.index', compact('customers'));
    }

    public function create()
    {
    	return view('customer.create');
    }
}
