@extends('layouts.admin')

@section('content')


@if(Session::has('deleted_user'))

<p>{{session('deleted_user')}}</p>

@endif

<h1>Users</h1>

<table class="table table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Photo</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Status</th>
			<th>created</th>
			<th>updated</th>
		</tr>

		@if($users)

		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<!-- <td><img height="50" src="asset('storage/{{$user->photo ? $user->photo->file : 'no user photo'}}')"></td> -->
			<td><img height="50" src="{{$user->photo ? $user->photo->file : 'no user photo'}}"></td>
			<td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->role->name}}</td>
			<td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
			<td>{{$user->created_at->diffForHumans()}}</td>
			<td>{{$user->updated_at->diffForHumans()}}</td>
		</tr>

		@endforeach

		@endif
		
			
	</table>


@stop