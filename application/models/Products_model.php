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
        $product_data['product_status'] = 1;
        $product_data['product_image'] = $this->upload_product_image();
        
        $this->db->insert('tbl_product', $product_data);
    }
    function select_all_products(){
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->get()->result();
        return $result;
    }
 }
