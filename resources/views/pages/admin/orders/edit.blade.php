@extends('layouts.app')

@section('content')
    <head>
        <style>
            .edit_order{
                padding-top: 140px;
            }
            .order_input {
                width: 100%;
                height: 35px;
                border: 1px solid #ccc;
                padding: 5px 15px;
                border-radius: 5px;
                margin: 5px 0 20px 0;
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
            }

            .profile_logout:hover {
                color: #fff;
                opacity: 0.85;
            }
            .cancel_btn{
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <section class="edit_order">
        <div class="container">
            <form action="{{route('admin.orders.update')}}" method="post">
                @csrf
                <div>
                    <label for="id">Order ID</label>
                    <input type="text" name="order_id" class="order_input" id="id" value="{{$order->order_id}}" readonly>
                    <label for="date">Status</label>
                    <select name="status" class="order_input" id="status">
                        <option {{$order->status === "Not paid" ? "selected" : " "}} value="Not paid">Not paid</option>
                        <option {{$order->status === "Paid" ? "selected" : " "}} value="Paid">Paid</option>
                        <option {{$order->status  === "Cooking" ? "selected" : " "}} value="Cooking">Cooking</option>
                        <option {{$order->status === "Ready for delivery" ? "selected" : " "}} value="Ready for delivery">Ready for delivery</option>
                        <option {{$order->status === "Issued" ? "selected" : " "}} value="Issued">Issued</option>
                    </select>
                    <button type="submit" class="profile_logout">Change Status</button>
                    <a class="cancel_btn" href="{{URL::previous()}}">Cancel</a>
                </div>
            </form>
        </div>
    </section>

@endsection
