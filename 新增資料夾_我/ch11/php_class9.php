<?php
class Student { 
	public $int_Id;		//�y��
	public $str_Name;		//�m�W
	public $str_Sex;		//�ʧO
	
	public function setData($Id,$Name,$Sex){
		$this->int_Id = $Id;
		$this->str_Name = $Name;
		$this->str_Sex = $Sex;
	}
	public function showData(){
		echo "�y���G".$this->int_Id."<br />";
		echo "�m�W�G".$this->str_Name."<br />";
		echo "�ʧO�G".$this->str_Sex."<br />";
	}
	static function showMsg($msg){
		return $msg;
	}
} 
echo Student::showMsg("*****�ǥ͸�ƶ}�l*****<br/>");
$stdObject1 = new Student;
$stdObject1->setData(1,"David","�k");
$stdObject1->showData();
$stdObject2 = new Student;
$stdObject2->setData(2,"Lily","�k");
$stdObject2->showData();
echo Student::showMsg("*****�ǥ͸�Ƶ���*****<br/>");
?>