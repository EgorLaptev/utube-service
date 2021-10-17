'use strict';

const headerFile = document.querySelector('#headerFile');
const avatarFile = document.querySelector('#avatarFile');

const headerForm = document.querySelector('#headerForm');
const avatarForm = document.querySelector('#avatarForm');

const headerLabel = document.querySelector('label[for="headerFile"]');
const avatarLabel = document.querySelector('label[for="avatarFile"]');

headerFile.addEventListener('input', e => {

    headerLabel.style.borderColor = 'var(--green)';
    headerLabel.style.color = 'var(--green)';

    fetch('settings/update/header', {
        method: 'POST',
        body: new FormData(headerForm)
    });

});

avatarFile.addEventListener('input', e => {

    avatarLabel.style.borderColor = 'var(--green)';
    avatarLabel.style.color = 'var(--green)';

    fetch('settings/update/avatar', {
        method: 'POST',
        body: new FormData(avatarForm)
    });

});
