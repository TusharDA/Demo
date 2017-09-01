<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Department extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          //load the department_model
          $this->load->model('Dep_model');  
          //call the model function to get the department data
          $deptresult = $this->Dep_model->get_department_list();           
          $data['deptlist'] = $deptresult;
          //load the department_view
          $this->load->view('Dep_view',$data);
     }
}