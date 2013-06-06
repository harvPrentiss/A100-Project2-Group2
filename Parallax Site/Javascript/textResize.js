$(function() {
    $('#headerBannerText').css('font-size', '1em');
    
    while( $('#headerBannerText').width() > $('#headerBannerBlock').width() ) {
        $('#headerBannerText').css('font-size', (parseInt($('#headerBannerText').css('font-size')) - 1) + "px" );
    }
    
});