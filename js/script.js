/*! Notes...

    Author: Jay George
    Author URI: https://jaygeorge.co.uk

    ABOUT THIS JAVASCRIPT
    ===================================================
    The following is placed in the `head` file as an inline script to improve performance
    <script>
        // Tell the html ASAP (without JS) to prevent a flicker of DOM changes e.g. nav collapsed.
        document.querySelector('html').classList.remove('no-js');
        document.querySelector('html').classList.add('js');
    </script>

    - JS 'hooks' in the DOM are prefixed with `__` and written in camel case like this `js__thisIsAHook`
    - Classes added by JS are prefixed with `--` and written in camel case like this `js--thisHasBeenAddedByJS`

*/




/* GROUP FRAMEWORK / STATIC ONLY / HIGHLIGHT CURRENT NAV ITEM
=================================================== */
/* Need this locally in case we're running on NGINX instead of Apache */
// https://stackoverflow.com/questions/6964503/using-javascript-to-highlight-current-page-in-navbar
// var url = window.location.href.split("/");
// var nav_links = document.getElementsByTagName("nav")[0].getElementsByTagName("a");
// var i=0;
// var current_page = url[url.length - 1];
// for(i;i < nav_links.length; i++){
//     var lb = nav_links[i].href.split("/");
//     if(lb[lb.length-1] == current_page) {
//         nav_links[i].className = "current-menu-item";
//     }
// }




/* GROUP NAV / MEGA MENU
=================================================== */
/* Notes...

*/
/* HTML Example...

*/
// If there is a click in the on a mega menu link
Array.from(document.querySelectorAll('.js__megaMenuInitiate')).forEach(element => {
    element.addEventListener('click', function(event) {
        Array.from(document.querySelectorAll('.c-mega-menu-container') || []).forEach(element => {
            element.classList.remove('js--megaMenuActive');
        });
        Array.from(document.querySelectorAll('.js--megaMenuActiveCurrentMenu') || []).forEach(element => {
            element.classList.remove('js--megaMenuActiveCurrentMenu');
        });

        // Prevent the click
        event.preventDefault();
        // add a class to the ul
        element.nextElementSibling.classList.toggle('js--megaMenuActive');
        element.closest('nav').classList.toggle('js--megaMenuActive');
        element.classList.toggle('js--megaMenuActiveCurrentMenu');
    });
});






/* GROUP FRAMEWORK / CLICK
=================================================== */
/* Notes...

*/
/* HTML Example...

*/
// Array.from(document.querySelectorAll('.js__activateSomething') || []).forEach(element => {
//     element.onclick = function(){
//         // Maybe this
//         document.querySelector('html').classList.toggle('js--somethingIsOpen');
//         // Or maybe this
//         element.classList.toggle('qa-test');
//     }
// });