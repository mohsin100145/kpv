@if(isset($reservation))
    {!! Form::model($reservation, ['url' => "room-reservation/$reservation->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
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
	        {!! Form::select('room_id', $roomList, null, ['class' => 'form-control', 'placeholder' => 'Select Room', 'id' => 'room_id']) !!}
	        <span class="text-danger">
	            {{ $errors->first('room_id') }}
	        </span>
        </div>
    </div>
</div>

<span id="room_info_show"></span>

<!-- <div class="form-group required">
    <label class="col-sm-3 control-label">Entry Date & Time</label>
    <div class="input-group date form_datetime col-sm-9" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss">
        <input class="form-control" size="16" type="text" value="" readonly>
        <span class="input-group-addon"><span class="fa fa-times"></span></span>
		<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
    </div>
</div> -->

<div class="required form-group {{ $errors->has('entry_at') ? 'has-error' : ''}}">
    {!! Form::label('entry_at', 'Entry Date & Time', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="input-group date form_datetime col-xs-12 col-sm-12" data-date="" data-date-format="yyyy-mm-dd hh:ii:ss">
	        {!! Form::text('entry_at', null, ['class' => 'form-control', 'placeholder' => 'Enter Entry Date & Time', 'readonly' => 'readonly']) !!}
	        <span class="input-group-addon"><span class="fa fa-times"></span></span>
			<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
		</div>
		<span class="text-danger">
			{{ $errors->first('entry_at') }}
	    </span>
    </div>
</div>

<div class="form-group {{ $errors->has('exit_at') ? 'has-error' : ''}}">
    {!! Form::label('exit_at', 'Exit Date & Time', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="input-group date form_datetime col-xs-12 col-sm-12" data-date="" data-date-format="yyyy-mm-dd hh:ii:ss">
	        {!! Form::text('exit_at', null, ['class' => 'form-control', 'placeholder' => 'Enter Exit Date & Time', 'readonly' => 'readonly']) !!}
	        <span class="input-group-addon"><span class="fa fa-times"></span></span>
			<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
		</div>
		<span class="text-danger">
		    {{ $errors->first('exit_at') }}
	    </span>
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

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#room_id").change(function(){
            //alert("The text has been changed.");
            var roomId = $("#room_id").val();
            var url = '{{ url("/room-reservation/room-info-show")}}';
            $.get(url+'?room_id='+roomId, function (data) {
                $('#room_info_show').html(data);
            });
        });
    });
</script>
@endsection