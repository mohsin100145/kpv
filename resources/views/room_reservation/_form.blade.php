@if(isset($reservation))
    {!! Form::model($room, ['url' => "room-reservation/$reservation->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'room-reservation', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="form-group required {{ $errors->has('customer_id') ? 'has-error' : '' }}">
    {!! Form::label('customer_id', 'Select Customer', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::select('customer_id', $customerList, null, ['class' => 'form-control', 'placeholder' => 'Select Customer']) !!}
	        <span class="text-danger">
	            {{ $errors->first('customer_id') }}
	        </span>
        </div>
    </div>
</div>

<div class="form-group required {{ $errors->has('room_id') ? 'has-error' : '' }}">
    {!! Form::label('room_id', 'Select Room', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::select('room_id', $roomList, null, ['class' => 'form-control', 'placeholder' => 'Select Room']) !!}
	        <span class="text-danger">
	            {{ $errors->first('room_id') }}
	        </span>
        </div>
    </div>
</div>

<div class="form-group required">
    <label for="dtp_input1" class="col-sm-3 control-label">Entry Date & Time</label>
    <div class="input-group date form_datetime col-sm-9" data-date="" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
        <input class="form-control" size="16" type="text" value="" readonly>
        <span class="input-group-addon"><span class="fa fa-times"></span></span>
		<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
    </div>
</div>

<div class="required form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Room Name', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('name', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Room Name', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('name') }}
		    </span>
		</div>
    </div>
</div>


<div class="required form-group {{ $errors->has('rate') ? 'has-error' : ''}}">
    {!! Form::label('rate', 'Room Rate', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('rate', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Room Rate', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
	        <span class="text-danger">
			    {{ $errors->first('rate') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Room Description', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('description', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Room Description', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('description') }}
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