<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Stud_controller extends CI_Controller { 	 
	public function __construct()
    {		 	
        parent::__construct();
		$this->load->database(); 
		$this->load->helper(array('url','html','form'));
		$this->load->helper('url');
		$this->load->library(array('form_validation','session'));	 
      	$this->load->model('Stud_model'); 
		error_reporting(E_ERROR |E_PARSE|E_CORE_ERROR);
	}
	public function display()
	{
           $this->load->model('Stud_model');  
          //call the model function to get the department data
          $deptresult = $this->Stud_model->get_stud_details();           
          $data['deptlist'] = $deptresult;
          //load the department_view
          $this->load->view('student',$data);
	}
	public function Student_Register()
	{
		//$stud_id=$this->input->post('stud_id');
		$StudentDetails = $this->Stud_model->get_report_details($stud_id);
		$data['termmenu'] = "";
		$data['homemenu'] = "";
		$data['aboutmenu'] = ""; 
		$data['cat_aero_def'] = "";
		$data['cat_agry'] = "";
		$data['cat_animal'] = "";
		$data['cat_bio'] = "";
		$data['cat_chem'] = "";
		$data['cat_energy'] = "";
		$data['cat_food'] = ""; 
		$data['cat_health'] = "";
		$data['cat_consumer'] = "";
		$data['cat_good'] = ""; 
		$data['cat_semi'] = "";
		$data['cat_auto'] = ""; 
		$data['cat_elect'] = "";	
		$data['cat_mach_eqip'] = "";
		$data['reportmenu'] = "";
		$data['contactmenu'] = "";
		$data['policymenu'] = "";
		$data['Account'] = "";
		$data['stud_id'] = $StudentDetails->stud_id;
		$data['stud_name'] = $StudentDetails->stud_name;
		$data['stud_rollno'] = $StudentDetails->stud_rollno;
		$data['stud_standard'] = $StudentDetails->stud_standard;
		$data['stud_division'] = $StudentDetails->stud_division;
		$data['stud_DOB'] = $StudentDetails->stud_DOB;
		$data['state'] = $StudentDetails->state;
		$data['country'] = $StudentDetails->country;
		$data['city'] = $StudentDetails->city;
		$data['address'] = $StudentDetails->address;
		$data['paddress'] = $StudentDetails->paddress;
		$data['email'] = $StudentDetails->email;
		$data['contact'] = $StudentDetails->contact;

		$post_data=array
			(			
				'stud_id'=>$this->input->post('stud_id'),
				'stud_name'=>$this->input->post('stud_name'),
				'stud_rollno'=>$this->input->post('stud_rollno'),
				'stud_standard'=>$this->input->post('stud_standard'),
				'stud_division'=>$this->input->post('stud_division'),			
				'stud_DOB'=>$this->input->post('stud_DOB'),
				'state'=>$this->input->post('state'),
				'country'=>$this->input->post('country'),
				'city'=>$this->input->post('city'),
				'address'=>$this->input->post('address'),
				'paddress'=>$this->input->post('paddress'),
				'email'=>$this->input->post('email'),
				'contact'=>$this->input->post('contact'),
			); 
		$insert_report = $this->Stud_model->InsertStudenData($post_data);
		$this->load->view("Welcome/thankYou",$data);
	}	
	
	
}
?>