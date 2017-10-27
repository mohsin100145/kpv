@if(isset($payableByCustomer))
    {!! Form::model($payableByCustomer, ['url' => "payable-by-customer/$payableByCustomer->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'payable-by-customer', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="form-group required {{ $errors->has('category_id') ? 'has-error' : '' }}">
    {!! Form::label('category_id', 'Select Room Category', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::select('category_id', $roomReservationList, null, ['class' => 'form-control', 'placeholder' => 'Select Room Category']) !!}
	        <span class="text-danger">
	            {{ $errors->first('category_id') }}
	        </span>
        </div>
    </div>
</div>

<div class="required form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Room Name', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Room Name', 'autocomplete' => 'off']) !!}
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
	        {!! Form::text('rate', null, ['class' => 'form-control', 'placeholder' => 'Enter Room Rate', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
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
	        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Room Description', 'autocomplete' => 'off']) !!}
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