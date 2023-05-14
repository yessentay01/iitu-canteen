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
            <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" class="order_input" id="name" value="{{old('name')}}" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="category_name">Category</label>
                    <select name="category_name" class="order_input" id="category_name" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="ingredients">Ingredients</label>
                    <input type="text" name="ingredients" class="order_input" id="ingredients" value="{{old('ingredients')}}">
                    @error('ingredients')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="price">Price</label>
                    <input type="number" name="price" class="order_input" id="price" value="{{old('price')}}" required>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="is_publish">Available</label>
                    <select name="is_publish" class="order_input" id="is_publish" required>
                        <option value="1" selected>Available</option>
                        <option value="0">Not available</option>
                    </select>

                    <label for="images">Image</label>
                    <br>
                    <input type="file" name="images" id="images" required>
                    @error('images')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <br>

                    <button type="submit" class="profile_logout">Add</button>
                    <a class="cancel_btn" href="{{URL::previous()}}">Cancel</a>
                </div>
            </form>
        </div>
    </section>

@endsection
