@extends('layouts.app')

@section('action')
<li class="nav-item">
    <a class="nav-link" href="{{ route('game.index') }}">{{ __('В игру ') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Выход') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Таблица рекордов</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 class='text-center mb-3' style="font-size: 1.1em">Твой ник: {{ Auth::user()->name }}</h5>
                    <table class="table text-center">
                        <thead>
                            <th>Место</th>
                            <th>Ник</th>
                            <th>Кол-во очков</th>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($data as $item)
                            <tr class="
                                @if(Auth::user()->id == $item->user_id) bg-user @endif
                            ">
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->score }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
