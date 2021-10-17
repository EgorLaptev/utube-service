@extends('templates.page')

@section('title') Settings @endsection

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/settings.css') }}">
@endsection

@section('content')

    <main class="content">

        <span class="background-text">Settings</span>

        <section class="settings">

            <form class="settings__card" id="headerForm" enctype="multipart/for">
                <h3 class="settings__subtitle">Header</h3>
                <label for="headerFile" class="settings__file-label">Choose photo</label>
                <input type="file" name="header" id="headerFile" class="settings__file-input">
            </form>

            <form class="settings__card" id="avatarForm" enctype="multipart/for">
                <h3 class="settings__subtitle">Avatar</h3>
                <label for="avatarFile" class="settings__file-label">Choose photo</label>
                <input type="file" name="avatar" id="avatarFile" class="settings__file-input">
            </form>

            <form class="settings__card">
                <h3 class="settings__subtitle">Username</h3>
                <input type="password" name="password" class="settings__input" placeholder="Password">
                <input type="text" name="username" class="settings__input" placeholder="Enter new username">
                <input type="button" class="settings__update" value="Update">
            </form>


            <form class="settings__card">
                <h3 class="settings__subtitle">Update E-mail</h3>
                <input type="password" name="password" class="settings__input" placeholder="Password">
                <input type="text" name="username" class="settings__input" placeholder="Enter new E-mail">
                <input type="button" class="settings__update" value="Update">
            </form>

            <form class="settings__card">
                <h3 class="settings__subtitle">Update password</h3>
                <input type="password" name="old_password" class="settings__input" placeholder="Old password">
                <input type="password" name="new_password" class="settings__input" placeholder="New password">
                <input type="password" name="new_password" class="settings__input" placeholder="Repeat new password">
                <input type="button" class="settings__update" value="Update">
            </form>

        </section>

    </main>

@endsection

@section('scripts')
    <script src='{{ url('public/assets/js/settings.js')  }}'></script>
@endsection
