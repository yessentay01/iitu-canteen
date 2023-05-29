<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Receipt</title>
    <style>
        table{
            width: 70%;
            border-collapse: collapse;
            margin-top:40px
        }
        td, th{
            text-align: left;
            border: 1px solid #000;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Canteen</h1>
    </header>
    <hr>
    <div>
        <table>
            <tr>
                <th> Date:</th>
                <td>{{$order[0]->created_at}}</td>
            </tr>
            <tr>
                <th> Order ID:</th>
                <td>#{{$order[0]->order_id}}</td>
            </tr>
            <tr>
                <th> Products:</th>
                <td style="white-space: pre-line;">  {{$order[0]->items}}</td>
            </tr>
            <tr>
                <th> Status:</th>
                <td>{{$order[0]->status}}</td>
            </tr>
            <tr>
                <th style="text-align: right" colspan="2">Total Price: {{$order[0]->price}}</th>
            </tr>
        </table>
        <br>
        <br>
        <h3 style="text-align: center">Thank you for your purchase!</h3>
    </div>
</body>
</html>
