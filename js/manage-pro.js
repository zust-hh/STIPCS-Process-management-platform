var dian=0;
var dian1 = 0;
var dian2 = 0;
var isHiden = true;
$(document).ready(function(){
    $('#add-pro').click(function(){
        var i = $("#addprobody .list").length;
        if(i<8){
            var boarddiv = "<tr class='list'><td><span >"+(i+1)+"</span></td><td><input type='text' class='add-target1' name='as"+(i+1)+"'></td><td><input type='text' class='Wdate' onclick='WdatePicker()' class='add-comtime1' name='asd"+(i+1)+"'></td><td><input type='text' name='ass"+(i+1)+"'></td></tr>";
            $('#addprobody').append(boarddiv);
        };
    });
});
$(document).ready(function(){
    $('.remove').click(function(){
        $(this).parent().hide();
    });
});
function myCheck()
{
    for(var i=0;i<document.form1.elements.length-1;i++)
    {
        if(document.form1.elements[i].value=="")
        {
            alert("添加过程表单不能有空项！");
            return false;
        }
    }
    return true;

}
function setTab(name,cursel){
    cursel_0=cursel;
    for(var i=1; i<=links_len; i++){
        var menu = document.getElementById(name+i);
        var menudiv = document.getElementById("con_"+name+"_"+i);
        if(i==cursel){
            menudiv.style.display="block";
        }
        else{
            menudiv.style.display="none";
        }
    }
}
function Next(){
    cursel_0++;
    if (cursel_0>links_len)cursel_0=1;
    setTab(name_0,cursel_0);
}
var name_0='one';
var cursel_0=1;
var links_len,iIntervalId;
onload=function(){
    var links = document.getElementById("nav-body").getElementsByTagName('li');
    links_len=links.length;
    for(var i=0; i<links_len; i++){
        links[i].onmouseover=function(){
            clearInterval(iIntervalId);
        }
    }
    document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
        clearInterval(iIntervalId);
    };
    setTab(name_0,cursel_0);
};

$(function(){
    $(".nav-c li").click(function() {
        $(this).siblings('li').removeClass('bottomstyle');
        $(this).addClass('bottomstyle');
    });
});



$(function ($) {
    //弹出登录
    $(".add-date").hover(function () {
        $(this).stop().animate({
            opacity: '1'
        }, 600);
    }, function () {
        $(this).stop().animate({
            opacity: '0.6'
        }, 1000);
    }).on('click', function () {
        $("body").append("<div id='mask'></div>");
        $("#mask").addClass("mask").fadeIn("slow");
        $("#date-pop").fadeIn("slow");
    });
    //
    //关闭
    $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
        $("#date-pop").fadeOut("fast");
        $("#mask").css({ display: 'none' });
    });
});

function date_nav() {
    if(dian1%2 == 0){
        document.getElementById("date-remind-nav-li-ul").style.left = "auto";
        dian1++;
    }else{
        document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
        dian1++;
    }
}
function date_nav1() {
    if(dian2%2 == 0){
        document.getElementById("date-remind-nav-li-ul1").style.left = "auto";
        dian2++;
    }else{
        document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
        dian2++;
    }
}
function date_nav_li0() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li0").innerHTML;
}
function date_nav_li1() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li1").innerHTML;
}
function date_nav_li2() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li2").innerHTML;
}function date_nav_li3() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li3").innerHTML;
}
function date_nav_li4() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li4").innerHTML;
}
function date_nav_li5() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li5").innerHTML;
}
function date_nav_li6() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li6").innerHTML;
}
function date_nav_li7() {
    document.getElementById("date-remind-nav-li-ul").style.left = "-999em";
    document.getElementById("date-nav-a").innerHTML = document.getElementById("date-remind-nav-li-ul-li7").innerHTML;
}

function date_nav_li8() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li8").innerHTML;
}
function date_nav_li9() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li9").innerHTML;
}
function date_nav_li10() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li10").innerHTML;
}
function date_nav_li11() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li11").innerHTML;
}function date_nav_li12() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li12").innerHTML;
}
function date_nav_li13() {
    document.getElementById("date-remind-nav-li-ul1").style.left = "-999em";
    document.getElementById("date-nav-a1").innerHTML = document.getElementById("date-remind-nav-li-ul-li13").innerHTML;
}



/* 从右往左的菜单  */
$(document).ready(function(){
    $('#pro-setting').click(function(){
        if(isHiden){
            document.getElementById("pro-set").style.display="block";
            $('#pro-set').animate({width:'+=300px'});
        }else{
            $('#pro-set').animate({width:'-=300px'});
        }
        isHiden = !isHiden;
    });
});
$(document).ready(function(){
    $('#pro-setting1').click(function(){
        $('#pro-set').animate({width:'-=300px'});
        isHiden = !isHiden;
    });
});

/*  项目设置弹窗 */
jQuery(document).ready(function($) {
    $('.pro-set-main').click(function(){
        $('.theme-popover-mask').fadeIn(100);
        $('.theme-popover').slideDown(200);
    })
    $('.theme-poptit .close').click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-popover').slideUp(200);
    })

})
/*  项目成员弹窗  */
jQuery(document).ready(function($) {
    $('.pro-set-people').click(function(){
        $('.theme-popover-mask1').fadeIn(100);
        $('.theme-popover1').slideDown(200);
    })
    $('.theme-poptit1 .close1').click(function(){
        $('.theme-popover-mask1').fadeOut(100);
        $('.theme-popover1').slideUp(200);
    })

})
/*  下载附件弹窗  */
jQuery(document).ready(function($) {
    $('.download-file').click(function(){
        $('.download-popover-mask').fadeIn(100);
        $('.download-popover').slideDown(200);
    });
    $('.download-file1').click(function(){
        $('.download-popover-mask').fadeIn(100);
        $('.download-popover').slideDown(200);
    });
    $('.download-poptit .download-close').click(function(){
        $('.download-popover-mask').fadeOut(100);
        $('.download-popover').slideUp(200);
    })

})
/*  div模拟select  */
$(document).ready(function(){
    $(".select_box").click(function(event){
        event.stopPropagation();
        $(this).find(".option").toggle();
        $(this).parent().siblings().find(".option").hide();
    });
    $(document).click(function(event){
        var eo=$(event.target);
        if($(".select_box").is(":visible") && eo.attr("class")!="option" && !eo.parent(".option").length)
            $('.option').hide();
    });
    /*赋值给文本框*/
    $(".option a").click(function(){
        var value=$(this).text();
        $(this).parent().siblings(".select_txt").text(value);
        $("#select_value").val(value)
    })
})
/*  移交项目  */
jQuery(document).ready(function($) {
    $('#pro-tosb').click(function(){
        $('.theme-popover-maskto').fadeIn(100);
        $('.theme-popoverto').slideDown(200);
    })
    $('.theme-poptitto .closeto').click(function(){
        $('.theme-popover-maskto').fadeOut(100);
        $('.theme-popoverto').slideUp(200);
    })

})

/*------动态添加过程--------*/

