<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
	public function index()
	{
		$this->load->view('admin/common/head');
		//$this->load->view('admin/common/side-nav');
		//$this->load->view('admin/common/top-bar');
		$this->load->view('admin/login');
		$this->load->view('admin/common/footer');
	}

	//*** Admin Management ***
	public function administrators()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/administrators');
		$this->load->view('admin/common/footer');
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
		/* Connect to the mySQL database - config values can be found at:
      /app/config/database.php */
		$dbconnect = $this->load->database();


		/* Load the database model:
          /app/models/simple_model.php */
		$this->load->model('Service_areas_model');


		/* Create a table if it doesn't exist already */
		//$this->Service_areas_model->create_table();


		/* Call the "insert_item" entry */
		//$this->Service_areas_model->insert_item('Hello from Runnable!');

		/* Retrieve the last item  */
		/*print '<pre>';
		print_r($this->Service_areas_model->get_last_item());
		print '</pre>';*/

		/* Retrieve and print the row count */
		/*$rowcount = $this->Service_areas_model->get_row_count();
		print '<strong>Row count: ' . $rowcount . '</strong>';*/
        

		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/service_areas');
		$this->load->view('admin/common/footer');
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
	}
	public function user_ratings()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user_ratings');
		$this->load->view('admin/common/footer');
	}
	public function user_favourites()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/user_favourites');
		$this->load->view('admin/common/footer');
	}

	//*** Merchant Management ***
	public function merchants()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchants');
		$this->load->view('admin/common/footer');
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
	}
	public function merchant_business_categories()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_business_categories');
		$this->load->view('admin/common/footer');
	}
	public function merchant_notifications()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_notifications');
		$this->load->view('admin/common/footer');
	}
	public function merchant_transactions()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/merchant_transactions');
		$this->load->view('admin/common/footer');
	}

	//*** Offer Management ***
	public function offers()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offers');
		$this->load->view('admin/common/footer');
	}
	public function offer_sub_categories()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offer_sub_categories');
		$this->load->view('admin/common/footer');
	}
	public function offer_image_gallery()
	{
		$this->load->view('admin/common/head');
		$this->load->view('admin/common/side-nav');
		$this->load->view('admin/common/top-bar');
		$this->load->view('admin/offer_image_gallery');
		$this->load->view('admin/common/footer');
	}
}
