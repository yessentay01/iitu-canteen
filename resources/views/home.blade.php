@extends('layouts.app')

@section('content')
    <head>
        <script type="text/javascript">window.setTimeout("document.getElementById('successMessage').classList.add('hidden');", 2000); </script>
    </head>
    <style>
        .home {
            padding: 100px 15px 100px 15px;
            margin: auto;
        }
        .marginn{
            margin: auto;
        }

        .category_title {
            font-size: 36px;
            font-weight: 600;
            color: var(--color-primary);
            margin-bottom: 25px;
        }
.category{
    margin-bottom: 60px;
}
        .category_items {
            overflow: auto;
            display: flex;

        }

        .category_items::-webkit-scrollbar {
            display: none;
        }

        .category_item {
            width: 250px !important;
            text-align: center;
            display: inline-block;
            padding: 15px 15px 45px 15px;
            background-color: #fff;
            margin: 0 10px;
            border-radius: 10px;
            flex-basis: 200px;
            flex-grow: 0;
            flex-shrink: 0;
            position:relative;

        }

        .category_item_images {
            width: 150px;
            margin: auto;
        }

        .category_item_title {
            font-size: 22px;
            font-weight: 500;
            color: var(--color-secondary);
            font-family: var(--font-secondary);
            margin-bottom: 5px;
            width: 100%;
            white-space: pre-wrap;
            margin-top: 15px;
        }

        .category_item_description {
            font-family: var(--font-secondary);
            color: #8d8d9b;
            margin-bottom: 5px;
            width: 100%;
            white-space: pre-wrap;
        }

        .category_item_price {
            font-size: 24px;
            font-weight: 700;
            color: var(--color-primary);
        }
        .category_item_buttons{
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 15px;
            left: 0;
            right: 0;
            width: 90%;
            margin: auto;
            z-index: 1;
        }
        .category_item_button{
            background-color: var(--color-primary);
            color: #fff;
            padding: 6px;
            border-radius: 10px;
            width: 80%;
            white-space: nowrap;
        }
        .category_item_button:hover{
            opacity: 0.85;
        }
        .category_item_fav-button svg{
            width:  26px;
        }
        .hidden {
            opacity: 0;
            -webkit-transition:  height 0.5s ease;
            -moz-transition: height 0.5s ease;
            -ms-transition: height 0.5s ease;
            -o-transition: height 0.5s ease;
            transition: height 0.5s ease;
            transition-delay:0.2s;}

        .visible {
            opacity: 1;
            -webkit-transition:  height 0.5s ease;
            -moz-transition: height 0.5s ease;
            -ms-transition: height 0.5s ease;
            -o-transition: height 0.5s ease;
            transition: height 0.5s ease;
            transition-delay:0.2s;}
    </style>
    <div class="home ">
        <div class="laptop:container marginn">
            @if(session('success'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('success') }}
                </div>
            @endif
            @foreach($categories as $category)
                <div class="category">
                    <h2 class="category_title">{{$category->name}}</h2>
                    <div class="category_items">
                        @foreach($items as $item)
                            @if($category->id == $item->category_name)
                            <div class="category_item">
                                <img class="category_item_images" src="{{$item->images}}"
                                     alt="">
                                <h3 class="category_item_title">{{$item->name}}</h3>
                                <p class="category_item_description">{{$item->ingredients}}</p>
                                <p class="category_item_price">₸{{$item->price}}</p>
                                <div class="category_item_buttons">
                                    <a href="{{ route('add.to.cart', $item->id) }}" class="category_item_button">Add to basket</a>
                                    <button class="category_item_fav-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
