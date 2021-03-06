@if(isset($payableByCustomer))
    {!! Form::model($payableByCustomer, ['url' => "payable-by-customer/$payableByCustomer->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'payable-by-customer', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="form-group required {{ $errors->has('reservation_id') ? 'has-error' : '' }}">
    {!! Form::label('reservation_id', 'Select Room Reservation', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::select('reservation_id', $roomReservationList, null, ['class' => 'form-control js-example-basic-single', 'placeholder' => 'Select Room Reservation', 'id' => 'reservation_id']) !!}
	        <span class="text-danger">
	            {{ $errors->first('reservation_id') }}
	        </span>
        </div>
    </div>
</div>

<span id="reservation_info_show"></span>

<div class="required form-group {{ $errors->has('day') ? 'has-error' : ''}}">
    {!! Form::label('day', 'Number of Day', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('day', null, ['class' => 'form-control', 'placeholder' => 'Enter Number of Day', 'autocomplete' => 'off', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57', 'id' => 'day']) !!}
	        <span class="text-danger">
			    {{ $errors->first('day') }}
		    </span>
		</div>
    </div>
</div>

<div class="required form-group {{ $errors->has('per_day_discount') ? 'has-error' : ''}}">
    {!! Form::label('per_day_discount', 'Per Day Discount', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('per_day_discount', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Per Day Discount', 'autocomplete' => 'off', 'id' => 'per_day_discount']) !!}
	        <span class="text-danger">
			    {{ $errors->first('per_day_discount') }}
		    </span>
		</div>
    </div>
</div>

<!-- <div class="form-group {{ $errors->has('per_day_discount_percentage') ? 'has-error' : ''}}">
    {!! Form::label('per_day_discount_percentage', 'Per Day Discount in Percentage', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('per_day_discount_percentage', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Per Day Discount in Percentage', 'autocomplete' => 'off', 'id' => 'per_day_discount_percentage']) !!}
	        <span class="text-danger">
			    {{ $errors->first('per_day_discount_percentage') }}
		    </span>
		</div>
    </div>
</div> -->

<div class="required form-group {{ $errors->has('overall_discount') ? 'has-error' : ''}}">
    {!! Form::label('overall_discount', 'Overall Discount', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('overall_discount', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Overall Discount', 'autocomplete' => 'off', 'id' => 'overall_discount']) !!}
	        <span class="text-danger">
			    {{ $errors->first('overall_discount') }}
		    </span>
		</div>
    </div>
</div>

<div class="required form-group {{ $errors->has('vat') ? 'has-error' : ''}}">
    {!! Form::label('vat', 'Vat', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('vat', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Vat', 'autocomplete' => 'off', 'id' => 'vat']) !!}
	        <span class="text-danger">
			    {{ $errors->first('vat') }}
		    </span>
		</div>
    </div>
</div>

<div class="required form-group {{ $errors->has('other_charge') ? 'has-error' : ''}}">
    {!! Form::label('other_charge', 'Other Charge', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('other_charge', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Other Charge', 'autocomplete' => 'off', 'id' => 'other_charge']) !!}
	        <span class="text-danger">
			    {{ $errors->first('other_charge') }}
		    </span>
		</div>
    </div>
</div>

<div class="required form-group {{ $errors->has('pay_to_hotel') ? 'has-error' : ''}}">
    {!! Form::label('pay_to_hotel', 'Pay to Hotel', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('pay_to_hotel', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Enter Pay to Hotel', 'autocomplete' => 'off', 'id' => 'pay_to_hotel']) !!}
	        <span class="text-danger">
			    {{ $errors->first('pay_to_hotel') }}
		    </span>
		</div>
    </div>
</div>

<div class="required form-group {{ $errors->has('due') ? 'has-error' : ''}}">
    {!! Form::label('due', 'Due', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
    <div class="col-xs-9 col-sm-9">
    	<div class="col-xs-12 col-sm-12">
	        {!! Form::text('due', null, ['class' => 'form-control numeric-field', 'placeholder' => 'Due', 'autocomplete' => 'off', 'id' => 'due', 'readonly' => 'readonly']) !!}
	        <span class="text-danger">
			    {{ $errors->first('due') }}
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

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#reservation_id").change(function(){
            //alert("The text has been changed.");
            var reservationId = $("#reservation_id").val();
            var url = '{{ url("/payable-by-customer/reservation-info-show")}}';
            $.get(url+'?reservation_id='+reservationId, function (data) {
                $('#reservation_info_show').html(data);
            });
        });
    });

    $(document).ready(function(){
	    $(document).on('keyup', '#day', function(){
	    	var perDayDiscount  = parseFloat($('#per_day_discount').val(0));
	    	var overallDiscount  = parseFloat($('#overall_discount').val(0));
	    	var vat  = parseFloat($('#vat').val(0));
	    	var otherCharge  = parseFloat($('#other_charge').val(0));
	    	var payToHotel  = parseFloat($('#pay_to_hotel').val(0));
	        var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
	        var roomRate  = parseFloat(roomRateText);
	        var totalRate = day * roomRate;
	        $('#due').val(totalRate);
	    });
	});

    $(document).ready(function(){
    	$(document).on('keyup', '#per_day_discount', function(){
    		var overallDiscount  = parseFloat($('#overall_discount').val(0));
	    	var vat  = parseFloat($('#vat').val(0));
	    	var otherCharge  = parseFloat($('#other_charge').val(0));
	    	var payToHotel  = parseFloat($('#pay_to_hotel').val(0));
    		var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
    		var roomRate  = parseFloat(roomRateText);
    		var totalRate = day * roomRate;
    		var perDayDiscount  = parseFloat($('#per_day_discount').val());
    		var dayDiscount = day * perDayDiscount;
    		if (dayDiscount > totalRate ) 
    		{
    			perDayDiscount = parseInt(perDayDiscount / 10);
    			$('#per_day_discount').val(perDayDiscount);
    			dayDiscount = day * perDayDiscount;
    		}
	        $('#due').val(totalRate - dayDiscount);
	    });
	});

	$(document).ready(function(){
    	$(document).on('keyup', '#overall_discount', function(){
    		var vat  = parseFloat($('#vat').val(0));
	    	var otherCharge  = parseFloat($('#other_charge').val(0));
	    	var payToHotel  = parseFloat($('#pay_to_hotel').val(0));
    		var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
    		var roomRate  = parseFloat(roomRateText);
    		var totalRate = day * roomRate;
    		var perDayDiscount  = parseFloat($('#per_day_discount').val());
    		var overallDiscount  = parseFloat($('#overall_discount').val());
    		var dayDiscount = day * perDayDiscount;
    		if ((dayDiscount + overallDiscount) > totalRate ) 
    		{
    			overallDiscount = parseInt(overallDiscount / 10);
    			$('#overall_discount').val(overallDiscount);
    		}
	        $('#due').val(totalRate - dayDiscount - overallDiscount);
	    });
	});

	$(document).ready(function(){
    	$(document).on('keyup', '#vat', function(){
    		var otherCharge  = parseFloat($('#other_charge').val(0));
    		var payToHotel  = parseFloat($('#pay_to_hotel').val(0));
    		var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
    		var roomRate  = parseFloat(roomRateText);
    		var totalRate = day * roomRate;
    		var perDayDiscount  = parseFloat($('#per_day_discount').val());
    		var overallDiscount  = parseFloat($('#overall_discount').val());
    		var vat  = parseFloat($('#vat').val());
    		var dayDiscount = day * perDayDiscount;
	        $('#due').val(totalRate - dayDiscount - overallDiscount + vat);
	    });
	});

	$(document).ready(function(){
    	$(document).on('keyup', '#other_charge', function(){
    		var payToHotel  = parseFloat($('#pay_to_hotel').val(0));
    		var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
    		var roomRate  = parseFloat(roomRateText);
    		var totalRate = day * roomRate;
    		var perDayDiscount  = parseFloat($('#per_day_discount').val());
    		var overallDiscount  = parseFloat($('#overall_discount').val());
    		var vat  = parseFloat($('#vat').val());
    		var otherCharge  = parseFloat($('#other_charge').val());
    		var dayDiscount = day * perDayDiscount;
	        $('#due').val(totalRate - dayDiscount - overallDiscount + vat + otherCharge);
	    });
	});

	$(document).ready(function(){
    	$(document).on('keyup', '#pay_to_hotel', function(){
    		var day  = parseFloat($('#day').val());
	        var roomRateText  = $('#rome_rate').text();
    		var roomRate  = parseFloat(roomRateText);
    		var totalRate = day * roomRate;
    		var perDayDiscount  = parseFloat($('#per_day_discount').val());
    		var overallDiscount  = parseFloat($('#overall_discount').val());
    		var vat  = parseFloat($('#vat').val());
    		var otherCharge  = parseFloat($('#other_charge').val());
    		var payToHotel  = parseFloat($('#pay_to_hotel').val());
    		var dayDiscount = day * perDayDiscount;
    		if ((payToHotel + dayDiscount + overallDiscount - vat - otherCharge) > totalRate ) 
    		{
    			payToHotel = parseInt(payToHotel / 10);
    			$('#pay_to_hotel').val(payToHotel);
    		}
	        $('#due').val(totalRate - dayDiscount - overallDiscount + vat + otherCharge - payToHotel);
	    });
	});
</script>
<script src="{{ asset('assets/js/select2-4.0.6.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.js-example-basic-single').select2();
	});
</script>
@endsection

@section('style')
	<link href="{{ asset('assets/css/select2-4.0.6.min.css') }}" rel="stylesheet">
@endsection