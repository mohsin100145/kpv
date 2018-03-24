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
	            	<div class="table-responsive">
		                <table id="example" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>Rsv ID</th>
		                            <th>Cusromer Id</th>
		                            <th>Cusromer Name</th>
		                            <th>Room</th>
		                            <th>Per Day Rate</th>
		                            <th>Entry At</th>
		                            <th>Exit At</th>
		                            <th>Remarks</th>
		                            <th>Status</th>
		                            <th>Change Status</th>
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
		                            <td>{{ $reservation->id }}</td>
		                            <td>{{ $reservation->customer_id }}</td>
		                            <td>{{ $reservation->customer->name }}</td>
		                            <td>{{ $reservation->room->name }}</td>
		                            <td>{{ $reservation->room->rate }}</td>
		                            <td>{{ $reservation->entry_at }}</td>
		                            <td>{{ $reservation->exit_at }}</td>
		                            <td>{{ $reservation->remarks }}</td>
		                            <td>{{ $reservation->status }}</td>
		                            <td>{!! Html::link("room-reservation/$reservation->id/change-status",' Change', ['class' => 'fa fa-edit btn btn-danger btn-xs']) !!}</td>  
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
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
    	$('#example').DataTable();
	} );
</script>
@endsection