<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 * This class contains login, store loggedin user data in session & clear session methods belongs to end user
 */
class User_Login_Model extends Main_Model
{
    /*
     * Verify user is registered earlier or not
     * If he is registered user, then store his info into session and return true
     * Else return false
     */
    public function verify_user($REQUEST)
    {
        $this->db->where('email', $REQUEST['email']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('users');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'id' => $row->id,
                'name' => $row->first_name,
                'email' => $row->email,
                'login' => true
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    /*
     * Verify whether user is logged in already or not
     * If yes, return true
     * Else return false
     */
    public function is_logged_in_user()
    {
        return $this->session->userdata('login');
    }

    /*
     * Clear all the session data, when user logout
     */
    public function clear_session_data()
    {
        $session_data = array('id' => '', 'name' => '', 'email' => '', 'login' => false);
        $this->session->unset_userdata($session_data);
        session_unset();

        //  Closing connection
        //$this->db->close();
    }
}