<?php
	if (!empty($_POST)) {
		echo $_POST['name'];
		echo $_POST['value'];
		setcookie($_POST['name'],$_POST['value'],time()+3600*24,"/");
	};