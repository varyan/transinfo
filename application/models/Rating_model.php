<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating_model extends VS_Model{
    /**
     * Rate types array
     * */
    private $rate_types = array(
        'cl_cargo_type',
        'cl_cargo_weight',
        'cl_load_days',
        'cl_unload_days',
        'cl_payments',
    );
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct('ratings');
    }
    /**
     * Get rate types method
     * @return array
     * */
    public function get_rate_types(){
        return $this->rate_types;
    }
}