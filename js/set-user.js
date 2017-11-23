function edit() {
    for(var i = 0;i<9;i++){
        document.getElementById("can-edit"+i).disabled="";
    }
    document.getElementById("submit").style.visibility = "visible";
}