@extends('templates.page')

@section('links')
    <link rel="stylesheet" href="{{ url('public/assets/css/upload.css') }}">
@endsection

@section('content')

    <main class="content">
        <form action="{{ route('upload-video') }}" method="POST" class="upload-form" enctype="multipart/form-data">

            @csrf

            <label for="video" class="upload-form__drop">
                <video src="" width="110%" height="50%" alt="" id="previewVideo" controls></video>
                Upload video
            </label>
            <input type="file" name="video" id="video" class="upload-form__file">

            <div class="upload-form__options">

                <label for="preview" class="upload-form__preview-drop">
                    <img src="" alt="" id="picturePreview">
                    Upload preview
                </label>
                <input type="file" name="preview" id="preview" class="upload-form__preview" value="">

                <input type="text" name="title" class="upload-form__title" placeholder="Title" value="{{ old('title') }}">
                <textarea id="videoDescription" name="description" class="upload-form__description" placeholder="Description" rows="5">{{ old('description') }}</textarea>

                <label for="closedComments" class="upload-form__close-comments">Disable comments</label>
                <input type="hidden" name="disabled_comments" value="0">
                <input type="checkbox" id="closedComments" class="closedComments" name="disabled_comments" value="1">

                <label for="privateVideo" class="upload-form__private-video">Private video</label>
                <input type="hidden" name="private" value="0">
                <input type="checkbox" id="privateVideo" class="privateVideo" name="private" value="1">

                <input type="submit" class="upload-form__upload" value="Upload">

            </div>

            <div id="upload__errors">
                @if($errors->any())
                    {{ $errors->all()[0]  }}
                @endif
            </div>

        </form>
    </main>

@endsection

@section('scripts')
    <script src='{{ url('public/assets/js/uploadUI.js') }}'></script>
@endsection
