//用户状态检测及视图改变所需DOM
var isonline = '';
var nav_log_list = document.querySelector('.nav_right_log_list');
var nav_search = document.querySelector('.nav_right_search');
var user_list = document.querySelector('.nav_right_user_list');

var user_account = '';
var video_id = '';

//载入函数
window.onload = function(){

	user_account = getCookie("user_account");
	video_id = getCookie("video_id");
	
	viewChange();

};


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

//根据用户登录状态改变页面
function viewChange(){

	if (user_account != '') {

		isonline = 1;

		nav_log_list.style.display = "none";
		nav_search.style.display = "none";
		nav_log_list.style.opacity = "0";
		nav_search.style.opacity = "0";

		user_list.style.display = "block";
		user_list.style.opacity = "1";

	}else{

		isonline = 0;

		nav_log_list.style.display = "block";
		nav_search.style.display = "block";
		nav_log_list.style.opacity = "1";
		nav_search.style.opacity = "1";

		user_list.style.display = "none";
		user_list.style.opacity = "0";
	};
};
