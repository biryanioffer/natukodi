<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 *	- or -
	 * 		http://example.com/index.php/admin/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/admin/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model(array('admin/Login_Model'));
	}

	// ---- controller functions -----
	public function login()
	{
		$this->form_validation->set_rules('login-email', 'Username', 'trim|required');
		$this->form_validation->set_rules('login-password', 'Password', 'trim|required|callback_check_database_user');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/index');
		} else {
			redirect('admin/administrators');
		}
	}

	public function check_database_user()
	{
		$email = $this->input->post('login-email');
		$password = $this->input->post('login-password');
		$this->db->where('email', $email);
		$this->db->where('password', $password);        // Run the query
		$query = $this->db->get('administrators');
		// Let's check if there are any results
		if ($query->num_rows() > 0) {
			// If there is a user, then create session data
			$row = $query->row();
			# echo "<pre>"; print_r($row); exit;
			$data = array(
				'id' => $row->id,
				'email' => $row->email,
				'Login' => TRUE
			);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		$this->form_validation->set_message('check_database', 'Please check your login credentials.');
		return false;
	}

	public function create_category()
	{
		$cnt = $this->Business_Categories_Model->is_category_exists($_REQUEST["val-category-name"]);
		if ($cnt == 1) {
			echo "1";
		} else {
			$this->Business_Categories_Model->create_category($_REQUEST);
		}
		exit;
	}
	
	// ---- URIs -----
	public function index()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/login');
		//$this->load->view('admin/common/footer');
	}

	//*** Admin Management ***
	public function administrators()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/administrators');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
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
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/categories');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function category()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/category');
		$this->load->view('admin/common/footer');
	}
    public function sub_categories()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/sub_categories');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
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
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/service_areas');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
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
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/users');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
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
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user_likes');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function user_ratings()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user_ratings');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function user_favourites()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user_favourites');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}

	//*** Merchant Management ***
	public function merchants()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchants');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
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
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_branches');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function merchant_business_categories()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_business_categories');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function merchant_notifications()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_notifications');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function merchant_transactions()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_transactions');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}

	//*** Offer Management ***
	public function offers()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offers');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function offer_sub_categories()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offer_sub_categories');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
	public function offer_image_gallery()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offer_image_gallery');
		$this->load->view('admin/common/footer');
		$this->load->view('admin/common/table-template-end');
	}
}
