'use strict';

const sidebar = document.querySelector('#sidebar');
const sidebarToggle = document.querySelector('#sidebarToggle');

sidebarToggle.addEventListener('click', e => {
    document.body.classList.toggle('hidden-sidebar');
});
