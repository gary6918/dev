<?php
	function showResult($Num){
		if ($Num == 0){
			return 1;
		}else{
			return $Num * showResult($Num-1);
		}
	}
	
	echo "5 �����h���G" . showResult(5);
?>