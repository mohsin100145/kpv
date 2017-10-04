@if(isset($category))
    {!! Form::model($category, ['url' => "room-category/$category->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'room-category', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif

<div class="required form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Room Category Name', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('name', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Room Category Name', 'autocomplete' => 'off']) !!}
	        <span class="text-danger">
			    {{ $errors->first('name') }}
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