@extends('layouts.app')

@section('content')
  <h1>Edit Posts</h1>
  <form method="POST" action="{{ url('posts/'.$post->id)}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name='title' class="form-control" placeholder="title" autofocus value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" name='body' id="editor1" class="form-control" placeholder="Body">{!!$post->body!!}</textarea>
    </div>
    <div class="form-group">
      <input type="file" name="cover_image" id="file">
    </div>
    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
  </form>
@endsection
