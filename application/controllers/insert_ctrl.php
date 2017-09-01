<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('Department_Name', 'Head_of_Department', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('Head_of_Department', 'Head_of_Department', 'required|valid_email');


if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view');
} else {
//Setting values for tabel columns
$data = array(
'Department_Name' => $this->input->post('Department_Name'),
'Head_of_Department' => $this->input->post('Head_of_Department'),
);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('insert_view', $data);
}
}

}

?>