$(document).on('ready', function () {

    $('#slider img:gt(0)').hide();
    setInterval(function () {
        $('#slider img:first-child').fadeOut(0)
                .next('img').fadeIn(1000)
                .end().appendTo('#slider');
    }, 5000);
    var cant = $(".banner").length;
    for(var i = 0; i<cant; i++)
    $(".banner").eq(i).css("width",100.0/cant+"%")
});