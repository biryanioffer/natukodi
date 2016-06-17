<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://offerciti.com/admin
	 *	- or -
	 * 		http://offerciti.com/index.php/admin/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /admin/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model(array('admin/Admin_Main_Model'));
		$this->load->model(array('admin/Login_Model'));
        $this->load->model(array('admin/Business_Categories_Model'));
	}

	// ---- URIs -----
	public function index()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/login');
	}

	//*** Admin Management ***
	public function administrators()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/administrators');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function administrator()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/administrator');
		$this->load->view('admin/common/footer');
	}
    public function categories()
	{
		if($this->Login_Model->is_logged_in_admin()){
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function load_category()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/edit_category');
		$this->load->view('admin/common/footer');
	}
    public function sub_categories()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/sub_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function sub_category()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/sub_category');
		$this->load->view('admin/common/footer');
	}
	public function service_areas()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/service_areas');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function service_area()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/service_area');
		$this->load->view('admin/common/footer');
	}

	//*** User Management ***
	public function users()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/users');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function user()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user');
		$this->load->view('admin/common/footer');
	}
	public function user_likes()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_likes');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function user_ratings()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_ratings');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function user_favourites()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_favourites');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	//*** Merchant Management ***
	public function merchants()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchants');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant');
		$this->load->view('admin/common/footer');
	}
	public function merchant_branches()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_branches');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_business_categories()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_business_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_notifications()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_notifications');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_transactions()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_transactions');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	//*** Offer Management ***
	public function offers()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offers');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function offer_sub_categories()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offer_sub_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function offer_image_gallery()
	{
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offer_image_gallery');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	// ***** controller functions *****
	public function login()
	{
		if($this->Login_Model->verify_admin($_REQUEST)){
			redirect('admin/administrators');
		} else {
			echo "<script>alert('Invalid credentials')</script>";
			redirect('admin/index');
		}
	}

	public function logout()
	{
		$this->Login_Model->clear_session_data();
		redirect('admin/index');
	}

	public function get_all_categories()
	{
		//	to display in the grid
	}

	public function create_category()
	{
		if($this->Business_Categories_Model->create_category($_REQUEST)) {
			redirect('admin/categories');
			echo "<script>alert('New Category created successfully!')</script>";
		} else {
			echo "<script>alert('Category cannot be saved!')</script>";
		}
	}

	public function update_category()
	{
		if($this->Business_Categories_Model->update_category($_REQUEST)) {
			redirect('admin/categories');
			echo "<script>alert('Category updated successfully!')</script>";
		} else {
			echo "<script>alert('Category cannot be updated!')</script>";
		}
	}

	public function get_category()
	{
		$id = 4; //$this->session->userdata('id');
		//$this->db->where('id', $id);
		// Run the query
		// $this->data['result'] = $this->db->get('');

		$query = $this->db->query("select * from business_categories where category_id='$id'");
		$this->data['result'] = $query->result();
		/*
                if ($_POST) {
                    $location = explode(",", $_POST['landmark']);
                    $area = $location[0];
                    $city = $location[1];
                    $state = $location[2];
                    $dob = $this->input->post('dob');
                    if ($this->data['result'][0]->dob != $dob) {
                        $mdob = explode("/", $dob);
                        $udob = $mdob[2] . "-" . $mdob[0] . "-" . $mdob[1];
                    } else {
                        $udob = $dob;
                    }
                    $gender = $this->input->post('gender');
                    $phone = $this->input->post('phone');
                    $query = $this->db->query("update users set area='$area',city='$city',state='$state',contact_number='$phone',dob='$udob',gender='$gender' where  id='$id' ");
                    echo "<script>alert('Profile Updated Successfuly')</script>";
                }
                $query = $this->db->query("select * from users where id='$id'");
                $this->data['result'] = $query->result();*/
		//$this->load->view('user/user_profile', $this->data);
		//load_category($this->data);
		//redirect('admin/edit_category');
	}
}
