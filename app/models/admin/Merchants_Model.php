<?php
/**
 * Merchants model deals with 'merchants', 'merchant_branches', 'merchant_business_categories', 'merchant_notifications' and 'merchant_transactions' tables from admincon
 */
class Merchants_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) merchants from DB
     */
    public function get_merchants() {
        $query = $this->db->get('merchants');
        return $query->result();
    }

    /**
     * Get a merchant info by id from DB
     */
    public function get_merchant($id) {
        $this->db->where('merchant_id', $id);
        $query = $this->db->get('merchants');
        return $query->result();
    }

    /**
     * Check merchant with the same user name exist in DB
     */
    public function is_username_exists($user_name) {
        $this->db->select('merchant_id');
        $this->db->where('user_name', $user_name);
        $query = $this->db->get('merchants');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new merchant into 'merchants' table in DB
     */
    public function create_merchant($data) {
        return ($this->db->insert("merchants", $data));
    }

    /**
     * Update merchant in 'merchants' table by id
     */
    public function update_merchant($id, $data) {
        $this->db->where('merchant_id', $id);
        return $this->db->update('merchants', $data);
    }

    /**
     * Delete selected merchant from 'merchants' table by id
     */
    public function delete_merchant($id) {
        $this->db->where('merchant_id', $id);
        return ($this->db->delete('merchants'));
    }
}