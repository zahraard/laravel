@extends('layouts.admin')
@section('content')
   <div >
       @if(Session::has('deleted_user'))

           <p>{{session('deleted_user')}}</p>

       @endif
     <h2>Users</h2>

     <table class="table table-hover">
       <thead>
         <tr>
             <th>Id</th>
             <th>Photo</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
             <th>Status</th>
             <th>Created</th>
             <th>Updated</th>

         </tr>
       </thead>
       <tbody>
       @if($users)
       @foreach($users as $user)
         <tr  >
             <td>{{$user->id}}</td>
             <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
             <td><a href="{{route('admin.users.edit',$user->id)}}" >{{$user->name}}</a></td>
             <td>{{$user->email}}</td>
             <td>{{$user->role->name}}</td>
             <td>{{$user->status ? 'Active' : 'Not Active'}}</td>
             {{--@if($user->is_active == 1){
             <td>Active</td>}
             @else{
             <td>Not Active</td>}
             @endif--}}
             <td>{{$user->created_at->diffForHumans()}}</td>
             <td>{{$user->updated_at->diffForHumans()}}</td>

         </tr >
       @endforeach
       @endif
       </tbody>
     </table>
   </div>



@stop