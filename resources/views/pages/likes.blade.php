@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/likes.css') }}">
@endsection

@section('content')

    <ul class="likes__list list">
        <li class="list__item">
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
            <article class="likes__item card">
                <a href="{{ route('watch') }}" class="card__link">
                    <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="card__thumbnail">
                </a>
                <div class="card__info">
                    <h3 class="card__title">Test video title</h3>
                    <p class="card__description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</>
                </div>
                <button class="card__remove"><i class="fas fa-times"></i></button>
            </article>
        </li>
    </ul>

@endsection
