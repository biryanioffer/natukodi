<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 30/06/16
 * Time: 9:47 AM
 */
class OC_Main_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model(array('Main_Model'));
        // $this->base_url('assets/admin/js/pages/notificationService.js');
    }

    /**
     * Global method to notify users error/warning/info messages based on type
     */
    public function notify($msg, $type='info') {
        echo $msg;
        //echo "<script>alert('Error occured, please contact administrator...')</script>";
        /*@TODO: display notification instead alert...
         * echo "<script src=\"assets/admin/js/plugins.js\"></script>
        <script>$.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>msg</p>', {
                type: 'warning',
                delay: 3000,
                allow_dismiss: true,
                offset: {from: 'top', amount: 20}
            });</script>";*/
    }
}