//view所需DOM
var checkbox_trigger = document.querySelector('.main_post_video_class');
var personal_checkbox = document.querySelector('#personal');
var notpersonal_checkbox = document.querySelector('#notpersonal');

//投稿类型
var personal_ischecked = 0;
var notpersonal_ischecked = 0;

//分类item
var video_zone = document.querySelector('.main_post_video_zone');
var zone_item = document.querySelectorAll('.zone_item');

//提交按钮
var submit_button = document.querySelector('.main_submit_button');

//发送数据
var video_type = '';
var video_tittle = document.querySelector('.video_title');
var video_brief = document.querySelector('.video_brief');
var notpersonal_decoration = document.querySelector('.notpersonal_decoration');
var video_zone_content = '';

//載入
window.onload = function(){
	alert("demo");
}


//zone视图
video_zone.addEventListener('click',function(){

	if (event.target.nodeName == 'LI') {

		for (i = 0; i < zone_item.length; ++i) {

			zone_item[i].style.backgroundColor = '#f4f5f7';
			zone_item[i].style.color = 'black';

		};

		event.target.style.backgroundColor = '#00a1d6';
		event.target.style.color = '#fff';
		video_zone_content = event.target.innerHTML;

	};

});

//checkbox视图
checkbox_trigger.addEventListener('click',function(){

	if (event.target.className == 'checkbox_round') {

		event.target.style.backgroundColor = '#00a1d6';

		if (event.target.id == 'personal') {

			personal_ischecked = 1;
			notpersonal_ischecked = 0;
			video_type = '【自制】';
			notpersonal_checkbox.style.backgroundColor = '#fff';

		};
		if (event.target.id == 'notpersonal') {

			personal_ischecked = 0;
			notpersonal_ischecked = 1;
			video_type = '【转载】';
			personal_checkbox.style.backgroundColor = '#fff';

		};

	};

});

//Bilibili0
//提交验证
submit_button.addEventListener('click',function(){
		if (video_type != '') {

			if (video_zone_content != '') {

				if (video_tittle != '' && video_brief != '') {

				var xml = new XMLHttpRequest();

				xml.open('POST', '../script/recieve_file_info_function.php', true);
				xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				xml.send(
					'video_tittle=' + video_type + video_tittle.value +
					'&video_zone=' + video_zone_content +
					'&video_brief=' + video_brief.value + notpersonal_decoration.value +
					"&user_account=" + getCookie("user_account") +
					"&video_url=" + getCookie("submit_video_url")
					);

			}else{

				alert('记得填写稿件详细信息');

			};
		}else{

			alert('选择视频分区');

		};
	}else{

		alert('选择投稿类型哦');

	};
});


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