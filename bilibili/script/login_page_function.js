var btn_log = document.querySelector('.main_right_login');
var nav_right_submit = document.querySelector('.nav_right_submit');

//登录功能
btn_log.addEventListener('click', function() {

    var user_account = document.querySelector('.user_account');
    var user_password = document.querySelector('.user_password');

    if (user_account.value != '') {

        document.querySelector('.main_right_user_input_tip').style.opacity = '0';

        if (user_password.value != '') {

            document.querySelector('.main_right_password_input_tip').style.opacity = '0';

            var xml = new XMLHttpRequest();

            xml.open('POST', '../script/login_page_function.php', true);
            xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xml.send('user_account=' + user_account.value + '&user_password=' + user_password.value);

            xml.onreadystatechange = function() {
                if (xml.readyState === 4 && xml.status === 200) {

                    if (xml.responseText == "-1") {

                        alert("所在用户无登录权限");

                    }else if(xml.responseText == "1"){  

                        alert("您已登录");
                        self.location = '../index.php';

                    }else if(xml.responseText == "error"){

                        alert("用户名或密码错误");

                    }else{

                        self.location = '../index.php';

                    };

                };  

            };
        } else {

            document.querySelector('.main_right_password_input_tip').style.opacity = '1';

        };
    } else {

        document.querySelector('.main_right_user_input_tip').style.opacity = '1';
        document.querySelector('.main_right_password_input_tip').style.opacity = '1';

    };

});

//页面跳转
nav_right_submit.addEventListener('click', function() {

    self.location = 'post_file.php';

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