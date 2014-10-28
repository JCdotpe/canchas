<?php
class Muestra_model extends CI_Model{

    function get_users(){
    	$q = $this->db->get('MuestraPiloto');
		return $q;
    }    

 }