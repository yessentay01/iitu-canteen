@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2 class="title mb-4">Users</h2>

        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">ID</th>
                <th data-priority="2">Name</th>
                <th data-priority="3">Email</th>
                <th data-priority="3">Bonus</th>
                <th data-priority="4">Role</th>
                @if(auth()->user()->role->id == 6 || auth()->user()->role->id == 7)
                <th data-priority="4">Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td data-priority="1">{{$user->id}}</td>
                    <td data-priority="2">{{$user->name}}</td>
                    <td data-priority="3">{{$user->email}}</td>
                    <td data-priority="3">{{$user->bonus}}₸</td>
                    <td data-priority="4">{{$user->role->name}}</td>
                    @if(auth()->user()->role->id == 6 || auth()->user()->role->id == 7)
                    <td data-priority="9"><a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary small" style="display: flex; height: 30px !important; align-items: center; vertical-align: center">Edit</a> </td>
                    @endif
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection
