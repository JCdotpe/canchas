<?php 
class Car_model extends CI_MODEL{

    function delete_car_n($id){
        $this->db->where('Postulante_Id', $id);     
        $this->db->delete('POSTULANTE_B');
        return $this->db->affected_rows() > 0;
    }  

}