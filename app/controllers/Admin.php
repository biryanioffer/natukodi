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
        $this->load->model(array('admin/Business_Categories_Model'));
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

	// ***** Controller functions *****
	/*
	 * Checks DB whether valid admin or not
	 * Store admin info in session and navigates to administrators summary
	 */
	public function login()
	{
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
	public function logout()
	{
		$this->Login_Model->clear_session_data();
		redirect('admin/index');
	}

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
		$data['selected_id'] = $id;
		//	get a category by id...
		$category = $this->Business_Categories_Model->get_category($id);
		if($category) {
			$data['category'] = $this->Business_Categories_Model->get_category($id);
			echo json_encode($data);
			// @TODO: Show Edit category modal window
		} else {
			$this->notify('Selected category not found');
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
		if($this->Business_Categories_Model->get_category($id)) {
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

	/*
	 * This is a sample page to test any piece of code/component
	 * Will be removed once development completed
	 */
	public function playground() {
		if($this->Login_Model->is_logged_in_admin()){
			$this->load->view('admin/playground');
		}
	}
}
