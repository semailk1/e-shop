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
        <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


            <label for="title">NAME <span style="color: red">*</span></label>
            <input value="{{ $brand->name }}" id="title" class="form-control" name="name" type="text">


            <label for="logo">LOGO <span style="color: red">*</span></label>
            <div class="logo">

                <input class="form-control" type="file" id="logo" name="logo">
                <div class="images-container">

                        <div class="image-box">
                            <img src="{{ asset($brand->logo) }}" class="product-images" alt="">
                            <button type="button" class="btn btn-danger image-remove">Delete
                            </button>
                        </div>

                </div>
            </div>


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
