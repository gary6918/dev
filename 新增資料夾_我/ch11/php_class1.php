<?php
class Student { 
	var $int_Id;		//�y��
	var $str_Name;		//�m�W
	var $str_Sex;		//�ʧO
	var $int_Chinese;	//��妨�Z
	var $int_English;	//�^�y���Z
	var $int_Maths;		//�ƾǦ��Z
	
	function showData(){
		echo "�y���G".$this->int_Id."<br />";
		echo "�m�W�G".$this->str_Name."<br />";
		echo "�ʧO�G".$this->str_Sex."<br />";
		echo "��妨�Z�G".$this->int_Chinese."<br />";
		echo "�^�y���Z�G".$this->int_English."<br />";
		echo "�ƾǦ��Z�G".$this->int_Maths."<br />";
	}
} 

$stdObject1 = new Student;
$stdObject1->int_Id=1;
$stdObject1->str_Name="David";
$stdObject1->str_Sex="�k";
$stdObject1->int_Chinese=92;
$stdObject1->int_English=85;
$stdObject1->int_Maths=80;
$stdObject1->showData();
?>