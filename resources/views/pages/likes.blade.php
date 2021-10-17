@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/likes.css') }}">
@endsection

@section('content')

    <main class="content">

        <span class="background-text">Liked videos</span>

        <ul class="likes__list list">
            @foreach($videos as $video)
                <li class="list__item">
                    <article class="likes__item card">
                        <a href="{{ route('watch', ['v' => $video['code']]) }}" class="card__link">
                            <img src="{{ asset('storage/app') . '/' . $video['preview_path'] }}" alt="" class="card__thumbnail">
                        </a>
                        <div class="card__info">
                            <h3 class="card__title">{{ $video['title'] }}</h3>
                            <p class="card__description">{{ $video['description'] }}</p>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>

    </main>

@endsection
