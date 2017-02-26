var btn_register = document.querySelector('.main_button_register');

var user_account_tip = document.querySelector('.user_account_tip');
var password_tip = document.querySelector('.password_tip');
var phone_tip = document.querySelector('.phone_tip');

var user_account = document.querySelector('.user_account');
var user_password = document.querySelector('.user_password');
var phone = document.querySelector('.phone');

var checkbox = document.querySelector('.agreement');

var checkbox = document.querySelector('.agreement');
var button = document.querySelector('.main_button_register');

var nav_right_submit = document.querySelector('.nav_right_submit');

btn_register.addEventListener('click',function(){
    var user_account = document.querySelector('.user_account').value;
    var user_password = document.querySelector('.user_password').value;
    var phone = document.querySelector('.phone').value;

    if (user_account.length >= 6 && user_account.length <=20) {
        user_account_tip.innerHTML = "";
        if (user_password.length >= 6 && user_password.length <=20) {
            password_tip.innerHTML = "";
            if (phone.length == 11) {
                phone_tip.innerHTML = "";
                if (checkbox.checked == true) {
                    var xml = new XMLHttpRequest();
                    xml.open('POST', '../script/register_page_function.php', true);
                    xml.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    xml.send('user_account=' + user_account + '&user_password=' + user_password + '&phone=' + phone);

                    xml.onreadystatechange = function(){
                        if (xml.readyState === 4 && xml.status === 200) {
                            if (xml.responseText == "注册成功") {
                                alert(xml.responseText);
                                // self.location='../index.php';
                            }else{
                                alert(xml.responseText);
                            };
                        };
                    };
                };
            }else{
                phone_tip.innerHTML = "请填一个正常的手机号";
            };
        }else{
            password_tip.innerHTML = "你到底有没有看要求";
        };
    }else{
        user_account_tip.innerHTML = "用户名长度不太合适呀";
    };
});

//协议视图
checkbox.addEventListener('click',function(){
    if (checkbox.checked == true) {
        button.style.backgroundColor = "#00a0da";
        button.style.color = "#fff";
        button.style.cursor = "pointer";
    }else{
        button.style.backgroundColor = "#f9f9f9";
        button.style.color = "#aaa";
        button.style.cursor = "default";
    };
});

//页面跳转
nav_right_submit.addEventListener('click',function(){
    self.location = 'post_file.php';
});