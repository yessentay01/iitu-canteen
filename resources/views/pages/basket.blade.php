@extends('layouts.app')

@section('content')
    <style>
        .basket {
            padding: 30px 0;
            max-width: 800px;
            margin:auto;
        }
        .title{
            font-size: 32px;
            font-weight: 600;
        }
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 40px 0 0 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
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

        .step_content {
            background-color: #fff;
            margin: 40px 15px;
            padding: 25px;
            border-radius: 15px;

        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }
            .basket {
                padding: 25px 0;
            }
            .title{
                font-size: 24px;
            }
            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }

        .order_input {
            width: 100%;
            height: 35px;
            border: 1px solid #ccc;
            padding: 5px 15px;
            border-radius: 5px;
            margin: 5px 0 20px 0;
        }

        h3 {
            margin-bottom: 20px;
        }
        .order_textarea{
            height: 90px;
        }
    </style>
    <div class="basket">
        @if(session('cart'))
            <form action="{{route('basket.store')}}" method="post">
                @csrf
                <div id="step1" class="step_content">
                    <h3 class="title" >Shopping Cart</h3>
                    <div class="">
                        <table>
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tboby>
                                @php
                                    $total = 0;
                                    $products = [];
                                @endphp
                                @foreach(session('cart') as $id => $details)
                                    <tr>
                                        <td scope="row" data-label="Name">{{$details['name']}}</td>
                                        <td scope="row" data-label="Price">{{$details['price']}}₸</td>
                                        <td scope="row" data-label="Quantity">{{$details['quantity']}}</td>
                                        <td scope="row"
                                            data-label="Total">{{(int)$details['price'] * (int)$details['quantity']}}₸
                                        </td>
                                    </tr>
                                    @php
                                        $total += (int)$details['price'] * (int)$details['quantity'];
                                         array_push($products,$details['name'].' X '.$details['quantity'])
                                    @endphp
                                @endforeach
                                <tr>
                                    <td style="text-align: right" colspan="4"><b>Total: {{$total}}₸</b></td>
                                </tr>
                            </tboby>
                        </table>

                    </div>
                </div>
                <div id="step2" class="step_content">
                    <h3>Delivery</h3>
                    <div>
                        <label for="date">Date*</label>
                        <input type="date" name="date" class="order_input" id="date" readonly>
                        <label for="date">Time*</label>
                        <input type="time" name="time" class="order_input" id="time" required>
                        <label for="Cabinet">Cabinet</label>
                        <input type="text" name="cabinet" class="order_input"  id="Cabinet">
                    </div>
                </div>
                <div id="step3" class="step_content">
                    <label class="form-control">
                        <input type="checkbox" name="bonus" />
                        Spend bonuses? ({{auth()->user()->bonus}}₸)
                    </label>
                    <br>
                    <label for="date">Comment</label>
                    <textarea name="comment" class="order_input order_textarea" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="px-3 pb-6">
                    <textarea type="text" name="items"  class="d-none">{{implode(" \n ",$products)}}</textarea>
                    <input type="text" name="price" value="{{$total}}" readonly class="d-none">
                    <button type="submit" class="profile_logout">Order</button>
                    <button type="button" onclick="cancel()" class="w-100 text-red-600 mt-2">Cancel</button>
                </div>

            </form>

        @else
            <div class="mx-3" style="margin-top: 50px">
                <h4>You haven't added anything to your cart yet</h4>
                <a class="profile_logout mt-6" href="{{route('home')}}">Choose food</a>
            </div>

        @endif
    </div>
    <script>
        document.getElementById('date').valueAsDate = new Date();
        $(document).ready(function () {
            $('.card_number').inputmask('9999 9999 9999 9999');
            $('.cvv').inputmask('999');
        });
        function cancel(){
            Session::forget('cart');
        }
    </script>
@endsection
