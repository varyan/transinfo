<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends VS_Controller {
	/**
	 * Constructor method
	 * */
	public function __construct(){
		parent::__construct();
		$this->session->set_userdata('form_valid',null);
	}
	/**
	 * Page method
	 * @functionality will check file exists in views folder
	 * @param string $view
	 * */
	public function page($view = 'home'){

		$view = ($view === 'index') ? 'pages/home' : 'pages/'.$view;

		if(!file_exists(VIEWPATH.$view.'.php')){
			$view = 'pages/'.'error';
		}

		$this->data['page'] = $view;
		$this->data['title'] = ucfirst($view);

		$this->load->view('includes/content',$this->data);
	}
}
