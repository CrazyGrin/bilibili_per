//用户状态检测及视图改变所需DOM
var isonline = '';
var nav_log_list = document.querySelector('.nav_right_log_list');
var nav_search = document.querySelector('.nav_right_search');
var user_list = document.querySelector('.nav_right_user_list');

//发送数据
var user_account = '';
var video_id = '';

//发送评论按钮
var comment_submit_button = document.querySelector('.comment_submit_button');
//输入框
var comment_input = document.querySelector('.comment_input');

//发送弹幕的dom
var send_danmu_button = document.querySelector('.send_danmu_button');
//输入框
var danmu_input = document.querySelector('.danmu_input');

//载入函数
window.onload = function() {

	user_account = getCookie("user_account");
	video_id = getCookie("video_id");
	viewChange();

};

//根据用户登录状态改变页面
function viewChange() {

	if (user_account != null) {

		isonline = 1;

		nav_log_list.style.display = "none";
		nav_search.style.display = "none";
		nav_log_list.style.opacity = "0";
		nav_search.style.opacity = "0";

		user_list.style.display = "block";
		user_list.style.opacity = "1";

	} else {

		isonline = 0;

		nav_log_list.style.display = "block";
		nav_search.style.display = "block";
		nav_log_list.style.opacity = "1";
		nav_search.style.opacity = "1";

		user_list.style.display = "none";
		user_list.style.opacity = "0";
	};
};

//退出登录
logout_button.addEventListener('click',function(){
	var xml = new XMLHttpRequest();

	xml.open('POST', 'script/logout_function.php', true);
	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xml.send("user_account=" + getCookie("user_account"));

	setInterval(function(){
		location.reload(true);
		loaction = 0;
	},1000);
});


//发送评论
comment_submit_button.addEventListener('click', function() {
	if (getCookie("user_account") != null) {
		if (comment_input.value != '' && comment_input.value.length <= 100) {

			var xml = new XMLHttpRequest();

			xml.open('POST', '../script/send_comment.php', true);
			xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xml.send("user_account=" + user_account + "&video_id=" + video_id + "&comment_content=" + comment_input.value);

			xml.onreadystatechange = function() {

				if (xml.readyState === 4 && xml.status === 200) {
					console.log(xml.responseText);
				};

			};

		};
	}else{
		alert("请先登录");
	}
});

//储存弹幕
send_danmu_button.addEventListener('click', function() {

	if (getCookie("user_account") != null) {
		if (danmu_input.value != '' && danmu_input.value.length <= 100) {

			var xml = new XMLHttpRequest();

			xml.open('POST', '../script/send_danmu.php', true);
			xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xml.send("user_account=" + user_account + "&video_id=" + video_id + "&danmu_content=" + danmu_input.value);

			xml.onreadystatechange = function() {

				if (xml.readyState === 4 && xml.status === 200) {
					console.log(xml.responseText);
				};

			};

		}else{
			alert("弹幕也太长了吧");
		}
	}else{
		alert("请先登录");
	}
});

//发送弹幕
send_danmu_button.addEventListener('click',function(){

	var danmu_view_banner = document.querySelector("#danmu_view_banner"); 
	var new_danmu_item = document.createElement("div");

	new_danmu_item.className = "danmu_item";
	new_danmu_item.innerHTML = danmu_input.value;

	danmu_view_banner.appendChild(new_danmu_item);

	danmu_move(new_danmu_item);
});

function danmu_move(danmu){
	var speed = 1;
	var position = -200;

	var move = setInterval(function(){
		if (position < 860) {
			danmu.style.right = position + speed + "px";
			position += speed;
		};
	},10);

};