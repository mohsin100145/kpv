<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayableByCustomer;
use App\Models\RoomReservation;

class ReportPayableByCustomerController extends Controller
{
    public function index()
    {
    	return view('report.payable_by_customer_form');
    }

    public function showReport(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
    	$startDateTime = $request->start_date . ' 00:00:00';
    	$endDateTime = $request->end_date . ' 23:59:59';
    	$payableByCustomers = PayableByCustomer::with(['reservation', 'reservation.customer'])->OrderBy('id', 'desc')->whereBetween('created_at', [$startDateTime, $endDateTime])->get();
    	return view('report.payable_by_customer_view', compact('payableByCustomers', 'startDate', 'endDate'));
    }
}
