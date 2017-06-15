@extends('layouts.admin')
@section('content')
   <div >
     <h2>Users</h2>

     <table class="table table-hover">
       <thead>
         <tr>
             <th>Id</th>
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
             <td>{{$user->name}}</td>
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