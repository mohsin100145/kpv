<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayableByCustomer;
use App\Models\RoomReservation;
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
    	$payableByCustomers = PayableByCustomer::with(['reservation', 'reservation.customer'])->OrderBy('id', 'desc')->get();
    	return view('payable_by_customer.index', compact('payableByCustomers'));
    }

    public function create()
    {
        //$roomReservationList = RoomReservation::pluck('id', 'id');
    	$roomReservations = RoomReservation::with(['room', 'customer'])->get();
        foreach ($roomReservations as  $roomReservation) {
            $roomReservationList[$roomReservation->id] = $roomReservation->customer->mobile_no . ' ' .$roomReservation->customer->name . ' ' .$roomReservation->id . ' ' .$roomReservation->room->name . ' ' .$roomReservation->room->rate . ' (Mobile Name ID Room Rate)';
        }
    	//$roomList = Room::pluck('name', 'id');
    	return view('payable_by_customer.create', compact('roomReservationList'));
    }

    public function store(Request $request)
    {
        //return $request->all();
        if ( ($request->per_day_discount == 'NaN') || ($request->overall_discount == 'NaN') || ($request->vat == 'NaN') || ($request->other_charge == 'NaN') || ($request->pay_to_hotel == 'NaN') || ($request->due == 'NaN') ) {
            flash()->error('Wrong Input, Please Check!');
            return redirect()->back()->withInput();
        }

    	$input = Input::all();
	    $rules = [
	    	'reservation_id' => 'required',
	    	'day' => 'required|numeric',
            'per_day_discount' => 'required|numeric',
            'overall_discount' => 'required|numeric',
            'vat' => 'required|numeric',
            'other_charge' => 'required|numeric',
            'pay_to_hotel' => 'required|numeric',
            'due' => 'required|numeric'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $payableByCustomer = new PayableByCustomer;
        $payableByCustomer->reservation_id = $request->reservation_id;
        $payableByCustomer->day = $request->day;
        $payableByCustomer->per_day_discount = $request->per_day_discount;
        //$payableByCustomer->per_day_discount_percentage = $request->per_day_discount_percentage;
        $payableByCustomer->overall_discount = $request->overall_discount;
        $payableByCustomer->vat = $request->vat;
        $payableByCustomer->other_charge = $request->other_charge;
        $payableByCustomer->pay_to_hotel = $request->pay_to_hotel;
        $payableByCustomer->due = $request->due;
        $payableByCustomer->remarks = $request->remarks;
        $payableByCustomer->created_by = Auth::id();
        $payableByCustomer->save();

        flash()->success('Payable by Customer Created Successfully');
    	return redirect('payable-by-customer');
    }

    public function edit($id)
    {
    	$payableByCustomer = PayableByCustomer::find($id);
    	//$roomReservationList = RoomReservation::pluck('id', 'id');
        $roomReservations = RoomReservation::with(['room', 'customer'])->get();
        foreach ($roomReservations as  $roomReservation) {
            $roomReservationList[$roomReservation->id] = $roomReservation->customer->mobile_no . ' ' .$roomReservation->customer->name . ' ' .$roomReservation->id . ' ' .$roomReservation->room->name . ' ' .$roomReservation->room->rate . ' (Mobile Name ID Room Rate)';
        }
    	return view('payable_by_customer.edit', compact('roomReservationList', 'payableByCustomer'));
    }

    public function update(Request $request, $id)
    {
        if ( ($request->per_day_discount == 'NaN') || ($request->overall_discount == 'NaN') || ($request->vat == 'NaN') || ($request->other_charge == 'NaN') || ($request->pay_to_hotel == 'NaN') || ($request->due == 'NaN') ) {
            flash()->error('Wrong Input, Please Check!');
            return redirect()->back()->withInput();
        }
        
    	$input = Input::all();
	    $rules = [
	    	'reservation_id' => 'required',
            'day' => 'required|numeric',
            'per_day_discount' => 'required|numeric',
            'overall_discount' => 'required|numeric',
            'vat' => 'required|numeric',
            'other_charge' => 'required|numeric',
            'pay_to_hotel' => 'required|numeric',
	    	'due' => 'required|numeric'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $payableByCustomer = PayableByCustomer::find($id);
        $payableByCustomer->reservation_id = $request->reservation_id;
        $payableByCustomer->day = $request->day;
        $payableByCustomer->per_day_discount = $request->per_day_discount;
        //$payableByCustomer->per_day_discount_percentage = $request->per_day_discount_percentage;
        $payableByCustomer->overall_discount = $request->overall_discount;
        $payableByCustomer->vat = $request->vat;
        $payableByCustomer->other_charge = $request->other_charge;
        $payableByCustomer->pay_to_hotel = $request->pay_to_hotel;
        $payableByCustomer->due = $request->due;
        $payableByCustomer->remarks = $request->remarks;
        $payableByCustomer->updated_by = Auth::id();
        $payableByCustomer->save();

        flash()->success('Payable by Customer Updated Successfully');
    	return redirect('payable-by-customer');
    }

    public function reservationInfoShow(Request $request)
    {
        $reservation = RoomReservation::with(['room', 'customer'])->find($request->reservation_id);
        return view('payable_by_customer.reservation_info', compact('reservation'));
    }
}
