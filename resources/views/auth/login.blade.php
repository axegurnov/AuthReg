<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Вход</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app_auth.css') }}?v=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="main">
    <div class="container">
        <div class="middle">
            <div id="login">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    @if($errors->has('login'))
                    <div class="alert-error-form" role="alert">
                                <strong>{{$errors->first('login')}}</strong>
                    </div>
                    @endif
                    <fieldset class="clearfix">
                        <p><span class="fa fa-user"></span><input id="login" name="login" type="text" Placeholder="Логин" required autofocus></p>
                        <p><span class="fa fa-lock"></span><input id="password" name="password" type="password" Placeholder="Пароль" required></p>
                        <div><span style="width:100%; text-align:right;  display: inline-block;">
                                <input type="submit" value="Войти">
                            </span>
                        </div>
                    </fieldset>
                    <div class="clearfix"></div>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="logo">Laravel
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>