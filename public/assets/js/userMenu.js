'use strict';

const userMenu       = document.querySelector('#userMenu');
const toggleUserMenu = document.querySelector('#toggleUserMenu');

toggleUserMenu.addEventListener('click', e => {
    userMenu.classList.toggle('user-menu_opened');
});
