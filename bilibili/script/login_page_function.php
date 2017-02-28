<?php 
if (!empty($_POST)) {
	
	if (isset($_POST['user_account']) && isset($_POST['user_password'])){

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$addpsd = "woshizuibangde";
		$user_account = addslashes($_POST['user_account']);
    	$user_password = md5(md5($_POST['user_password']).$addpsd);

		$req = $pdo->query("select * from user_info where user_account ='{$user_account}'");
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if ($data['user_password'] == $user_password) {

			if ($data['user_session'] == 0) {

				session_start();
				$_SESSION['user_account'] = $user_account;

				echo $user_account;
				$pdo->exec("update user_info set user_session = 1 where user_account ='{$user_account}'");

			}elseif($data['user_session'] < 0){

				echo "所在用户没有登录权限";

			}elseif ($data['user_session'] > 0) {

				echo "您已登录";

			};
		}else{

			echo "用户名或密码错误";

		};

	};

};