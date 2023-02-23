@extends('layouts.main')
@section('content')
    <style>
        .links {
            display: flex;
            justify-content: space-around;
            width: 30%;
            height: 50px;
            font-size: 16px;
            flex-wrap: nowrap;
            margin-left: 100px;
        }

        .product-images {
            width: 100px;
            height: 150px;
        }

        .images {
            display: flex;
            flex-wrap: wrap;
        }

        #images {
            width: 100%;
        }

        label {
            margin-top: 20px;
        }

        .image-box {
            margin-top: 20px;
            position: relative;
        }

        .images-container {
            display: flex;
            width: 100%;
            justify-content: space-around;
        }

        .image-box button {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <div class="container">
        <div class="links">
            <a class="btn btn-secondary" href="{{ route('admin.users') }}">Users</a>
            <a class="btn btn-secondary" href="">Orders</a>
            <a class="btn btn-secondary" href="{{ route('admin.products') }}">Products</a>

        </div>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="brand">CATEGORY <span style="color: red">*</span></label>
            <select class="form-control" name="category_id" id="brand">
                <option value="{{ $product->category_id }}" selected>{{ $product->category->name }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="brand">BRAND <span style="color: red">*</span></label>
            <select class="form-control" name="brand_id" id="brand">
                <option value="{{ $product->brand_id }}" selected>{{ $product->brand->name }}</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            <label for="title">TITLE <span style="color: red">*</span></label>
            <input value="{{ $product->title }}" id="title" class="form-control" name="title" type="text">

            <label for="article">ARTICLE <span style="color: red">*</span></label>
            <input value="{{ $product->article }}" name="article" class="form-control" type="number">

            <label for="quantity">QUANTITY <span style="color: red">*</span></label>
            <input value="{{ $product->quantity }}" class="form-control" name="quantity" id="quantity" type="number">

            <label for="price">Price <span style="color: red">*</span></label>
            <input value="{{ $product->price }}" class="form-control" name="price" id="price" type="number">

            <label for="discount">DISCOUNT <span style="color: red">*</span></label>
            <input value="{{ $product->discount }}" class="form-control" name="discount" id="discount" type="number">

            <label for="purchase_price">PURCHASE PRICE <span style="color: red">*</span></label>
            <input value="{{ $product->purchase_price }}" class="form-control" name="purchase_price" id="purchase_price"
                   type="number">

            <label for="images">IMAGES <span style="color: red">*</span></label>
            <div class="images">

                <input class="form-control" type="file" id="images" name="images[]" multiple>
                <div class="images-container">
                    @foreach($product->images as $key => $image)
                        <div class="image-box">
                            <img src="{{ asset($image) }}" class="product-images" alt="">
                            <button type="button" data-id="{{ $key }}" class="btn btn-danger image-remove">Delete
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
            <label for="description">DESCRIPTION <span style="color: red">*</span></label>
            <textarea id="description" class="form-control" name="description">{{ $product->description }}</textarea>

            <button class="btn btn-success" style="margin-top: 10px;">Save!</button>

            @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 5px;">
                    @foreach ($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </div>
            @endif
        </form>
    </div>

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.image-remove').click(function () {
                $('form').append('<input type="hidden" name="images_remove[]" value="'+ $(this).data('id') +'">')
                $(this).parent().remove()
            })
        })
    </script>
@endsection
