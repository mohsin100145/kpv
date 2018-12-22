@extends('layouts.app')

@section('content')
<style>
    @media print
    {
        .no-print, .no-print *{
            display: none !important;
            height: 0;
        }
    }
</style>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="print-margin" style=" border: 0px solid black;">

		        <div class="row">
		            <div class="col-xs-4">
		                <div class="pull-left">
		                    {{ Html::image('/assets/images/edit.jpg', 'No Logo', ['width' => 150, 'height' => 100]) }}
		                </div>
		            </div>
		            <div class="col-xs-8">
		                <h3><center>Grand Beach Resort</center></h3>
		            <center><h4>
		                <i class="fa fa-file-text-o"></i>
		                Cox's Bazar
		            </h4></center>
		            </div>
		        </div>

		        <hr style="margin-top: 10px; margin-bottom: 10px;">
   
	        <div class="row">
	            <div class="col-xs-6">
	                <table class="table table-condensed">
	                	<tr>
	                        <td style="border: 0;">RID:</td>
	                        <td style="border: 0;"><strong>{{ $payableByCustomer->reservation->id }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Customer's Name:</td>
	                        <td style="border: none;"><strong>{{ $payableByCustomer->reservation->customer->name }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Mobile No.:</td>
	                        <td style="border: 0;"><strong>{{ $payableByCustomer->reservation->customer->mobile_no }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Address:</td>
	                        <td style="border: 0;"><strong>{{ $payableByCustomer->reservation->customer->address }}</strong></td>
	                    </tr>
	                </table>
	            </div>
	            <div class="col-xs-6">
	                <table class="table table-condensed">
	                	<tr>
	                        <td style="border: 0;">Date:</td>
	                        <td style="border: 0;"><strong>{{ date("d-m-Y") }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Room Name:</td>
	                        <td style="border: 0;"><strong>{{ $payableByCustomer->reservation->room->name }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Room Rate:</td>
	                        <td style="border: 0;"><strong>{{ number_format($payableByCustomer->reservation->room->rate, 2) }}</strong></td>
	                    </tr>
	                    <tr>
	                        <td style="border: 0;">Day:</td>
	                        <td style="border: 0;"><strong>{{ $payableByCustomer->day }} day(s)</strong></td>
	                    </tr>
	                </table>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-xs-12">
	                <table class="table table-bordered table-condensed">
	                    <thead>
	                        <tr>
	                            <th>Description</th>
	                            <th>Amount</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>Total Amount</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->reservation->room->rate * $payableByCustomer->day, 2) }}</td> 
	                        </tr>
	                        <tr>
	                            <td>Per Day Discount (-)</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->per_day_discount, 2) }}</td>
	                       	</tr>
	                       	<tr>
	                            <td>Overall Discount (-)</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->overall_discount, 2) }}</td>
	                       	</tr>
	                       	<tr>
	                            <td>Vat (+)</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->vat, 2) }}</td>
	                       	</tr>
	                       	<tr>
                            	<td>Other Charge (+)</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->other_charge, 2) }}</td>
	                       	</tr>
	                       	<tr>
	                            <td>Pay To Hotel</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->pay_to_hotel, 2) }}</td>
	                       	</tr>
	                       	<tr>
	                            <td>Due</td>
	                            <td style="vertical-align: middle; text-align: right;">{{ number_format($payableByCustomer->due, 2) }}</td>
	                       	</tr>
	                       	<tr>
	                            <td colspan="2"><b>Remarks:</b> {{ $payableByCustomer->remarks }}</td>
	                       	</tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	        <div>
	        	<div class="col-xs-12">
	                <table class="table table-condensed">
	                	<tr>
	                        <td style="border: 0;">Created By: <strong>{{ $payableByCustomer->created_by }}</strong></td>
	                        <td style="border: 0;">Updated By: <strong>{{ $payableByCustomer->updated_by }}</strong></td>
	                    </tr>
	                </table>
	            </div>
	        </div>
    
		</div>
		<p class="text-center">In word: <b>{{ convert_number_to_words($payableByCustomer->pay_to_hotel) }} Taka Only</b></p>
		<p class="text-center">&copy; {{ date('Y') }}, Software Developed by <strong>Mohsin Iqbal</strong></p>
    	<input type="button" class="no-print btn btn-primary" value="Print this page" onClick="window.print()">
	</div>	
</div>	
</div>	
@endsection