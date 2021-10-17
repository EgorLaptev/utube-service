@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/watch.css') }}">
@endsection

@section('title') {{ $video['title'] }} @endsection

@section('content')

        <main class="content">

        <section class="video">

            <video class="video__box" src="{{ asset('storage/app') . '/' . $video->path }}" controls autoplay></video>

            <section class="video__info">

                <h2 class="video__title">{{ $video->title }}</h2>
                <span class="video__date">{{ date_format($video->created_at, 'M j, Y') }}</span>
                <p class="video__description">{{ $video->description }}</p>

                <div class="video__options">
                    <button class="video__like" ><i class="{{ $liked ? 'fas fa-thumbs-up' : 'far fa-thumbs-up' }}" id="likeVideo" data-video_id="{{ $video->id }}"></i><span id="likesVideoCount" class="video__likes-count">{{ $video->likes->count() }}</span></button>
                    <button class="video__dislike" ><i class="{{ $disliked ? 'fas fa-thumbs-down' : 'far fa-thumbs-down' }}" id="dislikeVideo" data-video_id="{{ $video->id }}"></i><span id="dislikesVideoCount" class="video__dislikes-count">{{ $video->dislikes->count() }}</span></button>
                </div>

            </section>

            <section class="video__author-info">
                <a href="{{ route('user') . '?id=' . $video->author['id'] }}" class="video__author-link">
                    <img src="{{ asset('storage/app') . '/' . $video->author['avatar'] }}" alt="" class="video__author-thumbnail">
                    <span class="video__author-wrap">
                        <span class="video__author-username">{{ $video->author['username'] }}</span><br>
                        <span class="video__author-subscribes">{{ $video->author->subscribers->count() }} subscribes</span>
                    </span>
                </a>

                <div class="buttons-wrap">
                    <button class="video__download" id="downloadVideo"><i class="fas fa-cloud-download-alt"></i>    </button>
                    @auth <button class="video__author-subscribe {{ $subscriber ? 'subscribed' : '' }}" id="subscribeButton" value="{{ $video->author['id'] }}">Subscribe</button> @endauth
                </div>

            </section>
            @if(!$video['disabled_comments'])
                <section class="video__comments comments">

                    <h3 class="comments__title">Comments</h3>

                    <form action="#" method="POST" class="comments__form" id="commentForm">
                        <input type="hidden" name="video_id" value="{{ $video['id'] }}">
                        <textarea name="content" id="commentContent" rows="2" class="comments__input"></textarea>
                        <button type="submit" class="comments__send"><i class="fab fa-telegram-plane"></i></button>
                        <button type="button" class="comments__clear" id="cancelComment">Cancel</button>
                    </form>

                    <ul class="comments__list" id="commentsList">
                        @foreach($comments as $comment)
                            <li class="comments__item">
                                <a href="{{ route('user', ['id' => $comment->user['id']])  }}" class="comments__author-link">
                                    <img src="{{ asset('storage/app') . '/' . $comment->user['avatar'] }}" alt="" class="comments__author-thumbnail">
                                    <span class="comments__author-username">{{ $comment->user['username'] }}</span>
                                    <span class="comments__date">{{ date_format($comment['created_at'], 'M j, Y') }}</span>
                                </a>
                                <p class="comments__content">{{ $comment['content'] }}</p>
                                <div class="comments__actions">
                                    <button class="comments__like"><i class="{{ \App\Models\CommentLike::where([['comment_id', $comment['id'], ['user_id', \Illuminate\Support\Facades\Auth::id()]]])->exists() ? 'fas fa-thumbs-up' : 'far fa-thumbs-up' }}" id="likeComment" data-comment_id="{{ $comment['id'] }}"></i><span class="comments__likes-count" id="likesCommentCount">{{ \App\Models\CommentLike::where('comment_id', $comment['id'])->count() }}</span></button>
                                    <button class="comments__dislike"><i class="{{ \App\Models\CommentDislike::where([['comment_id', $comment['id'], ['user_id', \Illuminate\Support\Facades\Auth::id()]]])->exists() ? 'fas fa-thumbs-down' : 'far fa-thumbs-down' }}" id="dislikeComment" data-comment_id="{{ $comment['id'] }}"></i><span class="comments__dislikes-count" id="dislikesCommentCount">{{ \App\Models\CommentDislike::where('comment_id', $comment['id'])->count() }}</span></button>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </section>
                @endif

        </section>

        <section class="recommendations">
            @foreach($recommendations as $video)
                <article class="recommendations__card">
                    <a href="{{ route('watch') . '?v=' . $video['code'] }}">
                        <img  class="recommendations__preview" src="{{ asset('storage/app') . '/' . $video['preview_path'] }}" alt="">
                    </a>
                    <h3 class="recommendations__title"><a href="{{ route('watch') . '?v=' . $video['code'] }}">{{ $video['title'] }}</a></h3>
                </article>
            @endforeach
        </section>

    </main>

@endsection

@section('scripts')
    <script src='{{ url('public/assets/js/commentForm.js') }}'></script>
    <script src='{{ url('public/assets/js/rateVideo.js') }}'></script>
    <script src='{{ url('public/assets/js/rateComment.js') }}'></script>
    <script src='{{ url('public/assets/js/subscribe.js') }}'></script>
    <script src='{{ url('public/assets/js/saveHistory.js') }}'></script>
@endsection
