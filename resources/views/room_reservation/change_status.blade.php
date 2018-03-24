@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Change Status of <code><b>Room Reservation</b></code> </h3>
				</div>
				<div class="panel-body">
					{!! Form::model($reservation, ['url' => "room-reservation/$reservation->id/update-status", 'method' => 'put', 'class' => 'form-horizontal']) !!}

				  		<div class="form-group required {{ $errors->has('status') ? 'has-error' : '' }}">
						    {!! Form::label('status', 'Change Status', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
						    <div class="col-xs-9 col-sm-9">
						    	<div class="col-xs-12 col-sm-12">
							        {!! Form::select('status', ['New' => 'New', 'Pending' => 'Pending', 'Closed' => 'Closed'], $reservation->status, ['class' => 'form-control js-example-basic-single', 'placeholder' => 'Select Room Reservation', 'id' => 'status']) !!}
							        <span class="text-danger">
							            {{ $errors->first('status') }}
							        </span>
						        </div>
						    </div>
						</div>

						<div class="form-group">
						    <div class="col-xs-12 col-sm-12">
						        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
						    </div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection