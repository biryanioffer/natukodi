<?php
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 08/06/16
 * Time: 4:48 PM
 */
class Main_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
}