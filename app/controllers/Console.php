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



    public function user_save()

    {

        $cnt = $this->User_Registration_Model->user_email_exists($_REQUEST["email"]);

        if ($cnt == 1) {

            echo "1";

        } else {

            $this->User_Registration_Model->save_user($_REQUEST);

             redirect('index.php/console/thank_you');
 

        }

        exit;

    }



    public function merchant_save()

    {

        $cnt = $this->User_Registration_Model->email_exists($_REQUEST["email"]);

        $cnt2 = $this->User_Registration_Model->username_exists($_REQUEST["email"]);

        if ($cnt == 1) {

            echo "1";

        } else if ($cnt2 == 1) {

            echo "3";

        } else {

            $this->User_Registration_Model->save_merchant($_REQUEST);

            echo '<div class="col-md-12 col-sm-12" ><label style="color:green">Your are successfully registered.

Admin Approval Pending.</label>             

            </div>';

        }

        exit;

    }



    public function validate_merchant()

    {

        $this->form_validation->set_rules('email', 'Username', 'trim|required');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {

            redirect('console/merchant_login');

        } else {

            redirect('console/merchant_profile');

        }

    }



    public function validate_user()

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
 public function logout()

    { 
			unset($_SESSION['email']);
            $this->session->unset_userdata('email');

            $this->load->view('user/login');

    }

public function forgotpassword()

    {

         $email=$this->input->post('emailid');

		$this->data['flash']='';

		if($_POST)

		{

        $query = $this->db->query("select  * from users where email='$email'");

	    $query->result();

		$num=count($query->result());

		$to=$email;	

		 if ($num > 0) {
		$subject = "Forgot Password";			
			 $message =" 
			 <table width='100%'>	
				<tr>
					<th><img src='http://dev.offerciti.com/app/assets/images/offerciti-logo.png'></th>
				</tr>			 
				<tr>
					<th>Please click the below link to Reset Your Offerciti  Password: </th>
				</tr>
					<th><strong><a href='http://dev.offerciti.com/console/user_new_password?email=$to'>Click Here</a></strong> </th>
				</tr>
			</table> ";		

			$headers = "MIME-Version: 1.0" . "\r\n";

			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers

			$headers .= 'From: '."   " . "\r\n";

		if(mail($to,$subject,$message,$headers)){

			 // echo 'Thank you !';

			 $this->data['flash']="Email Sent to your Email-id";

			 $this->load->view('user/login', $this->data);

			 	  echo "<script>alert('Email Sent Successfully')</script>";

			}

			else{

			  //echo 'Try again !'; 

			  echo "<script>alert('Email Sent Successfully')</script>";

			}

		

		 }

		 else

		 {

			 $this->data['flash']="Email-Id Not in our records.";

			 

		 }

		}

		  $this->load->view('user/login', $this->data);

    }

	

    public function sign_up()

    {

        $this->load->view('user/signup');

    }



    public function profile()

    {

		$id=$this->session->userdata('id');

		//$this->db->where('id', $id);

        // Run the query

       // $this->data['result'] = $this->db->get('');

	 

		 $query =$this->db->query("select * from users where id='$id'");

		$this->data['result']=$query->result();

		

		if($_POST)

		{
		 
			$location=explode(",",$_POST['landmark']);
				$area= $location[0];
				$city= $location[1];
				$state=$location[2];
			$dob=$this->input->post('dob');

			if($this->data['result'][0]->dob!=$dob)
			{
			$mdob=explode("/",$dob);
			$udob=$mdob[2]."-".$mdob[0]."-".$mdob[1];
			}
			else
			{
			$udob=$dob;	
			}
		 
			$gender=$this->input->post('gender');
			$phone=$this->input->post('phone');
			$query = $this->db->query("update users set area='$area',city='$city',state='$state',contact_number='$phone',dob='$udob',gender='$gender' where  id='$id' ");

		echo "<script>alert('Profile Updated Successfuly')</script>";

		}

		 $query =$this->db->query("select * from users where id='$id'");

		$this->data['result']=$query->result();

        $this->load->view('user/user_profile',$this->data);

		

    }



    public function user_change_password()

    {

			$id=$this->session->userdata('id');

		 //$this->db->where('id', $id);

        // Run the query

       // $this->data['result'] = $this->db->get('');

	 

		$query =$this->db->query("select * from users where id='$id'");

		$this->data['result']=$query->result();

		

		

		if($_POST)

		{

			$dbpassword=$this->data['result'][0]->password;

			$cps=$this->input->post('cps');

			$ncps=$this->input->post('ncps');

			$cncps=$this->input->post('cncps');

			if($ncps==$cncps)

			{

			if($dbpassword==$cps)

			{

			$query = $this->db->query("update users  set password='$ncps' where  id='$id'");

				echo "<script>alert('Password Change Successfully')</script>";

			}

			else

			{

				echo "<script>alert('Old Password is not match')</script>";

			}

			}

			else

			{

				echo "<script>alert('New password and confirm password are does not match')</script>";

			}

			

		}

		

		

        $this->load->view('user/changepassword',$this->data);

    }



	public function user_new_password()

    {

			$email=$this->input->post('email');

		 //$this->db->where('id', $id);

        // Run the query

       // $this->data['result'] = $this->db->get('');

	 

		$query =$this->db->query("select * from users where email='$email'");

		$this->data['result']=$query->result();

		

		

		if($_POST)

		{

			

			//$cps=$this->input->post('cps');

			$ncps=$this->input->post('ncps');

			$cncps=$this->input->post('cncps');

			if($ncps==$cncps)

			{

		

			$query = $this->db->query("update users  set password='$ncps' where  email='$email'");

				echo "<script>alert('Password Change Successfully')</script>";

				?>
<script> window.location.href = "<?php echo site_url('console/profile'); ?>";</script>
;
<?php

			

			}

			else

			{

				echo "<script>alert('New password and confirm password are does not match')</script>";

			}

			

		}

		

		

        $this->load->view('user/newpassword');

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


