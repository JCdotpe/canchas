<?php 
class Encuesta_model extends CI_MODEL{

 	function get_fields($c){
        $q = $this->db->list_fields($c);
        return $q;
    }

    function consulta_in_cap($id,$seccion)
    {
        $this->db->where('Postulante_Id',$id);
        $q = $this->db->get($seccion);
        return $q;
    }


    function get_cap($id,$table){
        $this->db->where('Postulante_Id',$id);
        $q = $this->db->get($table);
        return $q;
    }   

    function insert_cap($table,$data){
        $this->db->insert($table, $data);
        return $this->db->affected_rows() > 0;
    }   

    function update_cap($table,$data,$id){//update 
        $this->db->where('Postulante_Id',$id);
        $this->db->update($table, $data);
        return $this->db->affected_rows() > 0;
    }  



}