<?php
	if ( !empty($_POST) ) {

		$user_account = $_POST['user_account'];

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$pdo->exec("update user_info set user_session=0 where user_account ='{$user_account}'");

		setcookie("user_account",'',time()-1,"/");
		setcookie("user_head_url",'',time()-1,"/");
		setcookie("user_head_sub_url",'',time()-1,"/");

};
