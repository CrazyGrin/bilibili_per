//cookie封装(未研究)
function getCookie(name) {

    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

    if (arr = document.cookie.match(reg)) {

        return unescape(arr[2]);
        
    } else {

        return null;
    };

};

function delCookie(name) {

    var exp = new Date();

    exp.setTime(exp.getTime() - 1);

    var cval = getCookie(name);

    if (cval != null) {

        document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();

    };
};

//访问服务器设置cookie
function setCookie(name,value){

    var xml =  new XMLHttpRequest();

    xml.open('POST', 'script/set_cookie.php', true);
    xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xml.send("name=" + name + "&value=" + value);

};