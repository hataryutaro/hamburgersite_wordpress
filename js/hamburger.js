$(function($) {
    $(".js-hamburger").on("click", function() {
        $(this).toggleClass("is-open");
        $(".l-gmenu").toggleClass("is-open");
        $("body").toggleClass("is-open");
        console.log("test")
    });
});