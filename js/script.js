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



/* GROUP FRAMEWORK / NAV
=================================================== */
Array.from(document.querySelectorAll('.js__nav-mobile-button') || []).forEach(element => {
    element.onclick = function(){
        document.querySelector('html').classList.toggle('js--navIsOpen');
        /* This can be used to prevent animations from firing off before the nav is clicked e.g. a slide-down animation e.g. */
        // .js:not(.js--navIsOpen) /* nav*/.js__collapsedUntilNavOpened { display: none!important; }
        // document.querySelector('html').classList.add('js--navIsOpen');
    }
});
/* GROUP NAV / MEGA MENU
=================================================== */
/* Notes...

    - See mega-menu.css for HTML example

*/
/* GROUP NAV / MEGA MENU / FUNCTIONS
=================================================== */
function megaMenuStateClose() {
    // Remove any active states
    document.querySelector('html').classList.remove('js--megaMenuIsOpen');
    Array.from(document.querySelectorAll('nav') || []).forEach(element => {
        element.classList.remove('js--megaMenuActive');
    });
    Array.from(document.querySelectorAll('.c-mega-menu-container') || []).forEach(element => {
        element.classList.add('js--megaMenuClosed');
        element.classList.remove('js--megaMenuActive');
    });
    Array.from(document.querySelectorAll('.js--megaMenuActiveCurrentMenu') || []).forEach(element => {
        element.classList.remove('js--megaMenuActiveCurrentMenu');
    });
}
function megaMenuClose() {
    document.querySelector('html').classList.add('js--megaMenuHasBeenClosed');
    document.querySelector('html').classList.remove('js--megaMenuIsOpen-fadeFromNowOn', 'js--megaMenuHasFinishedAnimatingIn', 'js--megaMenuIsOpen');
}

function adjustMegaMenuFormFactor() {
    let width = window.innerWidth
    if ((width > 1200)) {
        document.querySelector('html').classList.remove('js--navIsOpen');
    }
}
window.onresize = adjustMegaMenuFormFactor;
/* GROUP NAV / MEGA MENU / INITIATE
=================================================== */
// If there is a click in the on a mega menu link
Array.from(document.querySelectorAll('.js__megaMenuInitiate')).forEach(element => {
    element.addEventListener('click', function(event) {
        // [1] Prevent the click
        event.preventDefault();

        // [2] Remove the closed class
        document.querySelector('html').classList.remove('js--megaMenuHasBeenClosed');
        // Check if the nav has already been opened. If it has then fade instead of wiping on subsequent clicks
        if(document.querySelector('html').classList.contains('js--megaMenuIsOpen')) {
            document.querySelector('html').classList.add('js--megaMenuIsOpen-fadeFromNowOn');
        }

        // [3] Remove any existing active states e.g. remove the active state of the first menu if we're clicking on second menu
        megaMenuStateClose();

        element.nextElementSibling.focus();
        document.querySelector('html').classList.add('js--megaMenuIsOpen');

        // [4] Add active states
        document.querySelector('html').classList.add('js--megaMenuIsOpen', 'js--megaMenuHasBeenOpened');
        element.nextElementSibling.classList.toggle('js--megaMenuActive');
        element.classList.toggle('js--megaMenuActiveCurrentMenu');
        // Reactivate the nav class after a short time so the animation has a chance to reset
        setTimeout(function() {
            element.closest('nav').classList.add('js--megaMenuActive');
        }, 50);
    });
});
/* GROUP NAV / MEGA MENU / BACK BUTTON
=================================================== */
// If there is a click in the on a mega menu link
Array.from(document.querySelectorAll('.js__megaMenuBackButton')).forEach(element => {
    element.addEventListener('click', function() {
        // [2] Remove any existing active states
        megaMenuStateClose();
    });
});
/* GROUP NAV / MEGA MENU / (OPTIONAL FOR "ALWAYS CLOSED" NAV) / RESET STATE ON ESCAPE
=================================================== */
// e.g. Give the Escape Key as an option to exit too
document.addEventListener('keydown', (event) => {
    if (!event.repeat && event.key === 'Escape') {
        megaMenuStateClose();
        megaMenuClose();
    }
});
/* GROUP NAV / MEGA MENU / (OPTIONAL FOR "ALWAYS CLOSED" NAV) / RESET STATE ON CLICK
=================================================== */
// e.g. Give clicking outside as an option to exit too
// Based on https://gomakethings.com/detecting-clicks-outside-of-an-element-with-vanilla-javascript/
// Listen for all clicks on the document
document.addEventListener('click', function (event) {
    // If the click happened inside the the container, bail
    if (event.target.closest('.c-site-header__nav')) return;
    // Otherwise, run our code...
    megaMenuStateClose();
    megaMenuClose();
}, false);






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