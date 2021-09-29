@extends('templates.page')

@section('title') Sign up @endsection

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/sign-up.css') }}">
@endsection

@section('content')

    <main class="content">

        <span class="background-text">Sign up</span>

        <form action="{{ route('sign-up') }}" method="POST" class="sign-up">

            @csrf
            <input class="sign-up__input" type="text" name="username" placeholder="Username">
            <input class="sign-up__input" type="email" name="email" placeholder="E-mail">
            <input class="sign-up__input" type="password" name="password" placeholder="Password">
            <input class="sign-up__input" type="password" name="password_confirmation" placeholder="Confirm password">
            <input class="sign-up__submit" type="submit" value="Sign up">

            <div id="sign-up__errors">
                @if($errors->any())
                    {{ $errors->all()[0]  }}
                @endif
            </div>

        </form>

    </main>

@endsection
