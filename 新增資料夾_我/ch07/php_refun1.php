<?php  
	$mailData = "e-happy@e-happy.com.tw";
	if(preg_match ("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$mailData,$matchData)){
	     echo "�l��榡���Ҧ��\�A���e���G{$matchData[0]}�C";
	  }else{
	     echo "�l��榡���ҥ��ѡI";
	  } 
?>
