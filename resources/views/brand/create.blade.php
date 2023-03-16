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
        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">NAME <span style="color: red">*</span></label>
            <input type="text" name="name" class="form-control">

            <label for="logo">LOGO <span style="color: red">*</span></label>
            <input class="form-control" type="file" id="logo" name="logo">

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
