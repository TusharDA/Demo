<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Stud_model extends CI_Model  
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		  
	}	
	function get_stud_details()
	{
		  $sql = 'select stud_id, stud_name, stud_rollno, stud_standard, stud_division, stud_DOB, state, country, city, address, paddress, email, contact from students';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;		
	}
	function InsertStudenData($post_data)
	{
		$this->db->trans_start();		
		$this->db->insert('student', $post_data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		return $insert_id;
		
	} 
	
}
?>