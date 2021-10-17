@extends('templates.page')

@section('title') Sign in @endsection

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/sign-in.css') }}">
@endsection

@section('content')

    <main class="content">

        <span class="background-text">Sign in</span>

        <form action="" method="POST" class="sign-in">

            @csrf
            <input class="sign-in__input" type="email" name="email" placeholder="E-mail">
            <input class="sign-in__input" type="password" name="password" placeholder="Password">
            <input class="sign-in__submit" type="submit" value="Sign in">

            <div id="sign-in__errors">
                @if($errors->any())
                    {{ $errors->all()[0]  }}
                @endif
            </div>

        </form>

    </main>

@endsection
