@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">User and Role</div>

				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="success">
								<th>SL</th>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<?php
								if ($user->role == 'super_admin') {
									$role = "Super Admin";
								} else if ($user->role == 'admin') {
									$role = "Admin";
								} else if ($user->role == 'super_user') {
									$role = "Super User";
								} else {
									$role = "User";
								}
							?>	
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $role }}</td>
								<td><a href='{{"user/$user->id/edit"}}' class="btn btn-success btn-sm">Change Role</a></td>
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