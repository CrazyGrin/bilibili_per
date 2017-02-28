//页面跳转DOM
var login_link = document.querySelector('.login_link');
var nav_right_submit = document.querySelector('.nav_right_submit');

//轮播DOM
var swing_list = document.querySelector('.swing_list');
var loaction = 0;

//用户状态检测及视图改变所需DOM
var isonline = '';
var nav_log_list = document.querySelector('.nav_right_log_list');
var nav_search = document.querySelector('.nav_right_search');
var user_list = document.querySelector('.nav_right_user_list');

var user_account = '';
//载入函数
window.onload = function(){

	user_account = getCookie("user_account");
	viewChange();

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


//页面跳转
login_link.addEventListener('click',function(){

	self.location = 'login.php';

});

//根據用戶登录状态改变页面
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




//检测用户状态
// function isOnline(){
// 	var xml = new XMLHttpRequest();

// 	xml.open('POST', 'script/login_page_function.php', true);
// 	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// 	xml.send('');

// 	xml.onreadystatechange = function(){
// 		if (xml.readyState === 4 && xml.status === 200) {

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