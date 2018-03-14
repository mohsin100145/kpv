@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3 style="margin-top: 0px;">
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Receivable By Hotel</mark>

	            <a href="{{ url('receivable-by-hotel/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>Receivable By Hotel</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Receivable By Hotel</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
		                <table id="myTable" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>reservation_id</th>
		                            <th>amount</th>
		                            <th>remarks</th>
		                            <th>created_at</th>
		                            <th>Edit</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                    ?>
		                    @foreach($receivableByHotels as $receivable)
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td><strong>{{ $receivable->reservation_id }}</strong></td>
		                            <td><strong>{{ $receivable->amount }}</strong></td>
		                            <td><strong>{{ $receivable->remarks }}</strong></td>
		                            <td><strong>{{ $receivable->created_at }}</strong></td>
		                            <td>{!! Html::link("receivable-by-hotel/$receivable->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
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