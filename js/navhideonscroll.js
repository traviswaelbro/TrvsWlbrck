var previousScroll = 0,
    headerOrgOffset = $('#navit').height();

$('#wrapp').height($('#navit').height());

$(window).scroll(function () {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > headerOrgOffset) {
        if (currentScroll > previousScroll) {
            $('#wrapp').slideUp();
        } else {
            $('#wrapp').slideDown();
        }
    } 
    previousScroll = currentScroll;
});