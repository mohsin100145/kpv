<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomCategory;
use App\Models\Room;
use App\Models\Customer;
use App\Models\RoomReservation;
use App\Models\PayableByCustomer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomCategoryCount = RoomCategory::count();
        $roomCount = Room::count();
        $customerCount = Customer::count();
        $roomReservationCount = RoomReservation::count();
        $payableByCustomerCount = PayableByCustomer::count();
        return view('home', compact('roomCategoryCount', 'roomCount', 'customerCount', 'roomReservationCount', 'payableByCustomerCount'));
    }
}
