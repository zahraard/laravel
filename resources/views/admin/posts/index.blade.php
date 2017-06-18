@extends('layouts.admin');

@section('content')

    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>Id</th>
              <th>User</th>
              <th>Category</th>
              <th>Photo</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
          @if($posts)
        <tbody>
           @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->user->name}}</td>
              <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
              <td>{{$post->photo_id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>
            @endforeach
        </tbody>
           @endif
      </table>
    </div>
@stop