<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 * This class contains login, store loggedin administrators data in session & clear session methods belongs to administrators
 */
class Login_Model extends Main_Model
{
    /*
     * Verify admin credentials in DB
     * If his credentials are correct, then store his info into session and return true
     * Else return false
     */
    public function verify_admin($REQUEST)
    {
        $this->db->where('user_name', $REQUEST['username']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('administrators');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'id' => $row->id,
                'email' => $row->email,
                'adminLogin' => true
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    /*
     * Verify whether admin is logged in already or not
     * If yes, return true
     * Else navigate him to login page and return false
     */
    public function is_logged_in_admin()
    {
        if ($this->session->userdata('adminLogin')) {
            return true;
        } else {
            header("Location:index");
            return false;
        }
    }

    /*
     * Clear all the session data, when admin logout
     */
    public function clear_session_data()
    {
        $session_data = array('id' => '', 'email' => '', 'adminLogin' => false);
        $this->session->unset_userdata($session_data);
        session_unset();
    }
}