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

        $this->load->model(array('user/User_Login_Model', 'user/User_Registration_Model'));
        $this->load->model(array('merchant/Merchant_Login_Model', 'merchant/Merchant_Registration_Model'));
    }

    /**
     * Global method to notify users error/warning/info messages based on type
     */
    public function notify($msg, $type='info') {
        echo $msg;
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
    
    // ---- URIs -----
    public function index() {
        $this->load->view('includes/head');
        $this->load->view('index');
    }

    //	*** USER WORKFLOW ***
    public function login() {
        if ($this->User_Login_Model->is_logged_in_user()) {
            redirect('app/index');
        } else {
            $this->load->view('includes/head');
            $this->load->view('user/login');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function sign_up() {
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

    public function update_user_profile()
    {
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
            if ($this->User_Registration_Model->update_user($this->session->userdata('id'), $data)) {
                $this->notify('Your profile updated successfully!', 'success');
                redirect('app/profile');
            } else {
                $this->notify('Your profile cannot be updated!', 'danger');
            }
        }
    }

    /*
     * Navigate to change password page
     */
    public function change_password()
    {
        if ($this->User_Login_Model->is_logged_in_user()) {
            //	to display user name in the page...
            $this->data['user_name'] = $this->session->userdata('first_name') . " " . $this->session->userdata('last_name');
            //	navigating user to change password page...
            $this->load->view('includes/head');
            $this->load->view('user/change_password', $this->data);
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        } else {
            redirect('app/login');
        }
    }

    /*
     * Updates user password into the DB...
     */
    public function update_password()
    {
        if ($this->User_Login_Model->is_logged_in_user()) {
            $current_password = $_REQUEST['current-password'];
            $new_password = $_REQUEST['new-password'];

            if ($current_password == $new_password) {
                $this->notify('New password should not equals to current password!', 'warning');
                //redirect('app/change_password');
                exit;
            }
            if ($current_password != $this->session->userdata('password')) {
                $this->notify('Invalid Current password!', 'danger');
                //redirect('app/change_password');
                exit;
            };
            $data = array(
                "password" => $new_password,
                "last_updated" => date('Y-m-d H:i:s')
            );
            if ($this->User_Registration_Model->update_user($this->session->userdata('id'), $data)) {
                $this->session->set_userdata('password', $new_password);
                $this->notify('Your password updated successfully!', 'success');
                //redirect('app/change_password');
            } else {
                $this->notify('Your password cannot be updated!', 'danger');
                //redirect('app/change_password');
            }
        }
    }

    //	*** Forgot Password and Reset Link to Email ***
    public function send_reset_link() {
        $email = $this->input->post('emailid');
        $this->data['flash'] = '';
        if ($_POST) {
            $query = $this->db->query("select * from users where email='$email'");
            //$query->result();
            $num = count($query->result());
            $to = $email;
            if ($num > 0) {
                $subject = "Forgot Password";
                $message = " 
				 <table width='100%'>	
					<tr>
						<th><img src='http://dev.offerciti.com/app/assets/images/offerciti-logo.png'></th>
					</tr>			 
					<tr>
						<th>Please click the below link to Reset Your Offerciti Password: </th>
					</tr>
						<th><strong><a href='http://dev.offerciti.com/console/user_new_password?email=$to'>Click Here</a></strong> </th>
					</tr>
				</table> ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: ' . "info@offerciti.com<Offer Citi>" . "\r\n";
                if (mail($to, $subject, $message, $headers)) {
                    $this->notify('Email sent to your email address!');
                   // redirect('app/login');
                } else {
                    $this->notify('Email cannot be send!');
                }
            } else {
                $this->notify('Email address not found!');
            }
        }
        //redirect('app/login');
    }

    /*
     * Reset New Password when user Click on Forgot password mail
     */
    public function create_password() {
        $email = $this->input->post('email');
        //$this->db->where('id', $id);
        // Run the query
        // $this->data['result'] = $this->db->get('');
        $query = $this->db->query("select * from users where email='$email'");
        $this->data['result'] = $query->result();
        if ($_POST) {
            //$cps=$this->input->post('cps');
            $ncps = $this->input->post('ncps');
            $cncps = $this->input->post('cncps');
            if ($ncps == $cncps) {
                //$query = $this->db->query("update users  set password='$ncps' where  email='$email'");
                $this->notify('Password updated successfully!');
            } else {
                $this->notify('New password and confirm password are does not match');
            }
        }
        redirect('app/new_password');
    }

    public function new_password() {
        if ($this->User_Login_Model->is_logged_in_user()) {
            $this->load->view('includes/head');
            $this->load->view('user/newpassword');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function favourites() {
        if ($this->User_Login_Model->is_logged_in_user()) {
            $this->load->view('includes/head');
            $this->load->view('user/favourites');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function thank_you() {
        $this->load->view('includes/head');
        $this->load->view('user/thankYou');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    public function offers() {
        $this->load->view('includes/head');
        $this->load->view('offer/results');
        $this->load->view('includes/template-end');
    }

    public function more_details() {
        $this->load->view('includes/head');
        $this->load->view('offer/offerMoreDetails');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    //	*** MERCHANT WORKFLOW ***
    public function merchant_login() {
        $this->load->view('includes/head');
        $this->load->view('merchant/login');
        $this->load->view('includes/footer');
        $this->load->view('includes/form-validation-script');
        $this->load->view('includes/template-end');
    }

    public function register() {
        $this->load->view('includes/head');
        $this->load->view('merchant/registration');
        $this->load->view('includes/footer');
        $this->load->view('includes/form-validation-script');
        $this->load->view('includes/template-end');
    }

    public function merchant_profile() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/profile');
        }
    }

    public function merchant_change_password() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/changePassword');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function offer_post() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('offer/postOffer');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function posts() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/posts');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function wallet() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/wallet');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function branches() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/branches');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function notifications() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/notifications');
            $this->load->view('includes/footer');
            $this->load->view('includes/template-end');
        }
    }

    public function support() {
        if ($this->Merchant_Login_Model->is_logged_in_merchant()) {
            $this->load->view('includes/head');
            $this->load->view('merchant/support');
            $this->load->view('includes/footer');
            $this->load->view('includes/form-validation-script');
            $this->load->view('includes/template-end');
        }
    }

    public function merchant_thank_you() {
        $this->load->view('includes/head');
        $this->load->view('merchant/thankYou');
        $this->load->view('includes/footer');
        $this->load->view('includes/template-end');
    }

    // ***** USER workflow controller functions *****
    public function login_user() {
        if ($this->User_Login_Model->verify_user($_REQUEST)) {
            redirect('app/profile');
        } else {
            $this->notify('Invalid credentials...', 'danger');
            //redirect('app/login');
        }
    }

    public function logout() {
        $this->User_Login_Model->clear_session_data();
        redirect('app/login');
    }

    /*
     * USER Signup and inserting a new Record into DB
     */
    public function register_user() {
        if ($this->User_Registration_Model->user_email_exists($_REQUEST["email"])) {
            $this->notify('Email already exist!');
            exit;
        } else {
            if ($this->User_Registration_Model->save_user($_REQUEST)) {
                redirect('app/thank_you');
            } else {
                $this->notify('Error, please contact administrator!');
            }
        }
    }
    // ***** USER workflow controller functions END *****


    // ***** Merchant workflow controller functions *****
    public function login_merchant() {
        if ($this->Merchant_Login_Model->verify_merchant($_REQUEST)) {
            redirect('app/merchant_profile');
        } else {
            $this->notify('Invalid credentials', 'danger');
            redirect('app/merchant_login');
        }
    }

    public function logout_merchant() {
        $this->Merchant_Login_Model->clear_session_data();
        redirect('app/merchant_login');
    }
    // ***** Merchant workflow controller functions END *****

}


