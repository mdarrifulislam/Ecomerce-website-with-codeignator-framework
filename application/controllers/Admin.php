<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!isset($this->session->user_id) && ($this->session->user_status != 1)) {
            redirect('admin');
        }
        $this->load->model('admin_model');
    }

    public function show_dashboard() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/dashboard', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function show_admin_register_form() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/register_admin_form', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function register_new_admin() {

        $this->form_validation->set_rules('user_name', 'User Name', 'required|max_length[255]');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|max_length[255]|is_unique[tbl_user.user_email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[8]|matches[user_password]');
       
        if ($this->form_validation->run()) {
            $this->admin_model->register_new_admin();
            $data['success_message'] = 'User registration successfull';
            $data['admin_maincontent'] = $this->load->view('admin/admin_pages/register_admin_form',$data, TRUE);
            $this->load->view('admin/admin_master', $data);
        } else {
            $this->show_admin_register_form();
        }
 }

}
