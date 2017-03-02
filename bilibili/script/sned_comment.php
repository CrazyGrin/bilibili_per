<?php
if (!empty($_POST)) {

	if (isset($_POST['user_account']) &&
		isset($_POST['video_id']) &&
		isset($_POST['comment_content'])) {

		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$comment_content = addslashes($_POST['comment_content']);
		$video_id = addslashes($_POST['video_id']);
		$user_account = addslashes($_POST['user_account']);

		$pdo->exec("insert into video_comment (comment_content,video_id,user_account) values ('{$comment_content}','{$video_id}','{$user_account}')");
	};
};