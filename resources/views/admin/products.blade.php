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

            <a class="btn btn-success"  href="{{ route('admin.products.create') }}">Create</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Article</th>
                <th scope="col">Category Name</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th>
                        <img src="{{ asset($product->images[0]) }}" width="60" alt="">
                    </th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->article }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td><a class="btn btn-success" href="{{ route('admin.products.edit', $product->id) }}">Edit</a><a class="btn btn-danger" style="margin-left: 3px;" href="#">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection
