<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LangSwitch extends CI_Controller{
    /**
     * Constructor method
     * @default load url helper
     * */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    /**
     * Change function
     * @functionality will change language parameter and redirect to current page
     * @param string $lang
     * */
    public function change($lang = "ru") {
        $lang = ($lang != "") ? $lang : "ru";
        $this->session->set_userdata('lang',$lang);
        redirect(base_url($lang.$this->session->userdata('curr_url')));
    }
}