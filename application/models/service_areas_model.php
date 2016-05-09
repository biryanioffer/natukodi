<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 01/05/16
 * Time: 2:39 PM
 */
class Service_areas_model extends CI_Model {


    function __construct()
    {
        /* Call the Model constructor */
        parent::__construct();
    }


   /* function get_last_item()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('items', 1);

        return $query->result();
    }


    function insert_item($item)
    {
        $this->item = $item;

        $this->db->insert('items', $this);
    }
*/

    function get_row_count()
    {
         $query = $this->db->query('select state as s from service_areas');


        return $query->row()->s;
    }





}