<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends VS_Controller {
    /**
     * Constructor method
     * */
	public function __constructor(){
		parent::__construct();
	}
    /**
     * Page method
     * @functionality will check file exists in views folder
     * @param string @view
     * */
    public function page($view = 'client'){
        $this->data['title'] = ucfirst($view);
        if($this->session->userdata('is_logged_in')){
            $view = 'pages/'.'error';
        }else{
            if(!file_exists(VIEWPATH.'register/'.$view.'.php')){
                $view = 'pages/'.'error';
            }else{$view = 'register/'.$view;}

        }
        $this->data['page'] = $view;
        $this->load->view('includes/content',$this->data);
    }
    /**
     *
     * */
    public function regions(){
        $regions = $this->user_model->get_region($this->data['lang'],$this->input->post('cn_code'));
        echo $this->json($regions);
    }
    /**
     *
     * */
    public function cities(){
        $cities = $this->user_model->get_city($this->data['lang'],$this->input->post('region_code'));
        echo $this->json($cities);
    }
}
