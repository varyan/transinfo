<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Rating extends VS_Controller{
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct();
        $this->load->model('rating_model');
    }
    /**
     * Get method
     * @param integer $id
     * */
    public function get($id){
        $this->data['page'] = 'rating/index';
        $this->data['title'] = 'Rating';

        $this->data['rate_info'] = $this->rating_model->get_where([
            'ratings.to_id'=>$id,
        ]);

        $this->load->view('includes/content',$this->data);
    }

}