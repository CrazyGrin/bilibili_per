<?php
	if (!empty($_POST)) {

		echo $_POST['name'];
		setcookie($_POST['name'],'',time()-1,"/");

	}else{

	echo "Get nothing";
	
};