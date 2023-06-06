@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2 class="title  mb-4">Categories</h2>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">ID</th>
                <th data-priority="2">Name</th>
                <th data-priority="3">University</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td data-priority="1">{{$category->id}}</td>
                    <td data-priority="2">{{$category->name}}</td>
                    <td data-priority="3">{{$category->university->name}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
    </div>
@endsection
