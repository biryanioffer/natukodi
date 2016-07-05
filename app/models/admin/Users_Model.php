<?php
/**
 * Users model deals with 'users', 'user_likes', 'user_ratings' and 'user_favourites' tables from admincon
 */
class Users_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) users from DB
     */
    public function get_users() {
        $query = $this->db->get('users');
        return $query->result();
    }

    /**
     * Get a user info by id from DB
     */
    public function get_user($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->result();
    }

    /**
     * Check user with the same email exist in DB
     */
    public function is_email_exists($email) {
        $this->db->select('id');
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new user into 'users' table in DB
     */
    public function create_user($data) {
        return ($this->db->insert("users", $data));
    }

    /**
     * Update user in 'users' table by id
     */
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    /**
     * Delete selected user from 'users' table by id
     */
    public function delete_user($id) {
        $this->db->where('id', $id);
        return ($this->db->delete('users'));
    }
}