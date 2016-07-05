<?php
/**
 * Business Categories model deals with both 'business_categories' and 'business_sub_categories' tables from admincon
 */
class Business_Categories_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) categories from DB
     */
    public function get_categories() {
        //$this->db->select('category_id, category_name, status, created_date');
        $query = $this->db->get('business_categories');
        return $query->result();
    }

    /**
     * Get a category info by category_id from DB
     */
    public function get_category($id) {
        //$this->db->select('category_id, category_name, status, created_date');
        $this->db->where('category_id', $id);
        $query = $this->db->get('business_categories');
        return $query->result();
    }

    /**
     * Check category with the same name exist in DB
     */
    public function is_category_exists($category_name) {
        $this->db->select('category_id');
        $this->db->where('category_name', $category_name);
        $query = $this->db->get('business_categories');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new category into 'business_categories' table in DB
     */
    public function create_category($data) {
        return ($this->db->insert("business_categories", $data));
    }

    /**
     * Update category in 'business_categories' table by 'category_id'
     */
    public function update_category($id, $data) {
        $this->db->where('category_id', $id);
        return $this->db->update('business_categories', $data);
    }

    /**
     * Function to Delete selected category from 'business_categories' table by 'category_id'
     */
    public function delete_category($id) {
        $this->db->where('category_id', $id);
        return ($this->db->delete('business_categories'));
    }
}