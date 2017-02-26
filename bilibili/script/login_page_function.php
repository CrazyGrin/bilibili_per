<?php 
if (!empty($_POST)) {
	if (isset($_POST['user_account']) && $_POST['user_account'] != '' &&
        isset($_POST['password']) && $_POST['password'] != ''){
		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$addpsd = "woshizuibangde";
		$user_account = addslashes($_POST['user_account']);
    	$password = md5(md5($_POST['password']).$addpsd);

		$req = $pdo->query("select * from user_info where user_account='{$user_account}'");
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if ($data['password']==$password) {
			session_start();
			$_SESSION['user_account']=$user_account;
			echo "登录成功";
			header('Location:../index.php');
		} 
		else{
			echo "登录失败";
		};
	};
};