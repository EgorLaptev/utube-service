'use strict';

const subscribeButton = document.querySelector('#subscribeButton');

subscribeButton.addEventListener('click', e => {

    subscribeButton.classList.toggle('subscribed');

    fetch(`/user/subscribe?id=${subscribeButton.value}`, {
        method: 'POST'
    })
        .then( resp => resp.text() )
        .then( resp => console.log(resp) );

});
