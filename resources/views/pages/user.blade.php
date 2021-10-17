@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/user.css') }}">
@endsection

@section('content')

<main class="content">

    <img src="{{ $user->header ? asset('storage/app') . '/' . $user->header : url('public/assets/img/placeholder.png') }}" alt="" class="channel-header">

    <section class="channel-info">

        <div class="channel-info__wrapper">
            <img class="channel-info__avatar" src="{{ asset('storage/app') . '/' . $user->avatar }}" alt="user's avatar">
            <div class="channel-info__wrapper-info">
                <span class="channel-info__username">{{ $user['username'] }}</span>
                <span class="channel-info__subscribers">{{ $user->subscribers->count() }} Subscribers</span>
            </div>
        </div>

        <button class="channel-info__subscribe {{ $subscriber ? 'subscribed' : '' }}" id="subscribeButton" value="{{ $user['id'] }}">Subscribe</button>

    </section>

    <section class="channel-info__videos">
        @foreach($user->videos as $video)
            @if(!$video['private'] || $user['id'] == \Illuminate\Support\Facades\Auth::id())
            <article class="channel-info__card">
                <a href="{{ route('watch') . '?v=' . $video['code'] }}">
                    <img  class="channel-info__preview" src="{{ asset('storage/app') . '/' . $video['preview_path'] }}" alt="">
                </a>
                <h3 class="channel-info__title"><a href="{{ route('watch') . '?v=' . $video['code'] }}">{{ $video['title'] }}</a></h3>
            </article>
            @endif
        @endforeach
    </section>

</main>

@endsection

@section('scripts')
    <script src='{{ url('public/assets/js/subscribe.js') }}'></script>
@endsection
