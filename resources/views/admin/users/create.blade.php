@extends('layouts.admin')

@section('content')

<h1>Creating Users</h1>

 <!-- To show the error message -->
@if(count($errors)>0)

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif

{!! Form::open(['method'=>'post', 'action'=> 'AdminUsersController@store', 'files'=>true]) !!}
 
 <div class="form-group">
 	{!! Form::label('name', 'Name:')!!}
 	{!! Form::text('name', null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('email', 'Email:')!!}
  {!! Form::email('email', null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('role_id', 'Role:')!!}
  {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('is_active', 'Status:')!!}
  {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0 , ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
  {!! Form::label('file', 'Photo:')!!}
  {!! Form::file('file', ['class'=>''])!!}

 </div>

 <div class="form-group">
  {!! Form::label('password', 'Password:')!!}
  {!! Form::password('password', ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
 	{!! Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}



<!-- form method="post" action="/admin/users">
	@csrf
    <div class="form-group">
    	<label>Name:</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
    	<label>Email:</label>
      <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
    	<label>Role:</label>
      <select name="role_id" class="form-control" value="" id="role_id" >
                <option value="" selected disabled="">Choose options*</option>
             </select>
    </div>

    <div class="form-group">
    	<label>Status:</label>
      <select name="status" class="form-control" value="" id="status" >
                <option value="1" >Active</option>
              <option value="0" selected="">Not Active</option>
             </select>
    </div>

    <button type="submit" class="btn btn-primary">Create User</button>

  </form> -->


  



@stop