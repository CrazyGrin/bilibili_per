<?php
	$user_account = $_SESSION['user_account  m '];

	if($_FILES["file"]["type"] == "video/mp4" || $_FILES["file"]["type"] == "audio/mp4"){

		if($_FILES["file"]["error"] > 0){

			echo $_FILES["file"]["error"]."<br />";

		}else{

			if(file_exists("../video/".$_FILES["file"]["name"])){

				echo $_FILES["file"]["name"]." 已存在";

			}else{

				move_uploaded_file($_FILES["file"]["tmp_name"],
					"../video/".$_FILES["file"]["name"]);
                header('Location: ../page/post_file_info.php');

			};

		};
	}else{

		echo "非法文件";
		
	};