<?php
class Ubigeo_model extends CI_Model{

    function get_dptos(){
    	$this->db->select('CCDD, Nombre');
    	$this->db->order_by('Nombre','asc');
    	$q = $this->db->get('DPTO');
		return $q;
    }    

    function get_dpto_by_code($code){
    	$this->db->select('COD_DEPARTAMENTO, DES_DISTRITO, CENTRO');
    	$this->db->where('COD_DEPARTAMENTO',$code);
    	$this->db->where('ID_PROVINCIA',0);
    	$this->db->where('ID_DISTRITO',0);
    	$this->db->where('COD_DEPARTAMENTO !=','99');
    	$this->db->where('COD_DEPARTAMENTO !=','00');
    	$this->db->where_not_in('ID_DEPARTAMENTO', array(0,26,27));
    	$this->db->order_by('DES_DISTRITO','asc');
    	$q = $this->db->get('ubigeo');
		return $q;
    }    

    function get_provs($dpto){

    	$this->db->select('CCPP, Nombre');
		$this->db->where('CCDD',$dpto);
    	$this->db->order_by('Nombre','asc');
		$q = $this->db->get('PROV');
		return $q;
    }


	function get_dis($dep,$prov)
	{
		$this->db->select ('CCDI, Nombre');
		$this->db->where('CCDD',$dep);
		$this->db->where('CCPP',$prov);
		$this->db->order_by('Nombre','asc');
		$q = $this->db->get('DIST');
		return $q;
	}

 }
