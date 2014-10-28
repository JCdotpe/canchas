<?php 
class Cap4_model extends CI_MODEL{

    function delete_cap4_n($id){
        $this->db->where('Postulante_Id', $id);     
        $this->db->delete('CAP04');
        return $this->db->affected_rows() > 0;
    }  

}