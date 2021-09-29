'use strict';

/* Animate toggles */
const closedCommentsLabel = document.querySelector('.upload-form__close-comments');
const closedComments = document.querySelector('#closedComments');

const privateVideoLabel = document.querySelector('.upload-form__private-video');
const privateVideo = document.querySelector('#privateVideo');

closedComments.addEventListener('input', e => {
    closedCommentsLabel.classList.toggle('upload-form__close-comments_active');
});

privateVideo.addEventListener('input', e => {
    privateVideoLabel.classList.toggle('upload-form__private-video_active');
});

/* Generate uploaded video */
const videoInput   = document.querySelector('#video');
const videoPreview = document.querySelector('#previewVideo');

videoInput.addEventListener('input', e => {

    const video = e.target.files[0];
    const allowedFormats = ['video/mp4', 'audio/mp4'];

    if (allowedFormats.includes(video.type)) {
        videoPreview.src = window.URL.createObjectURL(video);
        videoPreview.style.display = 'block';
    }

});

/* Generate default preview */
const previewInput   = document.querySelector('#preview');
const picturePreview = document.querySelector('#picturePreview');

previewInput.addEventListener('input', e => {

    const preview = e.target.files[0];
    const allowedFormats = ['image/jpg', 'image/jpeg', 'image/webp', 'image/png', 'image/bmp'];

    if (allowedFormats.includes(preview.type)) {
        picturePreview.src = window.URL.createObjectURL(preview);
        picturePreview.style.display = 'block';
    }

});

