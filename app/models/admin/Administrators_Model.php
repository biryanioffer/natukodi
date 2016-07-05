<?php
/**
 * Administrators model deals with 'administrators' table from admincon
 */
class Administrators_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) administrators from DB
     */
    public function get_administrators() {
        $query = $this->db->get('administrators');
        return $query->result();
    }

    /**
     * Get a administrator info by id from DB
     */
    public function get_administrator($admin_id) {
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('administrators');
        return $query->result();
    }

    /**
     * Check administrator with the same email address exist in DB
     */
    public function is_email_exists($email) {
        $this->db->select('admin_id');
        $this->db->where('email', $email);
        $query = $this->db->get('administrators');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new admin into 'administrators' table in DB
     */
    public function create_admin($data) {
        return ($this->db->insert("administrators", $data));
    }

    /**
     * Update admin in 'administrators' table by id
     */
    public function update_admin($id, $data) {
        $this->db->where('admin_id', $id);
        return $this->db->update('administrators', $data);
    }

    /**
     * Delete selected admin from 'administrators' table by admin_id
     */
    public function delete_admin($admin_id) {
        $this->db->where('admin_id', $admin_id);
        return ($this->db->delete('administrators'));
    }
}