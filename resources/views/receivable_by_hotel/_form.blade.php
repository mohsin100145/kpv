@if(isset($receivableByHotel))
    {!! Form::model($receivableByHotel, ['url' => "receivable-by-hotel/$receivableByHotel->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'receivable-by-hotel', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="form-group required {{ $errors->has('reservation_id') ? 'has-error' : '' }}">
    {!! Form::label('reservation_id', 'Select Room Reservation', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::select('reservation_id', $roomReservationList, null, ['class' => 'form-control', 'placeholder' => 'Select Room Reservation']) !!}
	        <span class="text-danger">
	            {{ $errors->first('reservation_id') }}
	        </span>
        </div>
    </div>
</div>

<div class="form-group required {{ $errors->has('amount') ? 'has-error' : ''}}">
    {!! Form::label('amount', 'Amount', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('amount', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Amount', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('amount') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('remarks') ? 'has-error' : ''}}">
    {!! Form::label('remarks', 'Remarks', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('remarks', null, ['class' => 'form-control', 'placeholder' => 'Enter Remarks', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('remarks') }}
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