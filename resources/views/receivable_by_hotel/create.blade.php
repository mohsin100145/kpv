@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Create Form of <code><b>Receivable by hotel</b></code> </h3>
				</div>
				<div class="panel-body">
			  		@include('receivable_by_hotel._form')
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection