@extends('layouts.admin')




@section('content')

    <h1>Edit Users</h1>
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400/000000'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH', 'action'=> ['AdminUsersController@update',$user->id],'files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles,$user->role, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                {!! Form::select('status', array(1 => 'Active', 0=> 'Not Active'), $user->status , ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('photo_id', 'Name:') !!}
                {!! Form::file('photo_id',null, ['class'=>'form-control'])!!}
            </div>

          {{--  <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>--}}



            <div class="form-group">
                {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy',$user->id]]) !!}

            <div class="form-group">
                 {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
        @include('includes.errors');
    </div>





@stop