/*  登录弹窗 */
jQuery(document).ready(function($) {
    $('#login-main').click(function(){
        $('.theme-login-mask').fadeIn(100);
        $('.theme-login').slideDown(200);
    })
    $('.theme-loginpoptit .loginclose').click(function(){
        $('.theme-login-mask').fadeOut(100);
        $('.theme-login').slideUp(200);
    })

})
/*  注册弹窗  */
jQuery(document).ready(function($) {
    $('#register-main').click(function(){
        $('.theme-register-mask').fadeIn(100);
        $('.theme-register').slideDown(200);
    })
    $('.theme-registerpoptit .registerclose').click(function(){
        $('.theme-register-mask').fadeOut(100);
        $('.theme-register').slideUp(200);
    })

})