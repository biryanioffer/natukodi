<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 * This class contains login, store loggedin merchant data in session & clear session methods belongs to merchant
 */
class Merchant_Login_Model extends Main_Model
{
    /*
     * Verify merchant is registered earlier or not
     * If he is registered merchant, then store his info into session and return true
     * Else return false
     */
    public function verify_merchant($REQUEST)
    {
        $this->db->where('user_name', $REQUEST['username']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('merchants');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'id' => $row->id,
                'name' => $row->business_name,
                'email' => $row->email,
                'login' => true,
                'isMerchant' => true
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    /*
     * Verify whether merchant is logged in already or not
     * If yes, return true
     * Else navigate him to login page and return false
     */
    public function is_logged_in_merchant()
    {
        if($this->session->userdata('login') && $this->session->userdata('isMerchant')){
            return true;
        }else{
            header("Location:merchant_login");
            return false;
        }
    }

    /*
     * Clear all the session data, when merchant logout
     */
    public function clear_session_data()
    {
        $session_data = array('id' => '', 'name' => '', 'email' => '', 'login' => false, 'isMerchant' => false);
        $this->session->unset_userdata($session_data);
        session_unset();
    }
}