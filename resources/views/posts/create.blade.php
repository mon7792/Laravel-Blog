@extends('layouts.app')

@section('content')
  <h1>Create Posts</h1>
  <form method="POST" action="{{ url('posts')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name='title' class="form-control" placeholder="title" autofocus>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" name='body' id="editor1" class="form-control" placeholder="Body"></textarea>
    </div>
    <div class="form-group">
      <input type="file" name="cover_image" id="file">
    </div>
    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
  </form>
@endsection
