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
        <form action="{{ route('admin.brands.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="categories">CATEGORIES</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="title">NAME <span style="color: red">*</span></label>
            <input value="{{ $category->name }}" id="title" class="form-control" name="name" type="text">

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
