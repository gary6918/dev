<?php
	$season = 5;
	if ($season >=1 && $season <= 3){
		echo "�{�b�O $season ��A�O�K�u�C";
	}elseif ($season>=4 && $season<= 5){
		echo "�{�b�O $season ��A�O�L�u�C";
	}elseif ($season>=6 && $season<= 9){
		echo "�{�b�O $season ��A�O��u�C";
	}elseif ($season>=10 && $season<=12){
		echo "�{�b�O $season ��A�O�V�u�C";
	}else{
		echo "�г]�w 1~12 �d�򪺼ƭȡC";
	}
?>