<?php
defined('BASEPATH') or exit('No direct script access allowed ');


class Stack_model extends CI_Model {


    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function saveContact($ipt){  // $fromInput=$ipt

       


        $contactData=array(
            'full_name'=> $ipt['name'],
            'email'=> $ipt['email'],
            'subject'=> $ipt['subject'],
            'message'=> $ipt['message']

        );
        
        $this->db->insert('contact',$contactData);  

        
       

         $iid=$this->db->insert_id();  
         return ($iid > 0) ? TRUE : FALSE;

    }
}