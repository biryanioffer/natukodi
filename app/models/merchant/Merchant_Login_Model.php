<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 * Login model holds all login and logout methods belongs to merchant
 */
class Merchant_Login_Model extends Main_Model
{
    public function verify_merchant($REQUEST)
    {
        $this->db->where('user_name', $REQUEST['username']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('merchants');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            # echo "<pre>"; print_r($row); exit;
            $data = array(
                'id' => $row->id,
                'email' => $row->email,
                'Login' => TRUE,
                'isMerchant' => 1
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

    public function is_logged_in_merchant()
    {
        if($this->session->userdata('isMerchant')){
            return true;
        }else{
            header("Location:merchant_login");
            return false;
        }
    }

    public function clear_session_data()
    {
        $session_data = array('id' => '', 'email' => '', 'Login' => '');
        $this->session->unset_userdata($session_data);
        session_unset();
    }
}