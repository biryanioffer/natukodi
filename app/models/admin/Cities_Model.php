<?php
/**
 * Cities model deals with 'cities' table from admincon
 */
class Cities_Model extends Main_Model
{
    /**
     * Get all (both Active & Inactive) cities from DB
     */
    public function get_cities() {
        $query = $this->db->get('cities');
        return $query->result();
    }

    /**
     * Get a city info by id from DB
     */
    public function get_city($id) {
        $this->db->where('city_id', $id);
        $query = $this->db->get('cities');
        return $query->result();
    }

    /**
     * Check city with the same name exist in DB
     */
    public function is_exists($name) {
        $this->db->select('city_id');
        $this->db->where('city', $name);
        $query = $this->db->get('cities');

        return ($query->num_rows() > 0);
    }

    /**
     * Inserting new city into 'cities' table in DB
     */
    public function create_city($data) {
        return ($this->db->insert("cities", $data));
    }

    /**
     * Update city in 'cities' table by id
     */
    public function update_city($id, $data) {
        $this->db->where('city_id', $id);
        return $this->db->update('cities', $data);
    }

    /**
     * Delete selected city from 'cities' table by id
     */
    public function delete_city($id) {
        $this->db->where('city_id', $id);
        return ($this->db->delete('cities'));
    }
}