@extends('layouts.app')

@section('content')
    <style>
        .profile{
            padding: 100px 10px 80px 10px;
            max-width: 500px;
            margin: auto;
            overflow-y: scroll;


        }
        .profile_info{
            display: flex;
            justify-content: space-between;
        }
        .profile_item{
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .profile_item_title{
            margin-bottom: 15px;
        }
        .profile_logout{
            width: 100%;
            background-color: var(--color-primary);
            color: #fff;
            box-sizing: border-box;
            display: block;
            text-align: center;
            padding: 10px 0;
            border-radius: 10px;
            margin-top:50px
        }
        .profile_logout:hover{
            color:#fff;
            opacity: 0.85;
        }
    </style>
    <div class="profile">
        <h1>Hello, {{$user->name}}!</h1>
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
        </div>
        <div class="profile_item">
            <h3 class="profile_item_title">My orders</h3>
            <p>You don't have any orders yet</p>
        </div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="profile_logout">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endsection
