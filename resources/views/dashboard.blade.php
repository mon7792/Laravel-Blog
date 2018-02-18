@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                      <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                          <th>{{$post->title}}</th>
                          <th><a href='/posts/{{$post->id}}/edit' class='btn btn-default'>Edit</a></th>
                          <th>
                            <!-- Delete Button -->
                            <form method="POST" action="{{ url('posts/'.$post->id)}}">
                              <input type="hidden" name="_method" value="DELETE">
                              {{ csrf_field() }}
                              <button class="btn btn-lg btn-danger" type="submit" value="Delete">Delete</button>
                            </form>
                          </th>
                        </tr>
                        @endforeach

                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
