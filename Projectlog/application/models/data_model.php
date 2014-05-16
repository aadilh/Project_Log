<?php

class Data_model extends CI_Model{
    
    public function get_data($date){
        $this->load->database();
        $q = $this->db->query("SELECT * FROM `log` WHERE `dated` = '$date' ORDER BY `user`");
        
        return $q->result();
        
        
    }
    public function post_data($name,$date,$log){
        
          $this->load->database();
        $this->db->query("INSERT INTO `log`(`id`, `user`, `dated`, `logDetail`) VALUES (NULL,'$name','$date','$log')");
        
    }
    
}


?>