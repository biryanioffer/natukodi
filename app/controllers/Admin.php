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
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model(array('Main_Model'));

		$this->load->model(array('admin/Login_Model'));
		$this->load->model(array('admin/Administrators_Model'));
        $this->load->model(array('admin/Business_Categories_Model'));
		$this->load->model(array('admin/Cities_Model'));
		$this->load->model(array('admin/Merchants_Model'));
		$this->load->model(array('admin/Offers_Model'));
		$this->load->model(array('admin/Users_Model'));
	}

	/**
	 * Global method to notify users error/warning/info messages based on type
	 */
	public function notify($msg, $type='info') {
		echo $msg;
		//$data["notification"] = $msg;
		//echo "<script>alert('Error occured, please contact administrator...')</script>";
		/*@TODO: display notification instead alert...
         * echo "<script src=\"assets/admin/js/plugins.js\"></script>
        <script>$.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>msg</p>', {
                type: 'warning',
                delay: 3000,
                allow_dismiss: true,
                offset: {from: 'top', amount: 20}
            });</script>";*/
	}

	// **** Admin module URIs ****
	/*
	 * Default page when access http://offerciti.com/admin
	 */
	public function index() {
		$this->load->view('admin/common/head');
		$this->load->view('admin/login');
	}

	//*** Admin Management ***
	

    public function sub_categories() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/sub_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	public function sub_category() {
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/sub_category');
		$this->load->view('admin/common/footer');
	}

	public function service_areas() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/service_areas');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	public function service_area() {
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/service_area');
		$this->load->view('admin/common/footer');
	}

	//*** Offer Management ***
	public function offers() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offers');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function offer_sub_categories() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offer_sub_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function offer_image_gallery() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/offer_image_gallery');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	// ***** Controller functions *********************************************************
	/*
	 * Checks DB whether valid admin or not
	 * Store admin info in session and navigates to administrators summary
	 */
	public function login() {
		if($this->Login_Model->verify_admin($_REQUEST)){
			redirect('admin/administrators');
		} else {
			$this->notify('Invalid credentials');
			redirect('admin/index');
		}
	}

	/*
	 * Clears all session variables
	 * Logs out from application and redirects to login page
	 */
	public function logout() {
		$this->Login_Model->clear_session_data();
		redirect('admin/index');
	}

	// ***** Administrator URIs *********************************************************
	/*
	 * Loads all administrators to display in summary page
	 */
	public function administrators() {
		if($this->Login_Model->is_logged_in_admin()){
			//	get all administrators...
			$data['admins'] = $this->Administrators_Model->get_administrators();

			//	navigate to Administrators Summary ...
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/administrators', $data);
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	
	/*
	 * Load an administrator by admin_id to display in Edit modal window
	 */
	public function get_administrator($admin_id) {
		if($this->Login_Model->is_logged_in_admin()) {
			$data['selected_id'] = $admin_id;
			//	get an admin by admin_id...
			$admin = $this->Administrators_Model->get_administrator($admin_id);
			if ($admin) {
				$data['admin'] = $admin;
				echo json_encode($data);
				// @TODO: Show Edit admin modal window
			} else {
				$this->notify('Selected administrator not found');
			}
		}
	}

	/*
	 * Creates new administrator
	 */
	public function create_administrator() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Administrators_Model->is_email_exists($_REQUEST['email'])) {
				$data = array(
					"role" => $_REQUEST['role'],
					"first_name" => $_REQUEST['first_name'],
					"last_name" => $_REQUEST['last_name'],
					"contact_number" => $_REQUEST['contact_number'],
					"email" => $_REQUEST['email'],
					"user_name" => $_REQUEST['user_name'],
					"password" => $_REQUEST['password'],
					"status" => 1,
					"created_date" => date('Y-m-d H:i:s'),
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Administrators_Model->create_admin($data)) {
					$this->notify('New administrator created successfully!');
					redirect('admin/administrators');
				} else {
					$this->notify('Administrator cannot be saved!');
				}
			} else {
				$this->notify('Administrator with email address already exist!');
			}
		}
	}

	/*
	 * Updates existing admin by admin_id
	 */
	public function update_administrator() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Administrators_Model->is_email_exists($_REQUEST['email'])) {
				$data = array(
					"role" => $_REQUEST['role'],
					"first_name" => $_REQUEST['first_name'],
					"last_name" => $_REQUEST['last_name'],
					"contact_number" => $_REQUEST['contact_number'],
					"password" => $_REQUEST['password'],
					"status" => $_REQUEST['status'],
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Administrators_Model->update_admin($data['selected_id'], $data)) {
					$this->notify('Administrator updated successfully');
					redirect('admin/administrators');
				} else {
					$this->notify('Administrator cannot be updated!');
				}
			} else {
				$this->notify('Administrator with email address already exist!');
			}
		}
	}

	/*
	 * Deletes existing admin by admin_id
	 */
	public function delete_administrator($admin_id) {
		if($this->Login_Model->is_logged_in_admin()) {
			if ($this->Administrators_Model->get_administrator($admin_id)) {
				if ($this->Administrators_Model->delete_admin($admin_id)) {
					$this->notify('Administrator deleted successfully!');
					redirect('admin/administrators');
				} else {
					$this->notify('Administrator cannot be deleted!');
				}
			} else {
				$this->notify('No Administrator exist with id: ' . $admin_id);
			}
		}
	}

	// ***** Categories URIs ************************************************************
	/*
	 * Loads all categories to display in summary page
	 */
	public function categories() {
		if($this->Login_Model->is_logged_in_admin()){
			//	get all categories...
			$data['categories'] = $this->Business_Categories_Model->get_categories();

			//	navigating to Categories grid ...
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/categories', $data);
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	/*
	 * Load a category by category id to display in Edit modal window
	 */
	public function get_category($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			$data['selected_id'] = $id;
			//	get a category by id...
			$category = $this->Business_Categories_Model->get_category($id);
			if ($category) {
				$data['category'] = $category;
				echo json_encode($data);
				// @TODO: Show Edit category modal window
			} else {
				$this->notify('Selected category not found');
			}
		}
	}

	/*
	 * Creates new category
	 */
	public function create_category() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Business_Categories_Model->is_category_exists($_REQUEST['category-name'])) {
				$data = array(
					"category_name" => $_REQUEST['category-name'],
					"status" => 1,
					"created_date" => date('Y-m-d H:i:s')
				);
				if ($this->Business_Categories_Model->create_category($data)) {
					$this->notify('New Category created successfully!');
					redirect('admin/categories');
				} else {
					$this->notify('Category cannot be saved!');
				}
			} else {
				$this->notify('Category with same name already exist!');
			}
		}
	}

	/*
	 * Updates existing category by category id
	 */
	public function update_category() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Business_Categories_Model->is_category_exists($_REQUEST['category-name'])) {
				$data = array(
					"category_name" => $_REQUEST['category-name'],
					"status" => $_REQUEST['status']
				);
				if ($this->Business_Categories_Model->update_category($data['selected_id'], $data)) {
					$this->notify('Category updated successfully');
					redirect('admin/categories');
				} else {
					$this->notify('Category cannot be updated!');
				}
			} else {
				$this->notify('Category with same name already exist!');
			}
		}
	}

	/*
	 * Deletes existing category by category id
	 */
	public function delete_category($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			if ($this->Business_Categories_Model->get_category($id)) {
				if ($this->Business_Categories_Model->delete_category($id)) {
					redirect('admin/categories');
					$this->notify('Category deleted successfully!');
				} else {
					$this->notify('Category cannot be deleted!');
				}
			} else {
				$this->notify('No category exist with category id: ' . $id);
			}
		}
	}

	/*
	 * This is a sample page to test any piece of code/component
	 * Will be removed once development completed
	 */
	public function playground() {
		if($this->Login_Model->is_logged_in_admin()){
			$this->load->view('admin/playground');
		}
	}

	// ***** Cities URIs ************************************************************
	/*
	 * Loads all cities to display in summary page
	 */
	public function cities() {
		if($this->Login_Model->is_logged_in_admin()){
			//	get all cities...
			$data['cities'] = $this->Cities_Model->get_cities();

			//	navigating to Cities Summary ...
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/cities', $data);
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	/*
	 * Load a city by city id to display in Edit modal window
	 */
	public function get_city($city_id) {
		if($this->Login_Model->is_logged_in_admin()) {
			$data['selected_id'] = $city_id;
			//	get a city by id...
			$city = $this->Cities_Model->get_city($city_id);
			if ($city) {
				$data['city'] = $city;
				echo json_encode($data);
				// @TODO: Show Edit city modal window
			} else {
				$this->notify('Selected city not found');
			}
		}
	}

	/*
	 * Creates new city
	 */
	public function create_city() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Cities_Model->is_exists($_REQUEST['city'])) {
				$data = array(
					"city" => $_REQUEST['city'],
					"state" => $_REQUEST['state'],
					"status" => 1,
					"created_on" => date('Y-m-d H:i:s')
				);
				if ($this->Cities_Model->create_city($data)) {
					$this->notify('New City created successfully!');
					redirect('admin/cities');
				} else {
					$this->notify('City cannot be saved!');
				}
			} else {
				$this->notify('City with same name already exist!');
			}
		}
	}

	/*
	 * Updates existing city by city id
	 */
	public function update_city() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Cities_Model->is_exists($_REQUEST['city'])) {
				$data = array(
					"city" => $_REQUEST['city'],
					"state" => $_REQUEST['state'],
					"status" => $_REQUEST['status']
				);
				if ($this->Cities_Model->update_city($data['selected_id'], $data)) {
					$this->notify('City updated successfully');
					redirect('admin/cities');
				} else {
					$this->notify('City cannot be updated!');
				}
			} else {
				$this->notify('City with same name already exist!');
			}
		}
	}

	/*
	 * Deletes existing city by city id
	 */
	public function delete_city($city_id) {
		if($this->Login_Model->is_logged_in_admin()) {
			if ($this->Cities_Model->get_city($city_id)) {
				if ($this->Cities_Model->delete_city($city_id)) {
					$this->notify('City deleted successfully!');
					redirect('admin/cities');
				} else {
					$this->notify('City cannot be deleted!');
				}
			} else {
				$this->notify('No city exist with city id: ' . $city_id);
			}
		}
	}

	// ***** User URIs ************************************************************
	/*
	 * Loads all users to display in summary page
	 */
	public function users() {
		if($this->Login_Model->is_logged_in_admin()){
			//	get all users...
			$data['users'] = $this->Users_Model->get_users();

			//	navigating to users Summary ...
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/users', $data);
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	/*
	 * Load a user by id to display in Edit modal window
	 */
	public function get_user($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			$data['selected_id'] = $id;
			//	get an user by id...
			$user = $this->Users_Model->get_user($id);
			if ($user) {
				$data['user'] = $user;
				echo json_encode($data);
				// @TODO: Show Edit user modal window
			} else {
				$this->notify('Selected user not found');
			}
		}
	}

	/*
	 * Creates new user
	 */
	public function create_user() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Users_Model->is_email_exists($_REQUEST['email'])) {
				$data = array(
					"first_name" => $_REQUEST['first_name'],
					"last_name" => $_REQUEST['last_name'],
					"dob" => $_REQUEST['dob'],
					"contact_number" => $_REQUEST['contact_number'],
					"email" => $_REQUEST['email'],
					"password" => $_REQUEST['password'],
					"gender" => $_REQUEST['gender'],
					"area" => $_REQUEST['area'],
					"landmark" => $_REQUEST['landmark'],
					"zip_code" => $_REQUEST['zip_code'],
					"city" => $_REQUEST['city'],
					"state" => $_REQUEST['state'],
					"status" => 1,
					"created_date" => date('Y-m-d H:i:s'),
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Users_Model->create_user($data)) {
					$this->notify('New User created successfully!');
					redirect('admin/users');
				} else {
					$this->notify('User cannot be saved!');
				}
			} else {
				$this->notify('User with same email address already exist!');
			}
		}
	}

	/*
	 * Updates existing user by id
	 */
	public function update_user() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Users_Model->is_email_exists($_REQUEST['email'])) {
				$data = array(
					"first_name" => $_REQUEST['first_name'],
					"last_name" => $_REQUEST['last_name'],
					"dob" => $_REQUEST['dob'],
					"contact_number" => $_REQUEST['contact_number'],
					"password" => $_REQUEST['password'],
					"gender" => $_REQUEST['gender'],
					"area" => $_REQUEST['area'],
					"landmark" => $_REQUEST['landmark'],
					"zip_code" => $_REQUEST['zip_code'],
					"city" => $_REQUEST['city'],
					"state" => $_REQUEST['state'],
					"status" => $_REQUEST['status'],
					"created_date" => date('Y-m-d H:i:s'),
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Users_Model->update_user($data['selected_id'], $data)) {
					$this->notify('User updated successfully');
					redirect('admin/users');
				} else {
					$this->notify('User cannot be updated!');
				}
			} else {
				$this->notify('User with same email address already exist!');
			}
		}
	}

	/*
	 * Deletes existing user by id
	 */
	public function delete_user($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			if ($this->Users_Model->get_user($id)) {
				if ($this->Users_Model->delete_user($id)) {
					$this->notify('User deleted successfully!');
					redirect('admin/users');
				} else {
					$this->notify('User cannot be deleted!');
				}
			} else {
				$this->notify('No user exist with user id: ' . $id);
			}
		}
	}

	public function user_likes() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_likes');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function user_ratings() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_ratings');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function user_favourites() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/user_favourites');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	// ***** Merchant URIs ************************************************************
	/*
	 * Loads all merchants to display in summary page
	 */
	public function merchants() {
		if($this->Login_Model->is_logged_in_admin()){
			//	get all merchants...
			$data['merchants'] = $this->Merchants_Model->get_merchants();

			//	navigate to merchants Summary ...
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchants', $data);
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}

	/*
	 * Load a merchant by id to display in Edit modal window
	 */
	public function get_merchant($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			$data['selected_id'] = $id;
			//	get a merchant by id...
			$merchant = $this->Merchants_Model->get_merchant($id);
			if ($merchant) {
				$data['merchant'] = $merchant;
				echo json_encode($data);
				// @TODO: Show Edit merchant modal window
			} else {
				$this->notify('Selected merchant not found');
			}
		}
	}

	/*
	 * Creates new merchants
	 */
	public function create_merchant() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Merchants_Model->is_username_exists($_REQUEST['user_name'])) {
				$data = array(
					"user_name" => $_REQUEST['user_name'],
					"password" => $_REQUEST['password'],
					"status" => 1,
					"business_name" => $_REQUEST['business_name'],
					"description" => $_REQUEST['description'],
					"website_url" => $_REQUEST['website_url'],
					"facebook_url" => $_REQUEST['facebook_url'],
					"twitter_url" => $_REQUEST['twitter_url'],
					"google_plus_url" => $_REQUEST['google_plus_url'],
					"pan_number" => $_REQUEST['pan_number'],
					"address_proof" => $_REQUEST['address_proof'],
					"wallet_balance" => $_REQUEST['wallet_balance'],
					"created_date" => date('Y-m-d H:i:s'),
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Merchants_Model->create_merchant($data)) {
					$this->notify('New merchant created successfully!');
					redirect('admin/merchants');
				} else {
					$this->notify('Merchant cannot be saved!');
				}
			} else {
				$this->notify('Merchant with same user name already exist!');
			}
		}
	}

	/*
	 * Updates existing merchant by id
	 */
	public function update_merchant() {
		if($this->Login_Model->is_logged_in_admin()) {
			if(!$this->Merchants_Model->is_username_exists($_REQUEST['user_name'])) {
				$data = array(
					"user_name" => $_REQUEST['user_name'],
					"password" => $_REQUEST['password'],
					"status" => $_REQUEST['status'],
					"business_name" => $_REQUEST['business_name'],
					"description" => $_REQUEST['description'],
					"website_url" => $_REQUEST['website_url'],
					"facebook_url" => $_REQUEST['facebook_url'],
					"twitter_url" => $_REQUEST['twitter_url'],
					"google_plus_url" => $_REQUEST['google_plus_url'],
					"pan_number" => $_REQUEST['pan_number'],
					"address_proof" => $_REQUEST['address_proof'],
					"wallet_balance" => $_REQUEST['wallet_balance'],
					"created_date" => date('Y-m-d H:i:s'),
					"last_updated" => date('Y-m-d H:i:s')
				);
				if ($this->Merchants_Model->update_merchant($data['selected_id'], $data)) {
					$this->notify('Merchant updated successfully');
					redirect('admin/merchants');
				} else {
					$this->notify('Merchant cannot be updated!');
				}
			} else {
				$this->notify('merchant with same user name already exist!');
			}
		}
	}

	/*
	 * Deletes existing merchant by id
	 */
	public function delete_merchant($id) {
		if($this->Login_Model->is_logged_in_admin()) {
			if ($this->Merchants_Model->get_merchant($id)) {
				if ($this->Merchants_Model->delete_merchant($id)) {
					$this->notify('Merchant deleted successfully!');
					redirect('admin/merchants');
				} else {
					$this->notify('Merchant cannot be deleted!');
				}
			} else {
				$this->notify('No merchant exist with id: ' . $id);
			}
		}
	}

	public function merchant_branches() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_branches');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_business_categories() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_business_categories');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_notifications() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_notifications');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
	public function merchant_transactions() {
		if($this->Login_Model->is_logged_in_admin()) {
			$this->load->view('admin/common/head');
			$this->load->view('admin/common/side-nav');
			$this->load->view('admin/common/top-bar');
			$this->load->view('admin/merchant_transactions');
			$this->load->view('admin/common/footer');
			$this->load->view('admin/common/template-end');
		}
	}
}
