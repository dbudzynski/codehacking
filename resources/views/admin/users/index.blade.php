@extends('layouts.admin')

@section('content')


    @if(Session::has('deleted_user'))

        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>MESSAGE:</strong> {{session('deleted_user')}}
        </div>
    @endif

    <h1>Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>First Name</th>
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
                    <tr>
                        <td>{{$user->id}}</td>
                        {{-- @if($user->photo)
                            <td><img height="80" src="{{$user->photo->file}}" alt=""></td>
                        @else --}}
                            <td><img width="100px" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-rounded"></td>
                        {{-- @endif --}}
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>                        
                        <td>{{$user->role ? $user->role->name : 'no role assigned'}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'User is not active'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection