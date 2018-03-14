@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3 style="margin-top: 0px;">
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Customers</mark>

	            <a href="{{ url('customer/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>Customer</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-danger">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Customers</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
		                <table id="myTable" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>Name</th>
		                            <th>Mobile No</th>
		                            <th>Address</th>
		                            <th>Age</th>
		                            <th>NID No</th>
		                            <th>Email</th>
		                            <th>Edit</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                    ?>
		                    @foreach($customers as $customer)
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td><strong>{{ $customer->name }}</strong></td>
		                            <td><strong>{{ $customer->mobile_no }}</strong></td>
		                            <td><strong>{{ $customer->address }}</strong></td>
		                            <td><strong>{{ $customer->age }}</strong></td>
		                            <td><strong>{{ $customer->nid_no }}</strong></td>
		                            <td><strong>{{ $customer->email }}</strong></td>
		                            <td>{!! Html::link("customer/$customer->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
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