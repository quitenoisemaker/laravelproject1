@extends('layouts.admin')


@section('content')

<h1>Create</h1>


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


{!! Form::open(['method'=>'post', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}
 
 <div class="form-group">
 	{!! Form::label('title', 'Title:')!!}
 	{!! Form::text('title', null, ['class'=>'form-control'])!!}

 </div>


  <div class="form-group">
  {!! Form::label('category_id', 'Category:')!!}
  {!! Form::select('category_id',[''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
  {!! Form::label('photo_id', 'Photo:')!!}
  {!! Form::file('photo_id', ['class'=>''])!!}

 </div>


 <div class="form-group">
  {!! Form::label('body', 'Description:')!!}
  {!! Form::textarea('body', null, ['class'=>'form-control'])!!}

 </div>


 <div class="form-group">
 	{!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}

@stop