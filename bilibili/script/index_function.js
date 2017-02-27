var login_link = document.querySelector('.login_link');
var nav_right_submit = document.querySelector('.nav_right_submit');
var isonline = 0;

var swing_list = document.querySelector('.swing_list');
var loaction = 0;

//载入函数
window.onload = function(){
	// alert('123');
	// var xml = new XMLHttpRequest();
	// xml.open('GET', 'script/return_session.php', true);
	// xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	// xml.send(null);
	// if (xml.responseText != '') {
	// 	isonline = 1;
	// 	alert(xml.responseText);
	// };
	alert(getCookie("user_account"));
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

//获取登录状态的cookie
function getCookie(name) 
{ 
    var arr,reg=new RegExp("(^| )"+ name +"=([^;]*)(;|$)");
 
    if(arr=document.cookie.match(reg))
 
        return unescape(arr[2]); 
    else 
        return null; 
};


//页面跳转
login_link.addEventListener('click',function(){
	self.location = 'login.php';
});

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