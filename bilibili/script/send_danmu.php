<?php
if (!empty($_POST)) {

	if (isset($_POST['user_account']) &&
		isset($_POST['video_id']) &&
		isset($_POST['danmu_content'])) {

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$danmu_content = addslashes($_POST['danmu_content']);
		$video_id = addslashes($_POST['video_id']);
		$user_account = addslashes($_POST['user_account']);
		$danmu_date = date("H-i");

		$pdo->exec("insert into video_danmu (danmu_content,video_id,user_account,danmu_date) values ('{$danmu_content}','{$video_id}','{$user_account}','{$danmu_date}')");
	};

};