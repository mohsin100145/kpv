@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Edit Form of <code><b>Payable by customer</b></code> </h3>
				</div>
				<div class="panel-body">
			  		@include('payable_by_customer._form')
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection