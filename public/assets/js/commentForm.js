'use strict';

const cancelComment  = document.querySelector('#cancelComment');
const commentForm    = document.querySelector('#commentForm');
const commentsList   = document.querySelector('#commentsList');
const commentContent = document.querySelector('#commentContent');

commentForm.addEventListener('submit', e => {

    e.preventDefault();

    fetch('/comment/upload', {
        method: 'POST',
        body: new FormData(commentForm)
    })  .then( resp => resp.json() )
        .then( comment => {

            const commentItem = document.createElement('li');
            commentItem.classList.add('comments__item');

            commentItem.innerHTML =
                `
                    <a href="${ comment['user_link'] }" class="comments__author-link">
                        <img src="${ comment['avatar'] }" alt="" class="comments__author-thumbnail">
                        <span class="comments__author-username">${ comment['username'] }</span>
                        <span class="comments__date">${ comment['created_at'] }</span>
                    </a>
                    <p class="comments__content">${ comment['content'] }</p>
                    <div class="comments__actions">
                        <button class="comments__like"><i class="far fa-thumbs-up"></i><span class="comments__likes-count">0</span></button>
                        <button class="comments__dislike"><i class="far fa-thumbs-down"></i><span class="comments__dislikes-count">0</span></button>
                    </div>
                `;

            commentContent.value = '';
            commentsList.prepend(commentItem);

        });

});

cancelComment.addEventListener('click', e => {
    e.preventDefault();
    commentContent.value = '';
});
