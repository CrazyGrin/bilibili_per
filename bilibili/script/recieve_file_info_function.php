<?php
if (!empty($_POST)) {

	if (isset($_POST['video_tittle']) &&
		isset($_POST['video_zone']) &&
		isset($_POST['video_brief']) &&
		isset($_POST['user_account']) &&
		isset($_POST['video_url'])) {

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$video_tittle = addslashes($_POST['video_tittle']);
		$video_zone = addslashes($_POST['video_zone']);
		$video_brief = addslashes($_POST['video_brief']);

		$user_account = addslashes($_POST['user_account']);
		$video_url = addslashes($_POST['video_url']);

		$req = $pdo->exec("insert into video_info (video_tittle,video_zone,video_brief,video_url,user_account) values ('{$video_tittle}','{$video_zone}','{$video_brief}','{$video_url}','{$user_account}')");
		echo "success";

	}
}