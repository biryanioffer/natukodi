<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class App extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://offerciti.com/app
     *    - or -
     *        http://offerciti.com/app/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://offerciti.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /console/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model(array('Main_Model'));
		$this->load->model(array('user/User_Login_Model'));
		$this->load->model(array('user/User_Registration_Model'));
		$this->load->model(array('merchant/Merchant_Login_Model'));
		$this->load->model(array('merchant/Merchant_Registration_Model'));
  	 }

	// ---- URIs -----

	public function index()
	{
		$this->load->view('index');
	}

	//	*** USER WORKFLOW ***
	public function login()
	{
		$this->load->view('user/login');
	}
	public function sign_up()
	{
		$this->load->view('user/signup');
	}
	public function profile()
	{
		if($this->User_Login_Model->is_logged_in_user()) {
			$this->load->view('user/profile');
		}
	}
	public function favourites()
	{
		if($this->User_Login_Model->is_logged_in_user()) {
			$this->load->view('user/favourites');
		}
	}
	public function thank_you()
	{
		$this->load->view('user/thankYou');
	}
	public function offers()
	{
		$this->load->view('offer/results');
	}
	public function more_details()
	{
		$this->load->view('offer/offerMoreDetails');
	}

	//	*** MERCHANT WORKFLOW ***
	public function merchant_login()
	{
		$this->load->view('merchant/login');
	}
	public function register()
	{
		$this->load->view('merchant/registration');
	}
	public function merchant_profile()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/profile');
		}
	}
	public function merchant_change_password()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/changePassword');
		}
	}
	public function offer_post()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('offer/postOffer');
		}
	}
	public function posts()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/posts');
		}
	}
	public function wallet()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/wallet');
		}
	}
	public function branches()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/branches');
		}
	}
	public function notifications()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/notifications');
		}
	}
	public function support()
	{
		if($this->Merchant_Login_Model->is_logged_in_merchant()) {
			$this->load->view('merchant/support');
		}
	}
	public function merchant_thank_you()
	{
		$this->load->view('merchant/thankYou');
	}

	// ***** USER workflow controller functions *****
	public function login_user()
	{
		if($this->User_Login_Model->verify_user($_REQUEST)){
			redirect('app/profile');
		} else {
			echo "<script>alert('Invalid credentials')</script>";
		}
	}

	public function logout()
	{
		$this->User_Login_Model->clear_session_data();
		redirect('app/login');
	}
	// ***** USER workflow controller functions END *****



	// ***** Merchant workflow controller functions *****
	public function login_merchant()
	{
		if($this->Merchant_Login_Model->verify_merchant($_REQUEST)){
			redirect('app/merchant_profile');
		} else {
			echo "<script>alert('Invalid credentials')</script>";
			redirect('app/merchant_login');
		}
	}

	public function logout_merchant()
	{
		$this->Merchant_Login_Model->clear_session_data();
		redirect('app/merchant_login');
	}
	// ***** Merchant workflow controller functions END *****

}


