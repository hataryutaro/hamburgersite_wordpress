$(function() {
    $(window).scroll(function() {
        var yLine = $(this).scrollTop()
        $('.bg2').css('background-position', 'center top ' + parseInt(-yLine / 100) + 'px');
        $('.bg3').css('background-position', 'center top ' + parseInt(-yLine / 5) + 'px');
    });
});