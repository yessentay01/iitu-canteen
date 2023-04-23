@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2>Menu</h2>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">Order_ID</th>
                <th data-priority="2">Name</th>
                <th data-priority="3">Email</th>
                <th data-priority="4">Feedback</th>
                <th data-priority="5">Created_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td data-priority="1">{{$feedback->order_id}}</td>
                    <td data-priority="2">{{$feedback->name}}</td>
                    <td data-priority="3">{{$feedback->email}}</td>
                    <td data-priority="4">{{$feedback->feedback}}</td>
                    <td data-priority="5">{{$feedback->created_at}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection
