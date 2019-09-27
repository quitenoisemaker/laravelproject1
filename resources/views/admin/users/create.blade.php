@extends('layouts.admin')

@section('content')

<h1>Creating Users</h1>
<!-- 
<form method="post" action="AdminUsersController@store" enctype="multipart/form-data" >
	@csrf
	
	<input type="text" name="title" placeholder="Enter title here"> <br>

	<input type="submit" name="submit">

</form> -->


<form method="post" action="/admin/users">
	@csrf
    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Enter name here">
    </div>
    <button type="submit" class="btn btn-primary">Create User</button>



<!--     <input type="text" name="title" placeholder="Enter title here"> <br>

	

	<input type="submit" > -->
  </form>



@stop