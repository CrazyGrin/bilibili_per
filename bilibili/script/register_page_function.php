<?php
if (!empty($_POST)) {
	if (isset($_POST['user_account']) && isset($_POST['user_password']) && isset($_POST['phone'])){
		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$addpsd = "woshizuibangde";
		$user_account = addslashes($_POST['user_account']);
    	$user_password = $_POST['user_password'];
    	$user_password = md5(md5($_POST['user_password']).$addpsd);
    	$phone = addslashes($_POST['phone']);

		$req = $pdo->query("select user_account from user_info where user_account='{$user_account}'");
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if ($data) {
			echo "用户名已存在";
		}
		else{
			$pdo->exec("insert into user_info (user_account,user_password,user_phone) values ('{$user_account}','{$user_password}','{$phone}')");
			echo "注册成功";

			$pdo->exec("update user_info set user_session = 1 where user_account ='{$user_account}'");
			
			setcookie("user_account",$user_account,time()+3600*24,"/");
			setcookie("user_head_url","img/default_head.png",time()+3600*24,"/");
			setcookie("user_head_sub_url","../img/default_head.png",time()+3600*24,"/");
		};
	}
	else{
		echo "请填写表单";
	};
}else{

	echo "Get nothing";
	
};