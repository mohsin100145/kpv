<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceivableByHotel;
use App\Models\RoomReservation;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ReceivableByHotelController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$receivableByHotels = ReceivableByHotel::OrderBy('id', 'desc')->get();
    	return view('receivable_by_hotel.index', compact('receivableByHotels'));
    }

    public function create()
    {
    	$roomReservationList = RoomReservation::pluck('id', 'id');
    	//$roomList = Room::pluck('name', 'id');
    	return view('receivable_by_hotel.create', compact('roomReservationList'));
    }

    public function store(Request $request)
    {
    	$input = Input::all();
	    $rules = [
	    	'reservation_id' => 'required',
	    	'amount' => 'required|numeric'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $receivableByHotel = new ReceivableByHotel;
        $receivableByHotel->reservation_id = $request->reservation_id;
        $receivableByHotel->amount = $request->amount;
        $receivableByHotel->remarks = $request->remarks;
        $receivableByHotel->created_by = Auth::id();
        $receivableByHotel->save();

        flash()->success('Receivable by Hotel Created Successfully');
    	return redirect('receivable-by-hotel');
    }

    public function edit($id)
    {
    	$receivableByHotel = ReceivableByHotel::find($id);
    	$roomReservationList = RoomReservation::pluck('id', 'id');
    	return view('receivable_by_hotel.edit', compact('roomReservationList', 'receivableByHotel'));
    }

    public function update(Request $request, $id)
    {
    	$input = Input::all();
	    $rules = [
	    	'reservation_id' => 'required',
	    	'amount' => 'required|numeric'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $receivableByHotel = ReceivableByHotel::find($id);
        $receivableByHotel->reservation_id = $request->reservation_id;
        $receivableByHotel->amount = $request->amount;
        $receivableByHotel->remarks = $request->remarks;
        $receivableByHotel->updated_by = Auth::id();
        $receivableByHotel->save();

        flash()->success('Receivable by Hotel Updated Successfully');
    	return redirect('receivable-by-hotel');
    }
}
