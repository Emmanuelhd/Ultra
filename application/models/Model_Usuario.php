<?php
class Model_Usuario extends CI_Model
{
   function Insertar($data)
   {
      $this->db->insert('users',$data);
   }

   function getAll()
   {
      $query = $this->db->query('SELECT * FROM users');
      return $query->result();
   }
}
?>
