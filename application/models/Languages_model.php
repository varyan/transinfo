<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Languages_model extends VS_Model{
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct('languages');
    }
}