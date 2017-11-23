<script type="text/javascript">
$(function(){
        $("[rel=drevil]").popover({
            trigger:'manual',
            placement : 'bottom', //placement of the popover. also can use top, bottom, left or right
            title : '<div style="text-align:center; color:red; text-decoration:underline; font-size:14px;background: url(images/hideback.jpg);background-size: 100% 100%;">' +
            '<div style="height: 100px;width: 300px;"><a href=""><img src="images/pic1.jpg" style="float: left;width: 64px;height: 64px;border-radius: 32px;color: white;margin-left: 20px;margin-top: 20px;border: 2px solid #fff;"></a>' +
            '<a href="#" style="display:block;width: 150px; font-size: 18px;margin-top: 26px">用户名</a></div></div>', //this is the top title bar of the popover. add some basic css
            html: 'true', //needed to show html of course
            content : '<div id="popOverBox"><div id="popOverBox-t" style="color: rgb(120,153,172);padding-left: 10px">正在进行：<br><a href="#" style="color: grey;width: 250px;text-align: left">当前正在进行项目</a></div>' +
            '<div id="popOverBox-b"><a href="#" style="color: grey;margin-left: 240px">退出</a></div></div>', //this is the content of the html box. add the image here or anything you want really.
            animation: false
        }).on("mouseenter", function () {
                    var _this = this;
                    $(this).popover("show");
                    $(this).siblings(".popover").on("mouseleave", function () {
                        $(_this).popover('hide');
                    });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide")
                        }
                    }, 100);
                });
    });
</script>
