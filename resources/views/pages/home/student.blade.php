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
            @php
                $total = 0;
            @endphp
            @foreach($categories as $category)
                @php
                    $count = 0;
                    if (request('search')) {
                        $count = \App\Models\Item::where('items.name', 'like', '%' . request('search') . '%')->where('category_id',$category->id )->count();
                    } else {
                        $count = \App\Models\Item::where('category_id',$category->id )->count();
                    }
                    $total += $count;
                @endphp
                @if($count > 0)
                    <div class="item_mobile">
                        <div class="categoriesBtns">
                            <input type=button onClick="location.href='home'"
                                   value='All'>
                            <input type=button onClick="location.href='./home?category=1'"
                                   value='Soups'>
                            <input type=button onClick="location.href='./home?category=2'"
                                   value='Main dishes'>
                            <input type=button onClick="location.href='./home?category=3'"
                                   value='Desserts'>
                            <input type=button onClick="location.href='./home?category=4'"
                                   value='Drinks'>
                        </div>
                        @foreach($items as $item)
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
                                    @php
                                        $isFavorite = false;
                                    @endphp
                                    @foreach($favorites as $favorite)
                                        @if($item->id == $favorite->item_id && auth()->user()->id == $favorite->user_id)
                                            @php
                                                $isFavorite = true;
                                            @endphp
                                        @endif
                                    @endforeach
                                    @if($isFavorite)
                                        <svg style="color:var(--color-primary);"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             fill="currentColor" class="w-6 h-6">
                                            <path
                                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                                        </svg>
                                    @else
                                        <svg style="color: #525252;"
                                             xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5"
                                             stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                        </svg>

                                    @endif


                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="desktop">
                        <div class="category">
                            <h2 class="category_title">{{$category->name}}</h2>
                            <div class="category_items">
                                @foreach($items as $item)
                                    @if($category->id == $item->category->id)
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item_top">
                                                    {{--                                                        <img src="{{ asset('/images/canteenv2/item.png') }}" alt="">--}}
                                                    <img src="{{url('storage/media/menu/' . $item->images)}}" alt="">
                                                </div>
                                                <div class="item_bottom">
                                                    <h3>{{$item->name}}</h3>
                                                    <div class="item_price">
                                                        @if($item->is_publish)
                                                            <a class="item_btn"
                                                               href="{{ route('add.to.cart', $item->id) }}"
                                                            >Add To Cart</a>
                                                        @else
                                                            <a class="item_btn not_available"
                                                            >Not available</a>
                                                        @endif
                                                        <a href="{{route('add.to.favorites', $item->id)}}"
                                                           class="item_fav-button ">
                                                            @php
                                                                $isFavorite = false;
                                                            @endphp
                                                            @foreach($favorites as $favorite)
                                                                @if($item->id == $favorite->item_id && auth()->user()->id == $favorite->user_id)
                                                                    @php
                                                                        $isFavorite = true;
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                            @if($isFavorite)
                                                                <svg style="color:var(--color-primary);"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 24 24"
                                                                     fill="currentColor" class="w-6 h-6">
                                                                    <path
                                                                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                                                                </svg>
                                                            @else
                                                                <svg style="color: #525252;"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke-width="1.5"
                                                                     stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round"
                                                                          stroke-linejoin="round"
                                                                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                                                </svg>

                                                            @endif


                                                        </a>
                                                        <span>₸{{$item->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            @if($total == 0)
                <p>There are no meals :(</p>
            @endif
        </div>
    </div>
@endsection
