<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deal_model extends VS_Model{
    public function __construct(){
        parent::__construct('deals');
    }
    /**
     *
     * */
    public function get_dials($user_id){
        $result = $this->get_where([
            'deal_for_id'=>$user_id
        ]);

        return $result;
    }
}