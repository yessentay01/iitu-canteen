@extends('layouts.admin')

@section('admin_content')
    <style>
        .profile_logout {
            background-color: var(--color-primary);
            color: #fff;
            box-sizing: border-box;
            display: block;
            text-align: center;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .profile_logout:hover {
            color: #fff;
            opacity: 0.85;
        }
    </style>
    <div class="admin_content">
        @if(session('success'))
            <div class="alert alert-success" id="successMessage">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-between align-items-center mb-4">
            <h2 class="title  mb-4">Menu</h2>
            <a class="profile_logout" href="{{route('admin.menu.add')}}">Add a new dish</a>
        </div>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">ID</th>
                <th data-priority="2">Name</th>
                <th data-priority="3">Ingredients</th>
                <th data-priority="4">Price</th>
                <th data-priority="5">Category name</th>
                <th data-priority="6">Is publish</th>
                <th data-priority="7">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td data-priority="1">{{$item->id}}</td>
                    <td data-priority="2">{{$item->name}}</td>
                    <td data-priority="3">{{$item->ingredients}}</td>
                    <td data-priority="4">{{$item->price}}</td>
                    <td data-priority="5">{{$item->category->name}}</td>
                    <td data-priority="6">{{$item->is_publish}}</td>
                    <td data-priority="7" class="flex gap-2" style="">
                        <a href="{{route('admin.menu.edit', $item->id)}}" class="btn btn-primary small" style="display: flex; height: 20px !important; align-items: center; vertical-align: center">Edit</a>
                        <a href="{{route('admin.menu.delete', $item->id)}}" class="btn btn-danger small" style="display: flex; height: 20px !important; align-items: center; vertical-align: center">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection
