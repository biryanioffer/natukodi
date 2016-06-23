<?php
/**
 * Users model here for getting roles and data
 */
class User_Registration_Model extends Main_Model
{
    /**
     * Verifying if any other user exist with the same email address
     */
    public function user_email_exists($email)
    {
        $this->db->select('id');
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        return ($query->num_rows() > 0);
    }

    /**
     * Get user details
     * @params user_id
     * returns user object
     */
    public function get_user($id)
    {
        $query = $this->db->query("select * from users where id='$id'");
        return $query->result();
    }

    /**
     * Update user profile
     * @params $REQUEST
     * returns boolean
     */
    public function update_user($id, $data)
    {
        $this->db->set($data);
        $this->db->where("id", $id);
        return $this->db->update("users", $data);
    }

    /**
     * Inserting new user into user table
     */
    public function save_user($REQUEST)
    {
        $location = explode(",", $REQUEST['googleLocation']);
        $mdob = explode("/", $REQUEST['dob']);
        $udob = $mdob[2] . "-" . $mdob[0] . "-" . $mdob[1];
        //print_r($location);
        $data = array(
            "title" => $REQUEST['user_title'],
            "first_name" => $REQUEST['first_name'],
            "last_name" => $REQUEST['last_name'],
            "dob" => $REQUEST['dob'],
            "contact_number" => $REQUEST['contact_number'],
            "email" => $REQUEST['email'],
            "password" => $REQUEST['password'],
            "gender" => $REQUEST['gender'],
            "area" => $location[0],
            //  "landmark" => $REQUEST['landmark'],"zip_code" => $REQUEST['zip_code'],
            "city" => $location[1],
            "state" => $location[2],

            "created_date" => date('Y-m-d H:i:s'),
            "last_updated" => date('Y-m-d H:i:s'),
            "status" => 1
        );
        if ($this->db->insert("users", $data)) {
            redirect('index.php/console/thank_you');
        }
        return 1;
    }
}