<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dep_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_department_list()
     {
          $sql = 'select var_dept_name, var_emp_name from tbl_dept, tbl_emp where tbl_dept.int_hod = tbl_emp.int_id';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }
}