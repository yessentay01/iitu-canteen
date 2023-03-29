@extends('layouts.admin')

@section('admin_content')
    <div class="admin_content">
        <h2>Orders</h2>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
            <tr>
                <th data-priority="1">Order ID</th>
                <th data-priority="2">User</th>
                <th data-priority="3">Items</th>
                <th data-priority="4">Card number</th>
                <th data-priority="5">Price</th>
                <th data-priority="6">Time</th>
                <th data-priority="7">Comment</th>
                <th data-priority="8">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td data-priority="1">{{$order->order_id}}</td>
                    <td data-priority="2">{{$order->name}}</td>
                    <td data-priority="3" style="white-space: pre-line;">{{$order->items}}</td>
                    <td data-priority="4">{{$order->card_number}}</td>
                    <td data-priority="5">{{$order->price}}</td>
                    <td data-priority="6">{{$order->time}}</td>
                    <td data-priority="7">{{$order->comment}}</td>
                    <td data-priority="8">{{$order->status}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
    </div>
@endsection
