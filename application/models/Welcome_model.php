<?php

class Welcome_model extends CI_Model{
    public function all_active_product(){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_status',1)
                        ->get()->result();
        return $result;
    }
    
}

