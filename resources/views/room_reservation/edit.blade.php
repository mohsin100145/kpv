@extends('layouts.app')

@section('style')
	<link href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/select2-4.0.6.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Edit Form of <code><b>Room Reservation</b></code> </h3>
				</div>
				<div class="panel-body">
			  		@include('room_reservation._form')
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection

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
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.fr.js') }}"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

<script src="{{ asset('assets/js/select2-4.0.6.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.js-example-basic-single').select2();
	});
</script>
@endsection