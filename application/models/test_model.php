<?php
class Test_model extends CI_Model{

    function get_users(){
    	$q = $this->db->get('users');
		return $q;
    }    

 }