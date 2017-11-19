<?php
class Model_customer extends CI_Model {
 public function get(){
  return $this->db->get("customer");
 }
}
?>