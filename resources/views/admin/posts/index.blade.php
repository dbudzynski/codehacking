@extends('layouts.admin')

@section('content')
    <h1>Posts Index</h1>

    <table class="table table-striped table-hover" style="cursor: pointer;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                        <tr class="clickable-row" data-url="{{route('admin.posts.edit', $post->id)}}">
                            <td>{{$post->id}}</td>
                            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                            <td>{{$post->user ? $post->user->name : "User does not exist"}}</td>
                            <td>{{$post->category ? $post->category->name : "No category assigned"}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
@section('footer')
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("url");
            });
        });
    </script>
@endsection