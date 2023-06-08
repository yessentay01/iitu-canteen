@extends('layouts.app')

@section('content')
    <style>
        .profile {
            padding: 100px 16px 80px 16px;
            max-width: 800px;
            margin: auto;
            overflow-y: scroll;
        }

        .profile_info {
            display: flex;
            border: 1px solid #ccc;
            padding: 10px;
            justify-content: space-between;
        }

        .profile_item {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;

        }

        .profile_item_title {
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: 400;
        }

        .profile_logout {
            width: 100%;
            background-color: var(--color-primary);
            color: #fff;
            box-sizing: border-box;
            display: block;
            text-align: center;
            padding: 10px 0;
            border-radius: 10px;
            margin-top: 50px
        }

        .profile_logout:hover {
            color: #fff;
            opacity: 0.85;
        }

        .feedback_btn {
            margin-top: 10px;
            background-color: #0b5ed7;
        }

        .order {
            border: 1px solid #a6a6a6;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .order p {
            padding: 0px;
            margin: 0;
        }
    </style>
    <div class="profile">
        @if(session('success'))
            <div class="alert alert-success" id="successMessage">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="mb-2 title">Hello, {{$user->name}}!</h1>
        <div class="profile_item">
            <h3 class="profile_item_title">Personal data</h3>
            <div class="profile_info">
                <p>Name</p>
                <p class="text-gray-400">{{$user->name}}</p>
            </div>
            <div class="profile_info">
                <p>Email</p>
                <p class="text-gray-400">{{$user->email}}</p>
            </div>
            <div class="profile_info">
                <p>University</p>
                <p class="text-gray-400">{{$user->university->name}}</p>
            </div>
            <div class="profile_info">
                <p>Role</p>
                <p class="text-gray-400">{{$user->role->name}}</p>
            </div>
            <div class="profile_info">
                <p>Bonuses</p>
                <p class="text-gray-400">{{$user->bonus}}₸</p>
            </div>
        </div>
        @if(!(auth()->user()->role->id == 5))
            <div class="profile_item">
                <h3 class="profile_item_title">My orders</h3>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        <div class="order">
                            <p><b> Date:</b> {{$order->created_at}}</p>
                            <p><b> Order ID:</b> #{{$order->order_id}}</p>
                            <p style="white-space: pre-line;"><b> Products: </b>
                                {{$order->items}}</p>
                            <p><b>Total Price:</b> {{$order->price}}₸</p>
                            <p><b>Status:</b> {{$order->status}}</p>
                            @if(!($order->status === 'Issued') && !($order->status == 'Cancelled'))
                                <a href="{{route('cancel', $order->id)}}">Cancel order</a>
                            @endif
                            @if($order->status === 'Issued')
                                <a target="_blank" href="{{route('receipt', $order->order_id)}}">Download receipt</a>
                                <br>
                                <a href="{{route('feedback', $order->id)}}"
                                   class="profile_logout feedback_btn">Feedback</a>
                            @endif
                            @if($order->status === 'Not paid')
                                <a href="https://wa.me/77002161306?text=Я%20хотел%20оплатить%20заказ%20под%20номером%20{{$order->order_id}}"
                                   target="_blank" class="profile_logout feedback_btn">Paid</a>
                            @endif
                        </div>
                    @endforeach
                @else
                    <p>You don't have any orders yet</p>
                @endif
            </div>
        @endif
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="profile_logout">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endsection
