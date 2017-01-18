@extends('layouts.admin')
@section('content')
<h1>Categories Index</h1>

<table class="table table-striped table-hover" style="cursor: pointer;">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($categories)
        @foreach($categories as $category)
            <tr class="clickable-row" data-url="{{route('admin.categories.edit', $category->id)}}">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at ? $category->updated_at->diffForHumans() : 'missing entry'}}</td>
                <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'missing entry'}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection
@section('footer')
    <script>
        jQuery(document).ready(function($) {
            $('.clickable-row').click(function() {
                window.document.location = $(this).data("url");
            });
        });
    </script>
@endsection