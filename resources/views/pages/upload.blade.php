@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/upload.css') }}">
@endsection

@section('content')

    <main class="content">
        <form action="#" method="POST" class="upload-form">

            <label for="video" class="upload-form__drop">
                <video src="" width="110%" height="50%" alt="" id="previewVideo" controls></video>
                Upload video
            </label>
            <input type="file" id="video" class="upload-form__file">

            <div class="upload-form__options">

                <label for="preview" class="upload-form__preview-drop">
                    <img src="" alt="" id="picturePreview">
                    Upload preview
                </label>
                <input type="file" id="preview" class="upload-form__preview">

                <input type="text" name="videoTitle" class="upload-form__title" placeholder="Title">
                <textarea id="videoDescription" name="videoDescription" class="upload-form__description" placeholder="Description" rows="5"></textarea>

                <label for="closedComments" class="upload-form__close-comments">Disable comments</label>
                <input type="checkbox" id="closedComments" class="closedComments" name="closedComments">

                <label for="privateVideo" class="upload-form__private-video">Private video</label>
                <input type="checkbox" id="privateVideo" class="privateVideo" name="privateVideo">

                <input type="submit" class="upload-form__upload" value="Upload">

            </div>

        </form>
    </main>

@endsection

@section('scripts')
    <script src='{{ url('public/assets/js/uploadUI.js') }}'></script>
@endsection
