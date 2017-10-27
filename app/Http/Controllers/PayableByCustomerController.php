<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayableByCustomer;
use App\Models\RoomReservation;
//use App\Models\Room;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PayableByCustomerController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$payableByCustomers = PayableByCustomer::OrderBy('id', 'desc')->get();
    	return view('payable_by_customer.index', compact('payableByCustomers'));
    }

    public function create()
    {
    	$roomReservationList = RoomReservation::pluck('id', 'id');
    	//$roomList = Room::pluck('name', 'id');
    	return view('payable_by_customer.create', compact('roomReservationList'));
    }
}
