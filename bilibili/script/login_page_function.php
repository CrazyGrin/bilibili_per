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
				setcookie("user_account",$user_account,time()+3600*24,"/");
				setcookie("user_head_url","img/default_head.png",time()+3600*24,"/");
				setcookie("user_head_sub_url","../img/default_head.png",time()+3600*24,"/");

				$pdo->exec("update user_info set user_session = 1 where user_account ='{$user_account}'");

			}elseif($data['user_session'] < 0){

				setcookie("user_account",'',time()+3600*24,"/");
				setcookie("user_head_url",'',time()+3600*24,"/");
				setcookie("user_head_sub_url",'',time()+3600*24,"/");
				echo "-1";

			}elseif ($data['user_session'] > 0) {
				
				setcookie("user_account",'',time()+3600*24,"/");
				setcookie("user_head_url",'',time()+3600*24,"/");
				setcookie("user_head_sub_url",'',time()+3600*24,"/");
				echo "1";

			};
		}else{

			echo "error";

		};

	};

}else{

	echo "Get nothing";
	
};