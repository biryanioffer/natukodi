<?php
/**
 * Offers model deals with 'offers', 'offer_image_gallery' and 'offer_sub_categories' tables from admincon
 */
class Offers_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) offers from DB
     */
    public function get_offers() {
        $query = $this->db->get('offers');
        return $query->result();
    }

    /**
     * Get a offer info by offer code from DB
     */
    public function get_offer($offer_code) {
        $this->db->where('offer_code', $offer_code);
        $query = $this->db->get('offers');
        return $query->result();
    }

    /**
     * Check offer with the same user name exist in DB
     */
    /*public function is_username_exists($user_name) {
        $this->db->select('merchant_id');
        $this->db->where('user_name', $user_name);
        $query = $this->db->get('merchants');

        return ($query->num_rows() > 0);
    }*/

    /**
     * Inserting new offer into 'offers' table in DB
     */
    public function create_offer($data) {
        return ($this->db->insert("offers", $data));
    }

    /**
     * Update offer in 'offers' table by offer code
     */
    public function update_offer($offer_code, $data) {
        $this->db->where('offer_code', $offer_code);
        return $this->db->update('offers', $data);
    }

    /**
     * Delete selected offer from 'offers' table by offer code
     */
    public function delete_offer($offer_code) {
        $this->db->where('offer_code', $offer_code);
        return ($this->db->delete('offers'));
    }
}