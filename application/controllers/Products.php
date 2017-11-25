<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    function __construct() {
        parent::__construct ();
        $this->load->model('products_model');      
    }
    //show add product form
    //save product data
    //edit product data 
    //update product data
    //delete product
    function show_add_category_from(){
        $data['admin_maincontent']= $this->load->view('admin/admin_pages/add_category_form','', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    function save_category(){
        $this->products_model->save_category();    
        $this->show_all_category();
       }
    function show_all_category(){
      $category_data['all_category']= $this->products_model->get_all_category(); 
      $data['admin_maincontent'] =$this->load->view('admin/admin_pages/all_category', $category_data, TRUE);
      $this->load->view('admin/admin_master',$data);
    }
    function change_category_status($category_id, $status){
        $this->products_model->change_category_status($category_id, $status);
        $this->show_all_category();
    }
    function edit_category($category_id){
        $data['category_data'] = $this->products_model->get_category_detail($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/edit_category_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    function update_category(){
        $this->products_model->update_category();
        redirect('all-category');
      }
      function  add_products(){
          $data['category_info']= $this->products_model->get_all_active_categoy();
          $data['admin_maincontent']=  $this->load->view('admin/admin_pages/add_product_form', $data, TRUE);
          $this->load->view('admin/admin_master', $data);
      }
      function save_product(){
          $this->products_model->save_product();
          $this->session->set_userdata('message', 'Product Save Successfully');
          $this->add_products();
      }
      function manage_products(){
          $data=array();
          $data['all_product']= $this->products_model->select_all_products();
          $data['admin_maincontent']=   $this->load->view('admin/admin_pages/manage_product', $data, TRUE);;
          $this->load->view('admin/admin_master', $data);
         
      }
 }