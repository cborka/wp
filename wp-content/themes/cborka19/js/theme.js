'use strict';

document.getElementById('eee').innerHTML = ' js ';

let aside = document.getElementById('left_sidebar').innerHTML;


function show_hide_sidebar()
{
    if (document.getElementById('left_sidebar').innerHTML == '')
        document.getElementById('left_sidebar').innerHTML = aside;
    else
        document.getElementById('left_sidebar').innerHTML = '';

}