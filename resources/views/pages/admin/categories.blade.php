@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2>Categories</h2>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">ID</th>
                <th data-priority="2">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td data-priority="1">{{$category->id}}</td>
                    <td data-priority="2">{{$category->name}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
    </div>
@endsection
