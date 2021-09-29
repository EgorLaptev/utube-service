@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/home.css') }}">
@endsection

@section('content')
    <section class="videos">
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
        <article class="videos__card">
            <a class="videos__thumbnail-link" href="{{ route('watch') }}">
                <img src="{{ url('public/assets/img/placeholder.png')  }}" alt="" class="videos__thumbnail">
            </a>
            <div class="videos__title-wrap">
                <a class="videos__user-link" href="{{ route('user') }}">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="videos__user-thumbnail">
                </a>
                <a class="videos__title-link" href="{{ route('watch') }}">
                    <h3 class="videos__title">Test video title</h3>
                </a>
            </div>
        </article>
    </section>
@endsection
