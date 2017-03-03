//页面跳转DOM
var login_link = document.querySelector('.login_link');
var nav_right_submit = document.querySelector('.nav_right_submit');

//轮播DOM
var swing_list = document.querySelector('.swing_list');
var loaction = 0;

//用户状态检测及视图改变所需DOM
var isonline = 0;
var nav_log_list = document.querySelector('.nav_right_log_list');
var nav_search = document.querySelector('.nav_right_search');
var user_list = document.querySelector('.nav_right_user_list');

var user_account = '';


//所有a标签
var a_tag = document.querySelector('.main_heat_video');


//载入函数
window.onload = function(){

	user_account = getCookie("user_account");
	viewChange();
	getIsOnline(user_account);
	swing();

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
	},3000);
};

//页面跳转
login_link.addEventListener('click',function(){

	self.location = 'login.php';

});
nav_right_submit.addEventListener('click',function(){

	if (isonline == 1) {
		self.location = 'page/post_file.php'
	}else{
		alert("请先登录");
	}

});

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

//遍历所有a标签
a_tag.addEventListener('click',function(){
	if (event.target.getAttribute('videoId') != '') {
		setCookie("video_id",event.target.getAttribute('videoId'));
	};
});

//请求服务器获取用户登录信息
function getIsOnline(user_account){

	var xml =  new XMLHttpRequest();

	xml.open('POST', 'script/return_isonline.php', true);
	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xml.send("user_account=" + user_account);

	xml.onreadystatechange = function(){
		if (xml.readyState === 4 && xml.status === 200) {

			if (xml.responseText<1) {
				//清除cookie(未完成)

			};

			isonline = xml.responseText;

		};
	};

};