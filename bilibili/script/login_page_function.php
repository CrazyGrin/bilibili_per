<?php 
if (!empty($_POST)) {
	if (isset($_POST['user_account']) && isset($_POST['user_password'])){
		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$addpsd = "woshizuibangde";
		$user_account = addslashes($_POST['user_account']);
    	$user_password = md5(md5($_POST['user_password']).$addpsd);

		$req = $pdo->query("select * from user_info where user_account='{$user_account}'");
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if ($data['user_password']==$user_password) {
			session_start();
			$_SESSION['user_account']=$user_account;
			echo $_SESSION['user_account'];
		}else{
			echo "登录失败";
		};
	};
};