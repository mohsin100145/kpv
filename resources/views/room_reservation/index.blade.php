@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3 style="margin-top: 0px;">
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Room Reservations</mark>

	            <a href="{{ url('room-reservation/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>Room Reservation</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-danger">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Room Reservations</b></code></h3>
	            </div>
	            <div class="panel-body">
	                <table id="example" class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr class="success">
	                            <th>SL</th>
	                            <th>Cusromer Id</th>
	                            <th>Room Id</th>
	                            <th>Entry At</th>
	                            <th>Exit At</th>
	                            <th>Remarks</th>
	                            <th>Edit</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    <?php
	                        $i = 0;
	                    ?>
	                    @foreach($reservations as $reservation)
	                        <tr>
	                            <td>{{ ++$i }}</td>
	                            <td><strong>{{ $reservation->customer_id }}</strong></td>
	                            <td><strong>{{ $reservation->room_id }}</strong></td>
	                            <td><strong>{{ $reservation->entry_at }}</strong></td>
	                            <td><strong>{{ $reservation->exit_at }}</strong></td>
	                            <td><strong>{{ $reservation->remarks }}</strong></td>
	                            <td>{!! Html::link("room-reservation/$reservation->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
	                        </tr>
	                    @endforeach
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
    	$('#example').DataTable();
	} );
</script>
@endsection