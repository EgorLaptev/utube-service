@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/subscribes.css') }}">
@endsection

@section('content')

    <main class="content">

        <span class="background-text">Subscribes</span>

        <ul class="subscribes__list list">
            @foreach($channels as $channel)
                <li class="list__item">
                    <article class="subscribes__item card">
                        <a href="{{ route('user', ['id' => $channel['id']]) }}" class="card__link">
                            <img src="{{ asset('storage/app') . '/' . $channel['avatar'] }}" alt="" class="card__thumbnail">
                        </a>
                        <div class="card__info">
                            <h3 class="card__title">{{ $channel['username'] }}</h3>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>

    </main>

@endsection
