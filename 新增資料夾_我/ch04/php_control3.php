<?php
	$score = 85;
	if($score>=60 && $score<70){
		echo '����';
	}elseif($score>=70 && $score<80){
		echo '�A��';
	}elseif($score>=80 && $score<90){
		echo '�ҵ�';		
	}elseif($score>=90 && $score<=100){
		echo '�u��';		
	}else{
		echo '���ή�';
	}
?>