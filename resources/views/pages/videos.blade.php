@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/videos.css') }}">
@endsection

@section('content')

    <ul class="videos__list list">
        <li class="list__item">
            @foreach($videos as $video)
            <article class="videos__item card">
                <a href="{{ route('watch') . '?v=' . $video['code'] }}" class="card__link">
                    <img src="{{ asset('storage/app') . '/' . $video['preview_path'] }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">{{ $video['title'] }}</h3><br>
                    <p class="card__description">{{ $video['description'] }}</p>
                    <div class="card__options">
                        <button class="card__delete">Delete</button>
                        <button class="card__status">Private</button>
                    </div>
                </div>
            </article>
            @endforeach
        </li>
    </ul>

@endsection
