$(document).ready(function(){
    var name = -1;
    var v = document.getElementsByTagName("tr");
    for(var i = 0;i<v.length;i++){
        v[i].setAttribute("id","tr"+i);
    }
    var q = document.getElementsByClassName("shadow");
    for(var h = 0;h<q.length;h++){
        if(h%3==0) name++;
        if(h%3==0) q[h].firstElementChild.setAttribute("name","content"+name);
        else if(h%3==1) q[h].firstElementChild.setAttribute("name","time"+name);
        else if(h%3==2) q[h].firstElementChild.setAttribute("name","person_id"+name);
    }
    var x = document.getElementsByTagName("td");
    for(var j = 0;j<x.length;j++){
        if((i+1)%5==0){
            x[i].setAttribute("id","del"+i);
        }
    }
});

function del(t) {
    var name = -1;
    if(confirm("确定要删除该阶段目标吗？")){
        document.getElementById($(t).parent().parent().attr("id")).remove();
        var v = document.getElementsByTagName("tr");
        for(var i = 0;i<v.length;i++){
            v[i].setAttribute("id","tr"+i);
        }
        var x = document.getElementsByClassName("shadow");
        for(var i = 0;i<x.length;i++){
            if(i%3==0) name++;
            if(i%3==0) x[i].firstElementChild.setAttribute("name","content"+name);
            else if(i%3==1) x[i].firstElementChild.setAttribute("name","time"+name);
            else if(i%3==2) x[i].firstElementChild.setAttribute("name","person_id"+name);
        }
    }
}

function addStage() {
    var name = -1;
    var line1 = "<tr><td class=\"pro-gname\">空</td><td class=\"shadow\"><input type=\"text\"";
    var line2 = "></td><td class=\"shadow\"><input type=\"text\" class=\"Wdate\" onfocus=\"WdatePicker({lang:\'zh-cn\'})\"";
    var line3 = "></td><td class=\"shadow\"><input type=\"text\"";
    var line4 = "></td><td class=\"delete-btn\"><input type=\"button\" value=\"删除\" onclick=\"del(this)\"></td></tr>"
    $("#pro-table-body").append(line1+line2+line3+line4);
    var v = document.getElementsByTagName("tr");
    for(var i = 0;i<v.length;i++){
        v[i].setAttribute("id","tr"+i);
    }
    var x = document.getElementsByClassName("shadow");
    for(var i = 0;i<x.length;i++){
        if(i%3==0) name++;
        if(i%3==0) x[i].firstElementChild.setAttribute("name","content"+name);
        else if(i%3==1) x[i].firstElementChild.setAttribute("name","time"+name);
        else if(i%3==2) x[i].firstElementChild.setAttribute("name","person_id"+name);
    }
}