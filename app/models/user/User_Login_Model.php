<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 * Login model holds all login and logout methods belongs to user
 */
class User_Login_Model extends Main_Model
{
    public function verify_user($REQUEST)
    {
        $this->db->where('email', $REQUEST['email']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('users');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            # echo "<pre>"; print_r($row); exit;
            $data = array(
                'id' => $row->id,
                'email' => $row->email,
                'Login' => TRUE,
                'isMerchant' => 0
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            // If the previous process did not validate
            // then return false.
            //$this->form_validation->set_message('check_database', 'Please check your login credentials.');
            return false;
        }
    }

    public function is_logged_in_user()
    {
        if($this->session->userdata('email') == ''){
            header("Location:login");
            return false;
        }else{
            return true;
        }
    }

    public function clear_session_data()
    {
        $session_data = array('id' => '', 'email' => '', 'Login' => '');
        $this->session->unset_userdata($session_data);
        session_unset();
    }
}