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
		                            <th>reservation_id</th>
		                            <th>day</th>
		                            <th>per_day_discount</th>
		                            <th>overall_discount</th>
		                            <th>vat</th>
		                            <th>other_charge</th>
		                            <th>pay_to_hotel</th>
		                            <th>remarks</th>
		                            <th>Edit</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                    ?>
		                    @foreach($payableByCustomers as $payable)
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td>{{ $payable->reservation_id }}</td>
		                            <td>{{ $payable->day }}</td>
		                            <td>{{ $payable->per_day_discount }}</td>
		                            <td>{{ $payable->overall_discount }}</td>
		                            <td>{{ $payable->vat }}</td>
		                            <td>{{ $payable->other_charge }}</td>
		                            <td>{{ $payable->pay_to_hotel }}</td>
		                            <td>{{ $payable->remarks }}</td>
		                            <td>{!! Html::link("payable-by-customer/$payable->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
		                        </tr>
		                    @endforeach
		                    </tbody>
		                </table>
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