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
        <div class="links" >
            <a href="{{ route('admin.users') }}">Users</a>
            <a href="">Orders</a>
            <a href="{{ route('admin.categories') }}">Categories</a>
            <a href="{{ route('admin.brands') }}">Brands</a>
            <a href="{{ route('admin.products') }}">Products</a>
        </div>
        <a class="btn btn-success" href="{{ route('admin.brands.create') }}">Add Brand</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Brand Logo</th>
                <th scope="col">Brand Name</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <th>{{ $brand->id }}</th>
                    <td><img src="{{ asset($brand->logo) }}" alt="" width="100"></td>
                    <td>{{ $brand->name }}</td>
                    <td><a href="{{ route('admin.brand.edit', $brand->id) }}" class="btn btn-success">EDIT</a>
                        <a href="{{ route('admin.brand.delete', $brand->id) }}" class="btn btn-danger">DELETE</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
