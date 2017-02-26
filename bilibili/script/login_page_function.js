var btn_log = document.querySelector('.main_right_login');
var nav_right_submit = document.querySelector('.nav_right_submit');

//登录功能
btn_log.addEventListener('click',function() {
    var user_account = document.querySelector('.user_account');
    var password = document.querySelector('.password');

    if (user_account.value != '') {
        document.querySelector('.main_right_user_input_tip').style.opacity = '0';
        if (password.value != '') {
            document.querySelector('.main_right_password_input_tip').style.opacity = '0';
            var xml = new XMLHttpRequest();
            xml.open('POST', 'script/login_page_function.php', true);
            xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xml.send('user_account=' + user_account + '&password=' + password);
            xml.onreadystatechange = function() {
                if (xml.readyState === 4 && xml.status === 200) {
                    if (xml.responseText == "登录成功") {
                        alert(responseText);
                        // self.location = '../index.php';
                    };
                };
            };
        }else{
            document.querySelector('.main_right_password_input_tip').style.opacity = '1';
        };
    }else{
        document.querySelector('.main_right_user_input_tip').style.opacity = '1';
        document.querySelector('.main_right_password_input_tip').style.opacity = '1';
    };
});

//页面跳转
nav_right_submit.addEventListener('click',function(){
    self.location = 'post_file.php';
});