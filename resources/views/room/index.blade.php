@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3 style="margin-top: 0px;">
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Rooms</mark>

	            <a href="{{ url('room/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>Room</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-danger">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Rooms</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
		                <table id="myTable" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>Room Name</th>
		                            <th>Category Name</th>
		                            <th>Rate</th>
		                            <th>Description</th>
		                            <th>Edit</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                    ?>
		                    @foreach($rooms as $room)
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td>{{ $room->name }}</td>
		                            <td>{{ $room->roomCategory->name }}</td>
		                            <td>{{ $room->rate }}</td>
		                            <td>{{ $room->description }}</td>
		                            <td>{!! Html::link("room/$room->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
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
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection