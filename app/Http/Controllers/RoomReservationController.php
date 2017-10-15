<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomReservation;
use App\Models\Customer;
use App\Models\Room;

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
}
