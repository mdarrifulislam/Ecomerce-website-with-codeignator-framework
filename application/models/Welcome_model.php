<?php

class Welcome_model extends CI_Model{
    public function all_active_product(){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_status',1)
                        ->get()->result();
        return $result;
    }
    public function category_product($product_category){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_category',$product_category)
                        ->get()->result();
        return $result;
    }
    public function manufacturer_product($product_manufacturer){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_manufacturer',$product_manufacturer)
                        ->get()->result();
        return $result;
    }
    
}

