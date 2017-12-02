<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    function save_category() {
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_short_description'] = $this->input->post('category_short_description', TRUE);
        $data['category_long_description'] = $this->input->post('category_long_description', TRUE);
        $data['category_status'] = 1;
        $this->db->insert('tbl_category', $data);
    }

    function get_all_category() {
        $data = $this->db->select('*')->from('tbl_category')->get()->result();
        return $data;
    }

    function change_category_status($category_id, $status) {
        $data['category_status'] = $status;
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    function get_category_detail($category_id) {
        $result = $this->db->select('*')->from('tbl_category')
                ->where('category_id', $category_id)
                ->get()
                ->row();
        return $result;
    }

    function update_category() {
        $data = $this->input->post(NULL, TRUE);
        $category_id = $data['category_id'];
        unset($data['category_id']);
        $this->db->where('category_id', $category_id)->update('tbl_category', $data);
    }

    function get_all_active_categoy() {
        $result = $this->db->select('*')
                        ->from('tbl_category')
                        ->where('category_status', 1)
                        ->get()->result();
        return $result;
    }
    function get_all_active_manufacturer(){
        $result = $this->db->select('*')
                        ->from('tbl_manufacturer')
                        ->where('manufacturer_status', 1)
                        ->get()->result();
        return $result;
    }

    private function upload_product_image() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('product_image')){
            
           $data= $this->upload->data();
           $image_path= "uploads/$data[file_name]";
           
           return $image_path;
         }  else {
            $error= $this->upload->display_errors();  
            print_r($error);
        }
    }

    function save_product() {
        
        
       $product_data = $this->input->post(NULL, TRUE);
      $top_product=  $this->input->post('top_product',TRUE);
        
        if($top_product==NULL)
            {
            $product_data['top_product']=0;
            }
            if($top_product==1)
                {
                $product_data['top_product']=1;
                }
        $product_data['product_image'] = $this->upload_product_image();
        
        $this->db->insert('tbl_product', $product_data);
    }
    function select_all_products(){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->get()->result();
        return $result;
    }
    function product_active_by_id($product_id){
        $this->db->set('product_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    function product_inactive_by_id($product_id){
        $this->db->set('product_status',2);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    function product_delete_by_id($product_id){
        $this->db->set('product_status',3);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    function get_product_detail($product_id){
        $result = $this->db->select('*')->from('tbl_product')
                ->where('product_id', $product_id)
                ->get()
                ->row();
        return $result;
    }
    function save_manufacturer(){
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', TRUE);
        $data['manufacturer_short_description'] = $this->input->post('manufacturer_short_description', TRUE);
        $data['manufacturer_long_description'] = $this->input->post('manufacturer_long_description', TRUE);
        $data['manufacturer_status'] = 1;
        $this->db->insert('tbl_manufacturer', $data);
    }
    function manage_manufacturer(){
      $result = $this->db->select('*')
                        ->from('tbl_manufacturer')
                        ->get()->result();
        return $result;    
    }
    function change_manufacturer_status($manufacturer_id, $status){
        $data['manufacturer_status']=$status;
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer',$data);
    }
    function select_manufacturer_info($manufacturer_id){
        $result= $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('manufacturer_id',$manufacturer_id)
                ->get()
                ->row();
        return $result;
    }
    function update_manufacturer(){
        $data= $this->input->post(NULL,TRUE);
        $manufacturer_id=$data['manufacturer_id'];
        $this->db->where('manufacturer_id',$manufacturer_id)->update('tbl_manufacturer',$data);
    }
    function select_top_product(){
        $result = $this->db->select('*')
                ->from('tbl_product')
                ->where('top_product',1)
                ->get()
                ->result();
        return $result;
    }
    
 }
 
