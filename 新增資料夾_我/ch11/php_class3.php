<?php
class Student { 
	var $int_Id;		//�y��
	var $str_Name;		//�m�W
	var $str_Sex;		//�ʧO
	var $int_Chinese;	//��妨�Z
	var $int_English;	//�^�y���Z
	var $int_Maths;		//�ƾǦ��Z
	
	function __construct(){
		echo "*****�ǥ͸�ƶ}�l*****<br />";
	}
	
	function setData($Id,$Name,$Sex,$Chinese,$English,$Maths){
		$this->int_Id = $Id;
		$this->str_Name = $Name;
		$this->str_Sex = $Sex;
		$this->int_Chinese = $Chinese;
		$this->int_English = $English;
		$this->int_Maths = $Maths;
	}
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
$stdObject1->setData(1,"David","�k",92,85,80);
$stdObject1->showData();
$stdObject2 = new Student;
$stdObject2->setData(2,"Lily","�k",87,90,76);
$stdObject2->showData();
?>