jQuery(function($) {
    jQuery(".js-hamburger").on("click", function() {
        $(this).toggleClass("is-open");
        $(".l-sidebar").toggleClass("is-open");
        $("body").toggleClass("is-open");
        console.log("test")
    });
});