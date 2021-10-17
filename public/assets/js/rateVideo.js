'use strict';

const likeVideo = document.querySelector('#likeVideo');
const dislikeVideo = document.querySelector('#dislikeVideo');

const likesVideoCount = document.querySelector('#likesVideoCount');
const dislikesVideoCount = document.querySelector('#dislikesVideoCount');

likeVideo.addEventListener('click', e => {

    fetch(`video/like?id=${ likeVideo.dataset.video_id }`)
        .then( resp => resp.json() )
        .then( ([likes, dislikes]) => {

            likesVideoCount.textContent = likes;
            dislikesVideoCount.textContent = dislikes;

            likeVideo.className = (likeVideo.className !== 'fas fa-thumbs-up') ? 'fas fa-thumbs-up' : 'far fa-thumbs-up';
            dislikeVideo.className = 'far fa-thumbs-down';

        });

});

dislikeVideo.addEventListener('click', e => {

    fetch(`video/dislike?id=${ dislikeVideo.dataset.video_id }`)
        .then( resp => resp.json() )
        .then( ([likes, dislikes]) => {

            likesVideoCount.textContent = likes;
            dislikesVideoCount.textContent = dislikes;

            dislikeVideo.className = (dislikeVideo.className !== 'fas fa-thumbs-down') ? 'fas fa-thumbs-down' : 'far fa-thumbs-down';
            likeVideo.className = 'far fa-thumbs-up';

        });

});
