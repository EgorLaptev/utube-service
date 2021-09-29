@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/watch.css') }}">
@endsection

@section('content')

    <main class="content">

        <section class="video">

            <video class="video__box" src="{{ url('public/assets/img/test.mp4') }}" controls autoplay></video>

            <section class="video__info">

                <h2 class="video__title">Test video title</h2>
                <span class="video__date">Feb 17 2021</span>
                <p class="video__description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>

                <div class="video__options">
                    <button class="video__like"><i class="far fa-thumbs-up"></i><span class="video__likes-count">143k</span></button>
                    <button class="video__dislike"><i class="far fa-thumbs-down"></i><span class="video__dislikes-count">2k</span></button>
                </div>

            </section>

            <section class="video__author-info">
                <a href="{{ route('user') }}" class="video__author-link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="video__author-thumbnail">
                    <span class="video__author-wrap">
                        <span class="video__author-username">John Smith</span><br>
                        <span class="video__author-subscribes">12k subscribes</span>
                    </span>
                </a>
                <button class="video__author-subscribe">Subscribe</button>
            </section>

            <section class="video__comments comments">

                <h3 class="comments__title">Comments</h3>

                <form action="#" method="POST" class="comments__form">
                    <textarea name="commentContent" id="commentContent" rows="2" class="comments__input"></textarea>
                </form>

                <ul class="comments__list">
                    <li class="comments__item">
                        <a href="{{ route('user') }}" class="comments__author-link">
                            <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="comments__author-thumbnail">
                            <span class="comments__author-username">John Smith</span>
                            <span class="comments__date">12 Apr 2021</span>
                        </a>
                        <p class="comments__content">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="comments__actions">
                            <button class="comments__like"><i class="far fa-thumbs-up"></i><span class="comments__likes-count">163</span></button>
                            <button class="comments__dislike"><i class="far fa-thumbs-down"></i><span class="comments__dislikes-count">4</span></button>
                        </div>
                    </li>>
                    <li class="comments__item">
                        <a href="{{ route('user') }}" class="comments__author-link">
                            <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="comments__author-thumbnail">
                            <span class="comments__author-username">John Smith</span>
                            <span class="comments__date">12 Apr 2021</span>
                        </a>
                        <p class="comments__content">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="comments__actions">
                            <button class="comments__like"><i class="far fa-thumbs-up"></i><span class="comments__likes-count">163</span></button>
                            <button class="comments__dislike"><i class="far fa-thumbs-down"></i><span class="comments__dislikes-count">4</span></button>
                        </div>
                    </li>>
                    <li class="comments__item">
                        <a href="{{ route('user') }}" class="comments__author-link">
                            <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="comments__author-thumbnail">
                            <span class="comments__author-username">John Smith</span>
                            <span class="comments__date">12 Apr 2021</span>
                        </a>
                        <p class="comments__content">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="comments__actions">
                            <button class="comments__like"><i class="far fa-thumbs-up"></i><span class="comments__likes-count">163</span></button>
                            <button class="comments__dislike"><i class="far fa-thumbs-down"></i><span class="comments__dislikes-count">4</span></button>
                        </div>
                    </li>>
                    <li class="comments__item">
                        <a href="{{ route('user') }}" class="comments__author-link">
                            <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="comments__author-thumbnail">
                            <span class="comments__author-username">John Smith</span>
                            <span class="comments__date">12 Apr 2021</span>
                        </a>
                        <p class="comments__content">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="comments__actions">
                            <button class="comments__like"><i class="far fa-thumbs-up"></i><span class="comments__likes-count">163</span></button>
                            <button class="comments__dislike"><i class="far fa-thumbs-down"></i><span class="comments__dislikes-count">4</span></button>
                        </div>
                    </li>
                </ul>

            </section>

        </section>

        <section class="recommendations"></section>

    </main>

@endsection
