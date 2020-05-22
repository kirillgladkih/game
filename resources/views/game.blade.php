@extends('layouts.app')

@section('action')
<li class="nav-item">
    <a class="nav-link" href="{{ route('home.index') }}">{{ __('В меню') }}</a>
</li>

@endsection
   
@section('content')
<div class="container-fluid">
            <div id="lifes" style="position: :absolute">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
            <h2 id="score" class="float-right" style="position: :absolute"> score: 0 </h2>
            <h2 class="text-center pt-1">{{ Auth::user()->name }}</h2>
            <div id="player" class="skin_2" ></div> 
       
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" integrity="sha256-bd8XIKzrtyJ1O5Sh3Xp3GiuMIzWC42ZekvrMMD4GxRg=" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Warfare</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

</head>
<body>
<form action="{{ route('home.index') }}" class="m-2">
    <div class="form-group">
        <button class="btn btn-dark p-4">В главое меню</button>
    </div>
</form>
<h2 class="text-wcenter mt-2">Игрок : {{ Auth::user()->name}}</h2>
<input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
<div id="lifes">
    <span></span>
    <span></span>
    <span></span>
</div>
<h1 id="score" class="text-center"> score: 0 </h1>
<div id="player" class="skin_2"></div>         <!-- Главный игрок -->

<!-- Враг(и) -->

<!-- Пуля, который выпускает главный игрок -->

<!-- Анимация взрыва при попадании пули -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" integrity="sha256-bd8XIKzrtyJ1O5Sh3Xp3GiuMIzWC42ZekvrMMD4GxRg=" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html> --}}