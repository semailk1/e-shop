<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .card {
        width: 100%;
        height: 50%;
        margin-top: 10%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .email input, .password input {
        box-shadow: 5px 10px #888888;
        width: 100%;
        height: 50px;
        font-family: 'Roboto', sans-serif;
    }

    .email label, .password label {
        margin-top: 20px;
        font-family: 'Roboto', sans-serif;
    }
    .submit button {
        margin-top: 20px;
        width: 100%;
        height: 50px;
    }
</style>
<body>
<div class="container">
    <div class="card">
        <form action="{{ route('admin.auth') }}" method="POST">
            @csrf
            <div class="email">
                <label for="email">EMAIL</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="password">
                <label for="password">PASSWORD</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="submit">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
