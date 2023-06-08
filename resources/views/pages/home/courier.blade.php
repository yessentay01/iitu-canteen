@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="{{asset('assets/css/item.css')}}">
        <script
            type="text/javascript">window.setTimeout("document.getElementById('successMessage').classList.add('hidden');", 2000); </script>
    </head>
    <div class="home ">
        <div class="laptop:container marginn">
            @if(session('success'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-2xl">Orders</h1>
            <br>
            @foreach($orders as $order)
                @if(strlen($order->cabinet) > 0)
                    <div class="order">
                        <p><b>OrderID: <b>#{{$order->order_id}}</b></b></p>
                        <p><b>Items: <b>{{$order->items}}</b></b></p>
                        <p><b>Date: <b>{{$order->date}}</b></b></p>
                        <p><b>Time: <b>{{$order->time}}</b></b></p>
                        <p><b>Cabinet: <b>{{$order->cabinet}}</b></b></p>
                        <a class="button" href="{{route('delivered', $order->id)}}">Delivered</a>
                        <br>
                    </div>
                    <br>
                @endif
            @endforeach
        </div>
    </div>

@endsection
