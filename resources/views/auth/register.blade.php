<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF TOKEN -->
    <meta name="csrf-toekn" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- CSRF TOKEN -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <h1>Вход</h1>

    <form class="col-3 offset-4 border rounded" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="col-form-label-lg">{{__('Name')}}</label>
                <input type="text" class="form control" name="name" placeholder="{{__('Name')}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="col-form-label-lg">{{__('Email')}}</label>
                <input type="text" class="form control" name="email" placeholder="{{__('Email')}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label-lg">{{__('Password')}}</label>
                <input type="password" class="form control" name="password" placeholder="{{__('Password')}}">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary" value="{{__('Register')}}">
            </div>
    </form>

</body>
</html>
