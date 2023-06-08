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
            <h1 class="text-2xl">Active orders</h1>
        </div>
    </div>

@endsection
