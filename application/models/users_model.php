<?php   
  class users_model extends CI_Model  
  {  

    function get($id)     
    {       
      $result = $this->db->get_where('usuaris', array('id' => $id));
      return $result->row();
    }
  }
?>