<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends VS_Controller {
	/**
	 * Constructor method
	 * */
	public function __construct(){
		parent::__construct();
		if(!$this->data['auth']){redirect(base_url().$this->data['lang']);}
	}
	/**
	 * Page method
	 * @functionality will check file exists in views folder
	 * @param string $view
	 * */
	public function page($view = 'profile'){
		$view = ($view === 'index') ? 'user/profile' : 'user/'.$view;

		if(!file_exists(VIEWPATH.$view.'.php')){
			$view = 'pages/'.'error';
		}

		$this->data_collect();

		$this->data['page'] = $view;
		$this->data['title'] = ucfirst($view);

		$this->load->view('includes/content',$this->data);
	}
	/**
	 * Data collect method
	 * @functionality will collect all needed data for user
	 * */
	private function data_collect(){
        $this->load->model('cargo_model');
        $this->data['cargoes'] = ($this->data['user']->type_id == 2)
            ? $this->cargo_model->get()
            : $this->cargo_model->join_where([
                    ['deals','deal_for_id = user_id and deal_item_id=cargo.id'],
                ],
                ['user_id'=>$this->data['user']->id,]
            );

		$this->load->model('user_model');
        $this->data['get_by_id'] = function($id){
            $this->session->set_userdata('id_find',$id);
            return $this->user_model->get_by_id($id);
        };
		$this->data['user_rate'] = $this->user_model->get_where([
			'to_id'=>$this->data['user']->id
		],'*','ratings');
		$this->data['user_get'] = function($id,$table,$rows = '*'){
			return $this->user_model->get_where([
				'user_id'=>$id
			],$rows,$table);
		};
	}
}
