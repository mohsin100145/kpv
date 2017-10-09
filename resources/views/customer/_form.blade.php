@if(isset($customer))
    {!! Form::model($customer, ['url' => "customer/$customer->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'customer', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="required form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Customer Name', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('name', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Customer Name', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('name') }}
		    </span>
		</div>
    </div>
</div>


<div class="required form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
    {!! Form::label('mobile_no', 'Mobile No', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('mobile_no', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Mobile No of Customer', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
	        <span class="text-danger">
			    {{ $errors->first('mobile_no') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('address', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Address of Customer', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('address') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    {!! Form::label('age', 'Room Rate', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('age', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Age of Customer', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
	        <span class="text-danger">
			    {{ $errors->first('age') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('nid_no') ? 'has-error' : ''}}">
    {!! Form::label('nid_no', 'NID No', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('nid_no', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter NID No of Customer', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
	        <span class="text-danger">
			    {{ $errors->first('nid_no') }}
		    </span>
		</div>
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('email', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Email of Customer', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('email') }}
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