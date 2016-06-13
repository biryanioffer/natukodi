<?php

/**
 * Login model holds all all login and logout methods 
 */
class Login_Model extends Admin_Main_Model
{
    public function verify_admin($REQUEST)
    {
        $this->db->where('user_name', $REQUEST['username']);
        $this->db->where('password', $REQUEST['password']);
        $query = $this->db->get('administrators');
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
        } else {
            // If the previous process did not validate
            // then return false.
            //$this->form_validation->set_message('check_database', 'Please check your login credentials.');
            return false;
        }
    }

    public function is_logged_in_admin()
    {
        if($this->session->userdata('email') == ''){
            header("Location:index");
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