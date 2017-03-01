<?php
	if (!empty($_POST)) {

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$user_account = addslashes($_POST['user_account']);

		$req = $pdo->query("select * from user_info where user_account ='{$user_account}'");
		$data = $req->fetch(PDO::FETCH_ASSOC);

		echo $data['user_session'];

	}else{

	echo "Get nothing";

};