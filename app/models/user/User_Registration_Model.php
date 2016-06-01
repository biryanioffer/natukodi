<?php
/**
* Users model here for getting roles and data
*/
class User_Registration_Model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
	}
// Checking for User record Already Existed / not in 'user' Table 
	public function email_exists($email) {
		 
		$this->db->select('merchant_id');
			$this->db->where('email', $email);
			$query = $this->db->get('merchants');

			if ($query->num_rows() > 0) {
				return 1;
			} else {
				return 0;
			}
	}
	
	public function user_email_exists($email) {
		 
		$this->db->select('id');
			$this->db->where('email', $email);
			$query = $this->db->get('users');

			if ($query->num_rows() > 0) {
				return 1;
			} else {
				return 0;
			}
	}
	
	public function username_exists($user_name) {
		 
		$this->db->select('merchant_id');
			$this->db->where('user_name', $user_name);
			$query = $this->db->get('merchants');

			if ($query->num_rows() > 0) {
				return 1;
			} else {
				return 0;
			}
	}
	public function save_merchant($REQUEST)
	{
				$data = array(
				"email" => $REQUEST['email'],
				"user_name" => $REQUEST['username'],
				"first_name" => $REQUEST['first_name'],
				"last_name" => $REQUEST['last_name'],
				"password" => $REQUEST['password'],
				"business_name" => $REQUEST['storename'],				
				"last_updated" => date('Y-m-d H:i:s')
			);
		$this->db->insert("merchants", $data);
		return 1;
	}
	// Inserting User Details into 'user' Table into DB 
	public function save_user($REQUEST)
	{
				//print_r($REQUEST);
				$location=explode(",",$REQUEST['googleLocation']);
				//print_r($location);
				$data = array(
				 "title" => $REQUEST['user_title'],				
				"first_name" => $REQUEST['first_name'],
				"last_name" => $REQUEST['last_name'],
				"dob" => $REQUEST['dob'],	
				"contact_number" => $REQUEST['contact_number'],	
				"email" => $REQUEST['email'],	
				"password" => $REQUEST['password'],
				"gender" => $REQUEST['gender'],
				"area" => $location[0],
				/*"landmark" => $REQUEST['landmark'],"zip_code" => $REQUEST['zip_code'],	*/
				"city" => $location[1],
				"state" =>  $location[2],
								
				"created_date" => date('Y-m-d H:i:s'),
				"last_updated" => date('Y-m-d H:i:s'),
				"status" => 1
			);
		if($this->db->insert("users", $data))
		{
			 redirect('index.php/console/thank_you');
		}
		return 1;
	}
}