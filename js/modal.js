/*! Notes...

    Author: Jay George
    Author URI: https://jaygeorge.co.uk

    ABOUT THIS JAVASCRIPT
    ===================================================
    - JS 'hooks' in the DOM are prefixed with `__` and written in camel case like this `js__thisIsAHook`
    - Classes added by JS are prefixed with `--` and written in camel case like this `js--thisHasBeenAddedByJS`

*/


/* GROUP FRAMEWORK / (NON CORE) / MODAL
=================================================== */
// [1] Show the modal which creates a background
// If you're using a button...
Array.from(document.querySelectorAll('.js__showModal')).forEach(element => {
    element.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('html').classList.add('js--modalActive');
        // Focus the modal close button.
        document.querySelector('.js__modal').querySelector('button').focus();
        // Leave a breadcrumb for getting back to the previous focus point
        element.classList.add('js__previousFocusPoint');
    });
});

// [2] Attach an event
function escape_modal() {
    if(document.querySelector('html').classList.contains('js--modalActive')) {
        document.querySelector('html').classList.remove('js--modalActive');
        // Get back to the previous focus point
        document.querySelector('.js__previousFocusPoint').focus();
        // Remove the breadcrumb
        document.querySelector('.js__previousFocusPoint').classList.remove('js__previousFocusPoint');
    }
}
// ...to the close icon
Array.from(document.querySelectorAll('.js__closeModal')).forEach(element => {
    element.addEventListener('click', function() {
        escape_modal();
    });
});
// ...or a keyboard shortcut to escape the modal
document.addEventListener('keydown', (event) => {
    if (!event.repeat && event.key === 'Escape') {
        escape_modal();
    }
});
// ...or clicking outside the modal
// If there is a click in the modal overlay area
Array.from(document.querySelectorAll('.js__modal')).forEach(element => {
    element.addEventListener('click', function(event) {
        // If the click happens inside the actual modal box (and not the background), then bail
        if (event.target.closest('.js__modalBox')) return;
            // Otherwise we must be outside the modal box so close the modal
            escape_modal();
    });
});