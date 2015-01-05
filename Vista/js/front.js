$(document).on('ready', function () {

    $('#slider img:gt(0)').hide();
    setInterval(function () {
        $('#slider img:first-child').fadeOut(0)
                .next('img').fadeIn(1000)
                .end().appendTo('#slider');
    }, 4000);

});