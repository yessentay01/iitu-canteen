@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="{{asset('assets/css/item.css')}}">
    </head>
    <style>
        .favorites {
            padding: 100px 15px 100px 15px;
        }
    </style>
    <div class="favorites">

        <div class="laptop:container marginn">
            @if(session('success'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="category_title">Favorites</h2>
            <div class="category">
                <div class="category_items">
                    @foreach($items as $item)
                        <div class="item_mobile">
                            <div class="item_m">
                                <div class="item_m_img">
                                    <img src="{{url('storage/media/menu/' . $item->images)}}" alt="">
                                </div>
                                <div class="item_m_info">
                                    <h2>{{$item->name}}</h2>
                                    <div class="flex w-full align-items-center">
                                        @if($item->is_publish)
                                            <a class="item_btn"
                                               href="{{ route('add.to.cart', $item->id) }}"
                                            >Add To Cart</a>
                                        @else
                                            <a class="item_btn not_available"
                                            >Not available</a>
                                        @endif
                                        <span class="item_m_price">₸{{$item->price}}</span>
                                    </div>

                                </div>
                                <a href="{{route('add.to.favorites', $item->id)}}"
                                   class="item_fav-button ">
                                    <svg style="color:var(--color-primary);"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24"
                                         fill="currentColor" class="w-6 h-6">
                                        <path
                                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="desktop">
                            <div class="col-md-4">
                                <div class="item">
                                    <div class="item_top">
                                        {{--                                    <img src="{{ asset('/images/canteenv2/item.png') }}" alt="">--}}
                                        <img src="{{url('storage/media/menu/' . $item->images)}}" alt="">
                                    </div>
                                    <div class="item_bottom">
                                        <h3>{{$item->name}}</h3>
                                        <div class="item_price">
                                            @if($item->is_publish)
                                                <a class="item_btn" href="{{ route('add.to.cart', $item->id) }}"
                                                >Add To Cart</a>
                                            @else
                                                <a class="item_btn not_available"
                                                >Not available</a>
                                            @endif
                                            <a href="{{route('add.to.favorites', $item->id)}}"
                                               class="item_fav-button ">
                                                <svg style="color:var(--color-primary);"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                                                </svg>
                                            </a>
                                            <span>₸{{$item->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
