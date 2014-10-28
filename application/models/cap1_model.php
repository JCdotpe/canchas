<?php 
class Cap1_model extends CI_MODEL{

    function delete_cap1_n($id){
        $this->db->where('Postulante_Id', $id);     
        $this->db->delete('CAP01');
        return $this->db->affected_rows() > 0;
    }  

}