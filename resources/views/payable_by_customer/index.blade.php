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
	                <table id="myTable" class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr class="success">
	                            <th>SL</th>
	                            <th>reservation_id</th>
	                            <th>day</th>
	                            <th>per_day_discount_percentage</th>
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
	                            <td><strong>{{ $payable->reservation_id }}</strong></td>
	                            <td><strong>{{ $payable->day }}</strong></td>
	                            <td><strong>{{ $payable->per_day_discount_percentage }}</strong></td>
	                            <td><strong>{{ $payable->overall_discount }}</strong></td>
	                            <td><strong>{{ $payable->vat }}</strong></td>
	                            <td><strong>{{ $payable->other_charge }}</strong></td>
	                            <td><strong>{{ $payable->pay_to_hotel }}</strong></td>
	                            <td><strong>{{ $payable->remarks }}</strong></td>
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
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection