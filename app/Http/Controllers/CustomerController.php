<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required',
	    	'mobile_no' => 'required',
	    	'email' => 'email|nullable'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->mobile_no = $request->mobile_no;
        $customer->address = $request->address;
        $customer->age = $request->age;
        $customer->nid_no = $request->nid_no;
        $customer->email = $request->email;
        $customer->created_by = Auth::id();
        $customer->save();

        flash()->success($customer->name.' Customer Successfully Created');
    	return redirect('customer');
    }

    public function edit($id)
    {
    	$customer = Customer::find($id);
    	return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {	
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required',
	    	'mobile_no' => 'required',
	    	'email' => 'email|nullable'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->mobile_no = $request->mobile_no;
        $customer->address = $request->address;
        $customer->age = $request->age;
        $customer->nid_no = $request->nid_no;
        $customer->email = $request->email;
        $customer->updated_by = Auth::id();
        $customer->save();

        flash()->success($customer->name.' Customer Successfully Updated');
    	return redirect('customer');
    }
}
