<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function index()	{
		$this->load->view('home_index');
	}

	public function aboutus() {
		$this->load->view('home_aboutus');
	}

	/*public function test0() {
		$this->load->view('home_test');
	}*/



	


	public function createtbl() {
		// $this->load->database();
		$sql='
		CREATE TABLE `friends` (
			`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
			`name` varchar(20) DEFAULT NULL,
			`tel` varchar(20) DEFAULT NULL,
			PRIMARY KEY (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		   ';
		   $this->db->query($sql);
		   echo 'ok';
	}





	

	public function adddata()
	{
		//$this->load->database();
		$sql="
		INSERT INTO friends(`name`,`tel`) VALUES('明','0912123123');
		INSERT INTO friends(`name`,`tel`) VALUES('王','0912456456');
		INSERT INTO friends(`name`,`tel`) VALUES('強','0912789789');
		";
		$this->db->query($sql);
		echo 'ok';
	}


	public function test() {
		$this->load->model('friends_model');
		$data=array(
			'friends'=>$this->friends_model->getAllFriends()
		);
		$this->load->view('home_test',$data);
	}
	
}
