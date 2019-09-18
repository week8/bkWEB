/* if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
    alert('yd')
} else {
    alert('pc')
} */

/* function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone","SymbianOS", "Windows Phone", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    if(window.screen.width>=768){
         flag = true;
    }
    return flag;
} */


/* var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");
var browser = navigator.userAgent.toLowerCase();
var isMobile = false;
for (var i = 0; i < mobileAgent.length; i++) {
    if (browser.indexOf(mobileAgent[i]) != -1) {
        isMobile = true;
        //alert(mobileAgent[i]);
        // location.href = '手机要访问页面的链接';
        alert('yd')
        break;
    }else{
        // alert('pc')
    }
} */


//other页面
$('.J-item li').click(function() {
    $(this).addClass('act').siblings().removeClass('act');
    $('.J-cont').find('div').eq($(this).index()).show().siblings().hide();
});