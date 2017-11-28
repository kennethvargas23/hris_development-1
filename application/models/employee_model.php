<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function employee_view($data){
			return $this->db->where($data)
							->select('employee_id,
									employee_lastName,
									employee_firstName,
									employee_middleName,
									employee_dob,
									employee_address,
									employee_email,
									employee_attachment,
									employee_photo,
									employee_TIN,
									employee_SSS,
									account_username,
									gender_name,
									civilStatus_name,
									religion_name,
									status_name,
									employment_name,
									department_name,
									title_name,
									location_name')
							->join('account','employee_account=account_id','left')
							->join('employee_gender','employee_gender=gender_id','left')
							->join('employee_civilStatus','employee_civilStatus=civilStatus_id','left')
							->join('employee_religion','employee_religion=religion_id','left')
							->join('employee_status','employee_status=status_id','left')
							->join('employee_employment','employee_employment=employment_id','left')
							->join('employee_department','employee_department=department_id','left')
							->join('employee_title','employee_title=title_id')
							->join('employee_location','employee_location=location_id')
							->get('employee')
							->result_array();
	}
	public function employee_get(){
		return $this->db->select('employee_id,
								employee_lastName,
								employee_firstName,
								employee_middleName,
								employee_dob,
								employee_address,
								employee_email,
								employee_attachment,
								employee_photo,
								employee_TIN,
								employee_SSS,
								account_username,
								gender_name,
								civilStatus_name,
								religion_name,
								status_name,
								employment_name,
								department_name,
								title_name,
								location_name')
							->join('account','employee_account=account_id','left')
							->join('employee_gender','employee_gender=gender_id','left')
							->join('employee_civilStatus','employee_civilStatus=civilStatus_id','left')
							->join('employee_religion','employee_religion=religion_id','left')
							->join('employee_status','employee_status=status_id','left')
							->join('employee_employment','employee_employment=employment_id','left')
							->join('employee_department','employee_department=department_id','left')
							->join('employee_title','employee_title=title_id')
							->join('employee_location','employee_location=location_id')
							->get('employee')
							->result_array();
	}
}