<?php
	if($_POST["username"]=="abc" && $_POST["passwd"]=="123"){
	 $login = "yes";
	}
	if($login == "yes") {
		echo "�n�J���\!";
	}else{
		echo "�n�J����!";
	}
?>