@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3 style="margin-top: 0px;">
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Payable By Customers</mark>

	            <a href="{{ url('payable-by-customer/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>Payable By Customer</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-danger">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Payable By Customers</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
		                <table id="myTable" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>Rsv Id</th>
		                            <th>Customer</th>
		                            <th>Day</th>
		                            <th>Per Day Discount</th>
		                            <th>Overall Discount</th>
		                            <th>Vat</th>
		                            <th>Other Charge</th>
		                            <th>Pay To Hotel</th>
		                            <th>Due</th>
		                            <th>Remarks</th>
		                            <th>Date</th>
		                            <th>Edit</th>
		                            <th>Print</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                        $payToHotelTotal = 0;
		                        $due = 0;
		                    ?>
		                    @foreach($payableByCustomers as $payable)
		                    	
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td>{{ $payable->reservation_id }}</td>
		                            <td>{{ $payable->reservation->customer->name }}</td>
		                            <td>{{ $payable->day }}</td>
		                            <td class="text-right">{{ number_format($payable->per_day_discount, 2) }}</td>
		                            <td class="text-right">{{ number_format($payable->overall_discount, 2) }}</td>
		                            <td class="text-right">{{ number_format($payable->vat, 2) }}</td>
		                            <td class="text-right">{{ number_format($payable->other_charge, 2) }}</td>
		                            <td class="text-right">{{ number_format($payable->pay_to_hotel, 2) }}</td>
		                            <td class="text-right">{{ number_format($payable->due, 2) }}</td>
		                            <td>{{ $payable->remarks }}</td>
		                            <td>{{ $payable->created_at }}</td>
		                            <td>{!! Html::link("payable-by-customer/$payable->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
		                            <td>{!! Html::link("payable-by-customer/$payable->id",' Print', ['class' => 'fa fa-edit btn btn-success btn-xs']) !!}</td>  
		                        </tr>
		                        <?php
		                    		$payToHotelTotal += $payable->pay_to_hotel;
		                    		$due += $payable->due;
		                    	?>
		                    @endforeach
		                    </tbody>
		                    <tfoot>
		                    	<tr>
		                    		<th colspan="8" class="text-right">Total</th>
		                    		<th class="text-right">{{ number_format($payToHotelTotal, 2) }}</th>
		                    		<th class="text-right">{{ number_format($due, 2) }}</th>
		                    		<th colspan="4"></th>
		                    	</tr>
		                    </tfoot>
		                </table>
		                <p class="text-center">Income of Hotel in word: <b>{{ convert_number_to_words($payToHotelTotal) }} Taka Only</b></p>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection