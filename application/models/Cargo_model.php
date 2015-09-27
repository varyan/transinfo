<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends VS_Model{
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct('cargo');
    }

    public function get_cargo_deals_client($cargo_id){
        return $this->get_where([
            'deal_for_id'=>$this->session->userdata('user')->id,
            'deal_item_id'=>$cargo_id
        ],'deal_sender_id,deal_created_at,deal_sum','deals');
    }

    public function get_cargo_deals_transport($cargo_id){
        return $this->get_where([
            'deal_sender_id'=>$this->session->userdata('user')->id,
            'deal_item_id'=>$cargo_id
        ],'deal_for_id,deal_created_at,deal_sum','deals');
    }
}