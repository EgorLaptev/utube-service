'use strict';

function setCookie(name, value) {
  const updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  document.cookie = updatedCookie;
}
function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

const get = window.location.search
    .replace('?','')
    .split('&')
    .reduce(
        function(p,e){
            let a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );

if (!getCookie('history')) setCookie('history', JSON.stringify([]) );
const history = JSON.parse(getCookie('history'));
if (~~history.indexOf(get['v'])) history.push(get['v']);
setCookie('history', JSON.stringify(history));
