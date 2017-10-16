<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomReservation;
use App\Models\Customer;
use App\Models\Room;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class RoomReservationController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$reservations = RoomReservation::get();
    	return view('room_reservation.index', compact('reservations'));
    }

    public function create()
    {
    	$customerList = Customer::pluck('name', 'id');
    	$roomList = Room::pluck('name', 'id');
    	return view('room_reservation.create', compact('customerList', 'roomList'));
    }

    public function store(Request $request)
    {
    	$input = Input::all();
	    $rules = [
	    	'customer_id' => 'required',
	    	'room_id' => 'required',
	    	'entry_at' => 'required'
	    ];

	    $messages = [
            //'name.required' => 'The Room Name field is required.',
            //'name.unique' => 'The Room Name already exist.',
            //'category_id.required' => 'The Room Category field is required.',
            //'rate.required' => 'The Room Rate field is required.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $reservation = new RoomReservation;
        $reservation->customer_id = $request->customer_id;
        $reservation->room_id = $request->room_id;
        $reservation->entry_at = $request->entry_at;
        $reservation->exit_at = $request->exit_at;
        $reservation->remarks = $request->remarks;
        $reservation->created_by = Auth::id();
        $reservation->save();

        flash()->success(' Room Reservation Successfully Created');
    	return redirect('room-reservation');
    }

    public function edit($id)
    {
    	$reservation = RoomReservation::find($id);
    	$customerList = Customer::pluck('name', 'id');
    	$roomList = Room::pluck('name', 'id');
    	return view('room_reservation.edit', compact('reservation', 'customerList', 'roomList'));
    }

    public function update(Request $request, $id)
    {
    	$input = Input::all();
	    $rules = [
	    	'customer_id' => 'required',
	    	'room_id' => 'required',
	    	'entry_at' => 'required'
	    ];

	    $messages = [];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $reservation = RoomReservation::find($id);
        $reservation->customer_id = $request->customer_id;
        $reservation->room_id = $request->room_id;
        $reservation->entry_at = $request->entry_at;
        $reservation->exit_at = $request->exit_at;
        $reservation->remarks = $request->remarks;
        $reservation->updated_by = Auth::id();
        $reservation->save();

        flash()->success(' Room Successfully Updated');
    	return redirect('room-reservation');
    }
}