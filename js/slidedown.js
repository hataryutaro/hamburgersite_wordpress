$(function() {
    $(".js-sd").hover(
        function() {
            $(".sub-menu:not(:animated)", this).slideDown();
        },
        function() {
            $(".sub-menu", this).slideUp(0);
        }
    );
});