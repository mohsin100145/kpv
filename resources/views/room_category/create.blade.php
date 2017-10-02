@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Form of <code><b>Room Category</b></code> Creation</h3>
				</div>
				<div class="panel-body">
			  		@include('room_category._form')
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection