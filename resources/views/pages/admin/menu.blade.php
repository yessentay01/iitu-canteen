@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2>Menu</h2>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">ID</th>
                <th data-priority="2">Name</th>
                <th data-priority="3">Ingredients</th>
                <th data-priority="4">Price</th>
                <th data-priority="5">Category name</th>
                <th data-priority="6">Is publish</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td data-priority="1">{{$item->id}}</td>
                    <td data-priority="2">{{$item->name}}</td>
                    <td data-priority="3">{{$item->ingredients}}</td>
                    <td data-priority="4">{{$item->price}}</td>
                    <td data-priority="5">{{$item->category_name}}</td>
                    <td data-priority="6">{{$item->is_publish}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection
