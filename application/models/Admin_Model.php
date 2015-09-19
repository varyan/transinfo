<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends VS_Model{
    /**
     * Constructor witch will get all bootstrap functions from VS_Model
     * Set table name in constructor method
     * */
    public function __construct(){
        parent::__construct('users');
    }
}