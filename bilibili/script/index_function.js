var login_link = document.querySelector('.login_link');
var nav_right_submit = document.querySelector('.nav_right_submit');
var isonline = 0;

var swing_list = document.querySelector('.swing_list');
var loaction = 0;

//载入函数
window.onload = function(){
	delCookie("user_account");
	var demo = getCookie("user_account");
};


//轮播
function swing(){
	setInterval(function(){
		if (loaction != 1320) {
			loaction = loaction + 440;
			swing_list.style.right = loaction + 'px';
		}else{
			loaction = 0;
			swing_list.style.right = loaction;
		};
	},1000);
};

//cookie封装(未研究)
function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
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
}


//页面跳转
login_link.addEventListener('click',function(){
	self.location = 'login.php';
});


//检测用户状态
// function isOnline(){
// 	var xml = new XMLHttpRequest();
// 	xml.open('GET', 'script/login_page_function.php', true);
// 	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// 	xml.send(null);
// 	xml.onreadystatechange = function(){
// 		if (xml.readyState === 4 && xml.status === 200) {
// 			if (xml.responseText == 0) {
				
// 			};
// 		};
// 	};
// };





// nav_right_submit.addEventListener('click',function(){
// 	var xml = new XMLHttpRequest();
// 	xml.open('GET', 'script/return_session.php', true);
// 	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// 	xml.send(null);
// 	if (xml.responseText != '') {
// 		isonline = 1;
// 		self.location = 'post_file.php';
// 	};
// });