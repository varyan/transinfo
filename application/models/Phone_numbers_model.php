<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone_numbers_model extends VS_Model{
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct('phone_numbers');
    }
}