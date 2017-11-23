var inputnumber = 0;
var inputnumber1 = 0;
$(function(){
    $(".manage-content-t ul li").click(function() {
        $(this).siblings('li').removeClass('selected');
        $(this).siblings('li').addClass('selected1');
        $(this).removeClass('selected1');
        $(this).addClass('selected');
    });
});
$(function(){
    $("#sub-gc").click(function() {
        $("#create-type1").val("国创");
        document.getElementById("create-type").style.display = "none";
    });
    $("#sub-xm").click(function() {
        $("#create-type1").val("新苗");
        document.getElementById("create-type").style.display = "none";
    });
    $("#sub-cm").click(function() {
        $("#create-type1").val("春萌");
        document.getElementById("create-type").style.display = "none";
    });
    $("#sub-qt").click(function() {
        $("#create-type1").val("4");
        $('#create-type').removeAttr("style");
    });
});
$(function(){
    $(".tab-mnu li").click(function() {
        $(this).siblings('li').removeClass('selected');
        $(this).addClass('selected');
    });
});
function myCheck()
{
    if(document.getElementById("create-type1").value != "4")
    {
        document.getElementById("create-type").value = document.getElementById("create-type1").value;
        for(var i=0;i<document.form0.elements.length-1;i++)
        {
            if(document.form0.elements[i].value=="")
            {
                alert("添加项目表单不能有空项！");
                document.getElementById("create-type").value = "";
                return false;
            }
        }
    }
    else {
        if(document.getElementById("create-type").value == ""){
            alert("添加项目表单不能有空项！");
            return false;
        }
        else {
            for(var i=0;i<document.form0.elements.length-1;i++)
            {
                if(document.form0.elements[i].value=="")
                {
                    alert("添加项目表单不能有空项！");
                    return false;
                }
            }
        }
    }
    return true;

}
jQuery(document).ready(function($){
    var $form_modal = $('.cd-user-modal'),
        $form_create = $form_modal.find('#cd-create'),
        $form_modal_tab = $('.cd-switcher'),
        $tab_create = $form_modal_tab.children('li').eq(0).children('a'),
        $main_nav = $('.main_nav');

    $main_nav.on('click', function(event){
        if( $(event.target).is($main_nav) ) {
            $(this).children('ul').toggleClass('is-visible');
        } else {
            $main_nav.children('ul').removeClass('is-visible');
            $form_modal.addClass('is-visible');
        }
    });
    $('.cd-user-modal').on('click', function(event){
        if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
            $form_modal.removeClass('is-visible');
        }
    });
    $(document).keyup(function(event){
        if(event.which=='27'){
            $form_modal.removeClass('is-visible');
        }
    });
    function create_selected(){
        $form_create.addClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_create.addClass('selected');
    }
});
jQuery.fn.putCursorAtEnd = function() {
    return this.each(function() {
        if (this.setSelectionRange) {
            var len = $(this).val().length * 2;
            this.setSelectionRange(len, len);
        } else {
            $(this).val($(this).val());
        }
    });
};


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
    var links = document.getElementById("manage-content-t").getElementsByTagName('li');
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


function add1(){
    if (inputnumber<2){
        var input1 = document.createElement('input');
        var input2 = document.createElement('input');
        input1.setAttribute('type', 'text');
        input1.setAttribute('name', "teacher"+inputnumber);
        input1.setAttribute('id', "pluszero"+inputnumber);
        input1.setAttribute('class', 'git');
        input1.setAttribute('placeholder', '教师工号');
        input1.setAttribute('onblur', 'aaajjjxxx()');
        input2.setAttribute('name', "t"+inputnumber);
        input2.setAttribute('placeholder', '姓名');
        input2.setAttribute('type', 'text');
        input2.setAttribute('id', "t"+inputnumber);
        input2.setAttribute('class', 'git');
        input2.setAttribute('readonly', 'readonly');
        var btn1 = document.getElementById("org0");
        var btn2 = document.getElementById("org");
        btn1.insertBefore(input1,null);
        btn2.insertBefore(input2,null);
        inputnumber ++;
    }
}
function add2(){
    if(inputnumber1<5){
        var input1 = document.createElement('input');
        var input2 = document.createElement('input');
        input1.setAttribute('type', 'text');
        input1.setAttribute('name', "student"+inputnumber1);
        input1.setAttribute('id', "plusthree"+inputnumber1);
        input1.setAttribute('class', 'git');
        input1.setAttribute('placeholder', '成员学号');
        input1.setAttribute('onblur', 'aajjxx()');
        input2.setAttribute('placeholder', '姓名');
        input2.setAttribute('type', 'text');
        input2.setAttribute('id', "s"+inputnumber1);
        input2.setAttribute('name', "s"+inputnumber1);
        input2.setAttribute('class', 'git');
        input2.setAttribute('readonly', 'readonly');
        var btn1 = document.getElementById("org1");
        var btn2 = document.getElementById("org2");
        btn1.insertBefore(input1,null);
        btn2.insertBefore(input2,null);
        inputnumber1 ++;
    }
}
function button(){
    var menu = document.getElementById("add-input");
    menu.style.display="block";
    document.getElementById("reduce-input").style.display="block";
}
function button1(){
    var menu = document.getElementById("add-input");
    menu.style.display="none";
    document.getElementById("reduce-input").style.display="none";
}
function button2(){
    var menu = document.getElementById("add-input1");
    menu.style.display="block";
    document.getElementById("reduce-input1").style.display="block";
}
function button3(){
    var menu = document.getElementById("add-input1");
    menu.style.display="none";
    document.getElementById("reduce-input1").style.display="none";
}

function other(val){
    if (val == 4){
        $('#create-type').removeAttr("style");
    } else {
        document.getElementById("create-type").style.display = "none";
    }
}

function myFunction()
{
    var list=document.getElementById("org");
    list.removeChild(list.lastChild);
    document.getElementById("org0").removeChild(document.getElementById("org0").lastChild);
    inputnumber --;
}
function myFunction1()
{
    var list=document.getElementById("org1");
    list.removeChild(list.lastChild);
    document.getElementById("org2").removeChild(document.getElementById("org2").lastChild);
    inputnumber1 --;
}
