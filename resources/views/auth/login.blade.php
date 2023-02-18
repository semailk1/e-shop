@extends('layouts.main')
@section('content')
    <!-- START PAGE-CONTENT -->
    <section class="page-content">
        <!-- Start Account-Create-Area -->
        <div class="account-create-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="page-menu">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="account.html">Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h3 class="title-group gfont-1">Login</h3>
                        </div>
                    </div>
                </div>
                <div class="account-create">
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="account-create-box">
                                    <h2 class="box-info">Login Information</h2>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-create">
                                                <p>Email<sup>*</sup></p>
                                                <input class="form-control" value="{{ old('email') }}" required
                                                       type="email" name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-create">
                                                <p>Password <sup>*</sup></p>
                                                <input class="form-control" required type="password" name="password"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                @endif

                                <div class="submit-area">
                                    <p class="required text-right">* Required Fields</p>
                                    <button type="submit" class="btn btn-primary floatright">submit</button>
                                    <a href="login.html" class="float-left"><span><i
                                                class="fa fa-angle-double-left"></i></span> Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Account-Create-Area -->
@endsection
