@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  @if(!Auth::guest())
    @if(Auth()->user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <!-- Delete Button -->
    <form method="POST" action="{{ url('posts/'.$post->id)}}">
      <input type="hidden" name="_method" value="DELETE">
      {{ csrf_field() }}
      <button class="btn btn-lg btn-danger" type="submit" value="Delete">Delete</button>
    </form>
    @endif
  @endif
@endsection
