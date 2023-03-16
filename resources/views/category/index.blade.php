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
        <a class="btn btn-success" href="{{ route('admin.category.create') }}">Add Category</a>
        <a class="btn btn-primary" href="{{ route('admin.category.tree') }}">TREE</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success">EDIT</a>
                        <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger">DELETE</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
