<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cargo extends VS_Controller{
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct();
        if(!$this->data['auth']) redirect (base_url($this->data['lang']));
        $this->collect_date();
    }
    /**
     * Get cargo method
     * @param integer $id
     * */
    public function get($id){
        $this->data['page'] = 'cargo/index';

        $this->data['title'] = 'Cargo';
        $this->data['cargo_info'] = $this->cargo_model->get($id)[0];
        $this->load->view('includes/content',$this->data);
    }
    /**
     * Collect data method
     * */
    private function collect_date(){
        $this->load->model('cargo_model');

        $this->data['deals'] = function($cargo_id){
            return $this->cargo_model->get_where([
                'deal_item_id'=>$cargo_id,
                'deal_for_id'=>$this->data['user']->id
            ],'deal_created_at,deal_sum','deals');
        };
        $this->data['user_find_id'] = $this->session->userdata('id_find');
    }
}