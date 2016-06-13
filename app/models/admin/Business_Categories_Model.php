<?php

/**
 * Users model here for getting roles and data
 */
class Business_Categories_Model extends Admin_Main_Model
{
    // --- Get all categories from DB ---
    public function get_categories()
    {
        $this->db->select('category_id', 'category_name', 'status', 'created_date');
        $query = $this->db->get('business_categories');

        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
        redirect('admin/categories');
    }

    // --- Verify whether category name already exist in DB ---
    public function is_category_exists($category_name)
    {
        $this->db->select('category_id');
        $this->db->where('category_name', $category_name);
        $query = $this->db->get('business_categories');

        return ($query->num_rows() > 0);
    }

    // --- Inserting new category into 'business_categories' table in DB ---
    public function create_category($REQUEST)
    {
        if(!$this->is_category_exists($REQUEST['category-name'])){
            $data = array(
                "category_name" => $REQUEST['category-name'],
                "status" => 1,
                "created_date" => date('Y-m-d H:i:s')
            );
            return ($this->db->insert("business_categories", $data));
        } else {
            echo "<script>alert('Category with same name already exist!')</script>";
            return false;
        }
    }

    public function update_category($REQUEST)
    {
        if(!$this->is_category_exists($REQUEST['category-name'])){
            $data = array(
                "category_name" => $REQUEST['category-name'],
                "status" => 1,
                "created_date" => date('Y-m-d H:i:s')
            );
            return ($this->db->insert("business_categories", $data));
        } else {
            echo "<script>alert('Category with same name already exist!')</script>";
            return false;
        }
    }
}