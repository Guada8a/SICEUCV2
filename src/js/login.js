$(document).ready(function() {
    $('.login').click(function() {
        $('.login').css('display', 'none');
        $('.login-form').css('display', 'block');
        //Redirect to login page
        window.location.href = 'inicio.html';
    });
});