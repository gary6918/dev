<?php
	if($_FILES["fileUpload"]["error"]==0){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "./".$_FILES["fileUpload"]["name"])){
			echo "�W�Ǧ��\<br />";
			echo "�ɮצW�١G".$_FILES["fileUpload"]["name"]."<br />";
			echo "�ɮ������G".$_FILES["fileUpload"]["type"]."<br />";
			echo "�ɮפj�p�G".$_FILES["fileUpload"]["size"]."<br />";
		}else{
			echo "�W�ǥ���! ";
			echo "<a href='javascript:window.history.back();'>�^�W�@��</a>";
		}
	}
?>