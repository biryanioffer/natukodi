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
        $this->load->view('includes/head');
        $this->load->view('index');
    }

    //	*** USER WORKFLOW ***
    public function login()
    {
        $this->load->view('user/login');
        $this->load->view('includes/footer');
        $this->load->view('includes/form-validation-script');
        $this->load->view('includes/template-end');
    }

    public function sign_up()
    {
        if ($this->User_Login_Model->is_logged_in_user()) {
            redirect('app/profile');
        } else {
            $this->load->view('user/signup');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function profile()
    {
        if ($this->User_Login_Model->is_logged_in_user()) {
            //	getting user details...
            $result = $this->User_Registration_Model->get_user($this->session->userdata('id'));
            $this->data['result'] = $result[0];
            //	navigating to user profile page...
            $this->load->view('includes/head');
            $this->load->view('user/profile', $this->data);
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        } else {
            redirect('app/login');
        }
    }
    
    public function update_user_profile(){
        if ($this->User_Login_Model->is_logged_in_user()) {
            $location = explode(",", $_REQUEST['location']);
            /*$mdob = explode("/", $_REQUEST['dob']);
            $udob = $mdob[2] . "-" . $mdob[0] . "-" . $mdob[1];*/
            $data = array(
                "first_name" => $_REQUEST['first_name'],
                "last_name" => $_REQUEST['last_name'],
                "dob" => '2016/06/21',//$_REQUEST['dob'],
                "contact_number" => $_REQUEST['phone_number'],
                "gender" => $_REQUEST['gender'],
                "area" => $location[0],
                //  "landmark" => $REQUEST['landmark'],"zip_code" => $REQUEST['zip_code'],
                "city" => $location[1],
                "state" => $location[2],
                "last_updated" => date('Y-m-d H:i:s'),
            );
            if($this->User_Registration_Model->update_user($this->session->userdata('id'), $data)){
                redirect('app/profile');
            }
            else {
                //  display error message
            }
        }
    } 

    public function favourites()
    {
        if ($this->User_Login_Model->is_logged_in_user()) {
            $this->load->view('includes/head');
            $this->load->view('user/favourites');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function thank_you()
    {
        $this->load->view('includes/head');
        $this->load->view('user/thankYou');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    public function offers()
    {
        $this->load->view('includes/head');
        $this->load->view('offer/results');
        $this->load->view('includes/template-end');
    }

    public function more_details()
    {
        $this->load->view('includes/head');
        $this->load->view('offer/offerMoreDetails');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    //	*** MERCHANT WORKFLOW ***
    public function merchant_login()
    {
        $this->load->view('includes/head');
        $this->load->view('merchant/login');
        $this->load->view('includes/footer');
        $this->load->view('includes/form-validation-script');
        $this->load->view('includes/template-end');
    }

    public function register()
    {
        $this->load->view('includes/head');
        $this->load->view('merchant/registration');
        $this->load->view('includes/footer');
        $this->load->view('includes/form-validation-script');
        $this->load->view('includes/template-end');
    }

    public function merchant_profile()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/profile');
        }
    }

    public function merchant_change_password()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/changePassword');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function offer_post()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('offer/postOffer');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function posts()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/posts');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function wallet()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/wallet');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function branches()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/branches');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function notifications()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/notifications');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function support()
    {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/support');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function merchant_thank_you()
    {
        $this->load->view('includes/head');
        $this->load->view('merchant/thankYou');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    // ***** USER workflow controller functions *****
    public function login_user()
    {
        if ($this->User_Login_Model->verify_user($_REQUEST)) {
            redirect('app/profile');
        } else {
            //$this->session->set_flashdata("email_sent","Email sent successfully.");
            echo "<script>alert('Invalid credentials')</script>";
            //redirect('app/login');
        }
    }

    public function logout()
    {
        $this->User_Login_Model->clear_session_data();
        redirect('app/login');
    }

    /*
     * USER Signup and inserting a new Record into DB
     */
    public function register_user()
    {
        $cnt = $this->User_Registration_Model->user_email_exists($_REQUEST["email"]);
        if ($cnt == 1) {
            echo "1";
        } else {
            $this->User_Registration_Model->save_user($_REQUEST);
            redirect('app/thank_you');
        }
        exit;
    }
    // ***** USER workflow controller functions END *****


    // ***** Merchant workflow controller functions *****
    public function login_merchant()
    {
        if ($this->Merchant_Login_Model->verify_merchant($_REQUEST)) {
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


