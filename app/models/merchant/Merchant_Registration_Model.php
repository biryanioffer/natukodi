<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 17/06/16
 * Time: 3:45 PM
 */
class Merchant_Registration_Model extends Main_Model
{
    /**
     * Verifying if any other merchant exist with the same email address
     */
    public function email_exists($email)
    {
        $this->db->select('merchant_id');
        $this->db->where('email', $email);
        $query = $this->db->get('merchants');

        return ($query->num_rows() > 0);
    }

    /**
     * Verifying if any other merchant exist with the same username which is unique
     */
    public function username_exists($user_name)
    {
        $this->db->select('merchant_id');
        $this->db->where('user_name', $user_name);
        $query = $this->db->get('merchants');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new merchant into merchants table
     */
    public function save_merchant($REQUEST)
    {
        $data = array(
            "email" => $REQUEST['email'],
            "user_name" => $REQUEST['username'],
            "first_name" => $REQUEST['first_name'],
            "last_name" => $REQUEST['last_name'],
            "password" => $REQUEST['password'],
            "business_name" => $REQUEST['storename'],
            "last_updated" => date('Y-m-d H:i:s')
        );

        $this->db->insert("merchants", $data);
        return 1;
    }
}