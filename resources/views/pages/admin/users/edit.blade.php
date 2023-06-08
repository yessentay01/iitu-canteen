@extends('layouts.app')

@section('content')
    <head>
        <style>
            .edit_order {
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

            .cancel_btn {
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <section class="edit_order">
        <div class="container">
            <form action="{{route('admin.users.update')}}" method="post">
                @csrf
                <div>
                    <label for="id">Email</label>
                    <input type="text" name="email" class="order_input" id="id" value="{{$user->email}}" readonly>
                    <label for="date">Status</label>
                    <select name="role" class="order_input" id="status">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" {{$role->id == $user->role->id ? 'selected' : ''}}>{{$role->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="profile_logout">Change Status</button>
                    <a class="cancel_btn" href="{{URL::previous()}}">Cancel</a>
                </div>
            </form>
        </div>
    </section>

@endsection
