/* GROUP STATIC ONLY / FAKE LOGIN STATE
=================================================== */
Array.from(document.querySelectorAll('.js__staticOnlyFakeLoggedInState') || []).forEach(element => {
    element.onclick = function(){
        localStorage.setItem("logged-in", "yes");
    }
});
if (localStorage.getItem('logged-in') === 'yes') {
    /* Add a current page class to the nav item */
    document.querySelector('#js__loggedOut').remove();
} else {
    document.querySelector('#js__loggedIn').remove();
}

// Log Out button will fake logging out
Array.from(document.querySelectorAll('.js__staticOnlyFakeLoggedOutState') || []).forEach(element => {
    element.onclick = function(){
        localStorage.removeItem('logged-in');
    }
});