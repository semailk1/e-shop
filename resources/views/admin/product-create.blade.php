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
    </style>
    <div class="container">
        <div class="links">
            <a class="btn btn-secondary" href="{{ route('admin.users') }}">Users</a>
            <a class="btn btn-secondary" href="">Orders</a>
            <a class="btn btn-secondary" href="{{ route('admin.products') }}">Products</a>

        </div>
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="brand">CATEGORY <span style="color: red">*</span></label>
            <select class="form-control" name="category_id" id="brand">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="brand">BRAND <span style="color: red">*</span></label>
            <select class="form-control" name="brand_id" id="brand">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            <label for="title">TITLE <span style="color: red">*</span></label>
            <input id="title" class="form-control" name="title" type="text">

            <label for="article">ARTICLE <span style="color: red">*</span></label>
            <input name="article" class="form-control" type="number">

            <label for="quantity">QUANTITY <span style="color: red">*</span></label>
            <input class="form-control" name="quantity" id="quantity" type="number">

            <label for="price">Price <span style="color: red">*</span></label>
            <input class="form-control" name="price" id="price" type="number">

            <label for="discount">DISCOUNT <span style="color: red">*</span></label>
            <input class="form-control" name="discount" id="discount" type="number">

            <label for="purchase_price">PURCHASE PRICE <span style="color: red">*</span></label>
            <input class="form-control" name="purchase_price" id="purchase_price" type="number">

            <label for="images">IMAGES <span style="color: red">*</span></label>
            <input class="form-control" type="file" id="images" name="images[]" multiple>

            <label for="description">DESCRIPTION <span style="color: red">*</span></label>
            <textarea id="description" class="form-control" name="description"></textarea>

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
@endsection
