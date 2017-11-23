$(document).ready(function(){
    $('#myTeam').click(function() {
        $('#myTeam').toggleClass("active",true);
        $('#myFollow').toggleClass("active",false);
    });
    $('#myFollow').click(function() {
        $('#myTeam').toggleClass("active",false);
        $('#myFollow').toggleClass("active",true);
    });
    
    $('.privateLetter').click(function(){
        $('.prilet-mask').fadeIn(100);
        $('.prilet-popover').slideDown(200);
    });
    $('.prilet-poptit .close').click(function(){
        $('.prilet-mask').fadeOut(100);
        $('.prilet-popover').slideUp(200);
    });
    
});

