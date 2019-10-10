<?php
	if($_POST["username"]=="abc" && $_POST["passwd"]=="123"){
	 $login = "yes";
	}
	if($login == "yes") {
		echo "登入成功!";
	}else{
		echo "登入失敗!";
	}
?>