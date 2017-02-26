var login_link = document.querySelector('.login_link');
var nav_right_submit = document.querySelector('.nav_right_submit');
var isonline = 0;

//获取登录状态
window.onload = function(){
	alert("123");
	var xml = new XMLHttpRequest();
	xml.open('GET', 'script/return_session.php', true);
	xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xml.send(null);
	if (xml.responseText != '') {
		// console.log(xml.responseText);
		isonline = 1;
	};
	console.log(isonline);
};
//页面跳转
login_link.addEventListener('click',function(){

});
nav_right_submit.addEventListener('click',function(){
    self.location = 'post_file.php';
});