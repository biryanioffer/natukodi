<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Console extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/console
     *    - or -
     *        http://example.com/console/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
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
        $this->load->model(array('user/User_Registration_Model'));
    }

    public function usersave()
    {
        $cnt = $this->User_Registration_Model->user_email_exists($_REQUEST["email"]);
        if ($cnt == 1) {
            echo "1";
        } else {
            $this->User_Registration_Model->save_user($_REQUEST);

            /*$this->load->view('user/thankYou');
            echo '<div class="col-md-12 col-sm-12" ><label style="color:green">Your are  successfully registered.
Activation link has been sent to your email.</label>             
            </div>';*/
        }
        exit;
    }

    public function merchantsave()
    {
        $cnt = $this->User_Registration_Model->email_exists($_REQUEST["email"]);
        $cnt2 = $this->User_Registration_Model->username_exists($_REQUEST["email"]);
        if ($cnt == 1) {
            echo "1";
        } else if ($cnt2 == 1) {
            echo "3";
        } else {
            $this->User_Registration_Model->save_merchant($_REQUEST);
            echo '<div class="col-md-12 col-sm-12" ><label style="color:green">Your are  successfully registered.
Admin Approval Pending.</label>             
            </div>';
        }
        exit;
    }

    public function validate()
    {
        $this->form_validation->set_rules('email', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
        if ($this->form_validation->run() == FALSE) {
            redirect('console/merchant_login');
        } else {
            redirect('console/merchant_profile');
        }
    }

    public function validateuser()
    {
        $this->form_validation->set_rules('email', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database_user');
        if ($this->form_validation->run() == FALSE) {
            redirect('console/login');
        } else {
            redirect('console/profile');
        }
    }

    public function check_database_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where('email', $email);
        $this->db->where('password', $password);        // Run the query
        $query = $this->db->get('users');
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

    public function check_database()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where('email', $email);
        $this->db->where('password', $password);        // Run the query
        $query = $this->db->get('merchants');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            # echo "<pre>"; print_r($row); exit;
            $data = array(
                'merchant_id' => $row->merchant_id,
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
        $this->load->view('user/user_profile');
    }

    public function user_change_password()
    {
        $this->load->view('user/changepassword');
    }

    public function favourites()
    {
        $this->load->view('user/favourites');
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
