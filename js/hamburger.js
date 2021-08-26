$(function($) {
    $(".js-hamburger").on("click", function() {
        $(this).toggleClass("is-open");
        $("p-gmenu").toggleClass("is-open");
        $(".nav-contener").slideToggle(200);
    });
});