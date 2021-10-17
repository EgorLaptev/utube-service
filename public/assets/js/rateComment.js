'use strict';

const likeComment = document.querySelector('#likeComment');
const dislikeComment = document.querySelector('#dislikeComment');

const likesCommentCount = document.querySelector('#likesCommentCount');
const dislikesCommentCount = document.querySelector('#dislikesCommentCount');

likeComment.addEventListener('click', e => {

    fetch(`comment/like?id=${ likeComment.dataset.comment_id }`)
        .then( resp => resp.json() )
        .then( ([likes, dislikes]) => {

            likesCommentCount.textContent = likes;
            dislikesCommentCount.textContent = dislikes;

            likeComment.className = (likeComment.className !== 'fas fa-thumbs-up') ? 'fas fa-thumbs-up' : 'far fa-thumbs-up';
            dislikeComment.className = 'far fa-thumbs-down';

        });

});

dislikeComment.addEventListener('click', e => {

    fetch(`comment/dislike?id=${ dislikeComment.dataset.comment_id }`)
        .then( resp => resp.json() )
        .then( ([likes, dislikes]) => {

            likesCommentCount.textContent = likes;
            dislikesCommentCount.textContent = dislikes;

            dislikeComment.className = (dislikeComment.className !== 'fas fa-thumbs-down') ? 'fas fa-thumbs-down' : 'far fa-thumbs-down';
            likeComment.className = 'far fa-thumbs-up';

        });

});
