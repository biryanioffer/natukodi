<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class console extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/console
	 *	- or -
	 * 		http://example.com/index.php/console/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/console/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
		$this->load->view('user/signUp');
	}
	public function profile()
	{
		$this->load->view('user/profile');
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
	public function offer_post()
	{
		$this->load->view('offer/postOffer');
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
		$this->load->view('merchant/profile');
	}
	public function merchant_change_password()
	{
		$this->load->view('merchant/changePassword');
	}
	public function posts()
	{
		$this->load->view('merchant/posts');
	}
	public function wallet()
	{
		$this->load->view('merchant/wallet');
	}
	public function branches()
	{
		$this->load->view('merchant/branches');
	}
	public function notifications()
	{
		$this->load->view('merchant/notifications');
	}
	public function support()
	{
		$this->load->view('merchant/support');
	}
	public function merchant_thank_you()
	{
		$this->load->view('merchant/thankYou');
	}
}
