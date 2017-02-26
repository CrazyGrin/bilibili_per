var checkbox_trigger = document.querySelector('.main_post_video_class');
var personal_checkbox = document.querySelector('#personal');
var notpersonal_checkbox = document.querySelector('#notpersonal');

var personal_ischecked = 0;
var notpersonal_ischecked = 0;

// var chose_button = document.querySelector('.main_chose_button');
// var chose_file =  document.querySelector('.chose_file');

var video_zone = document.querySelector('.main_post_video_zone');
var zone_item = document.querySelectorAll('.zone_item');

var submit_button = document.querySelector('.main_submit_button');

//发送数据
var video_type = '';
var video_tittle = document.querySelector('.video_title');
var video_brief = document.querySelector('.video_brief');
var video_zone_content = '';
//表单提交按钮
// var submit_file = document.querySelector('.submit_file');


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

//选择和提交稿件
// chose_button.addEventListener('click',function(){
// 	chose_file.click();
// });

//提交验证
submit_button.addEventListener('click',function(){
		if (personal_ischecked == 1 || notpersonal_checkbox == 1) {
			if (video_zone_content != '') {
				if (video_tittle != '' && video_brief != '') {

				var xml = new XMLHttpRequest();

				xml.open('POST', 'post_file_info.php', true);
				xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				xml.send('video_tittle=' + video_type + video_tittle.innerHTML + '&video_zone=' + video_zone_content + '&video_brief' + video_brief.innerHTML);

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