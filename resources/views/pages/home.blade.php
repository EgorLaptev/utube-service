@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/home.css') }}">
@endsection

@section('content')
    <section class="videos">
        @foreach($videos as $video)
            <article class="videos__card">
                <a class="videos__thumbnail-link" href="{{ route('watch') }}?v={{ $video['code']  }}">
                    <img src="{{ asset('storage/app') . '/' . $video['preview_path'] }}"  loading="lazy" alt="" class="videos__thumbnail">
                </a>
                <div class="videos__title-wrap">
                    <a class="videos__user-link" href="{{ route('user') . '?id=' . $video->author['id'] }}">
                        <img src="{{ $video->author->avatar ? asset('storage/app') . '/' . $video->author->avatar : url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                    </a>
                    <a class="videos__title-link" href="{{ route('watch') }}">
                        <h3 class="videos__title">{{ $video['title']  }}</h3>
                    </a>
                </div>
            </article>
        @endforeach
    </section>
@endsection
