// NOTE - Move this to head.php as an inline script to improve performance
// <script>
/* Tell the html ASAP (without JS) to prevent a flicker of DOM changes e.g. nav collapsed. */
// document.querySelector('html').classList.remove('no-js');
// document.querySelector('html').classList.add('js');
// </script>




/* GROUP FRAMEWORK / NAV
=================================================== */
Array.from(document.querySelectorAll('.js__nav-mobile-button') || []).forEach(element => {
    element.onclick = function(){
        document.querySelector('html').classList.toggle('js--navIsOpen');
        /* This can be used to prevent animations from firing off before the nav is clicked e.g. a slide-down animation e.g. */
        // .js:not(.js--navHasBeenOpened) /* nav*/.js__collapsedUntilNavOpened { display: none!important; }
        document.querySelector('html').classList.add('js--navHasBeenOpened');
    }
});

/* GROUP FRAMEWORK / NAV / (OPTIONAL FOR "ALWAYS CLOSED" NAV) / RESET STATE
=================================================== */
/* e.g. Give the Escape Key as an option to exit too */
document.addEventListener('keydown', (event) => {
    if (!event.repeat && event.key === 'Escape') {
        document.querySelector('html').classList.contains('js--navIsOpen');
            document.querySelector('html').classList.remove('js--navIsOpen');
    }
});




/* GROUP
=================================================== */
/* Notes...

*/
/* HTML Example...

*/