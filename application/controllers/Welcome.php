<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model');
    }
    public function index() {
        $data = array();
        $data['title'] = "Home";
        $data['slider'] = $this->load->view('pages/slider', '', TRUE);
        $data['all_active_product']=  $this->load->welcome_model->all_active_product();
        $data['featured_product'] = $this->load->view('pages/featured_product', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function category_product($product_category){
        $data=array();
        $data['slider'] = $this->load->view('pages/slider','', TRUE);
        $data['all_category_product']=  $this->load->welcome_model->category_product($product_category);
        $data['featured_product'] = $this->load->view('pages/category_product',$data, TRUE);
        $this->load->view('master',$data);
    }
    public function manufacturer_product($product_manufacturer){
        $data=array();
        $data['slider'] = $this->load->view('pages/slider','', TRUE);
        $data['all_manufacturer_product']=  $this->load->welcome_model->manufacturer_product($product_manufacturer);
        $data['featured_product'] = $this->load->view('pages/manufacturer_product',$data, TRUE);
        $this->load->view('master',$data);
    } 

    public function accounts() {
        $data = array();
        $data['title'] = "Accounts";
        $data['slider'] = '';
        $data['latest_product'] = "<h1 align='center'>Account Content Here.........</h1>";
        $this->load->view('master', $data);
    }

}
