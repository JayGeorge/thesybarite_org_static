/* GROUP STATIC ONLY / FAKE LOGIN STATE
=================================================== */
Array.from(document.querySelectorAll('.js__staticOnlyFakeLoggedInState') || []).forEach(element => {
    element.onclick = function(){
        localStorage.setItem("logged-in", "yes");
    }
});
if (localStorage.getItem('logged-in') === 'yes') {
    /* Add a current page class to the nav item */
    document.getElementById('js__staticOnlyLoginText').textContent = 'John Cofie';
}