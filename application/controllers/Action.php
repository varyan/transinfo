<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends VS_Controller {
	/**
	 * @var array $types
	 * @functionality has saved user types
	 * */
	private $types = array(0 => 'admin', 1 => 'client', 2 => 'transport');
	/**
	 * Constructor method
	 * */
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	/**
	 * Register method
	 * @param integer $type
	 * */
	public function register($type){

		if($type == 'registered'){$this->registered();}

		$data = null;

        $rules = $this->user_model->get_validation_prototype();
        $validation = $this->validation([
            'username'  =>$this->data['system_title']['username'],
            'password'  =>$this->data['system_title']['password'],
            'confirm'   =>$this->data['system_title']['confirm_pass'],
            'email'     =>$this->data['system_title']['email'],
        ],$rules);

		if(!$validation){
			$data = $this->session->set_flashdata('error',validation_errors());
			$this->session->set_userdata('form_valid',$this->input->post());
			redirect(base_url($this->session->userdata('lang').'/register/'.$this->types[$type]));
		}else {
			$data = $this->insert_collect($type);
			if($type == 2){
				if(!$this->validate([
					['s_h_car',		$this->data['system_title']['s_h_car'],		'trim|required]'],
					['mark',		$this->data['system_title']['mark'],		'trim|required]'],
				])){
					$data = $this->session->set_flashdata('error',validation_errors());
					$this->session->set_userdata('form_valid',$_POST);
					redirect(base_url($this->session->userdata('lang').'/register/'.$this->types[$type]));
				}else{
					$data['tractor_info'] = array(

					);
					$data['trailer_info'] = array(

					);
				}
			}
		}

		$user_id = $this->user_model->insert($data['user'],'users');

		if($user_id){
			$data['user_info']['user_id'] = $user_id;
			$insert = $this->user_model->insert($data['user_info'],'user_info');
			if($insert){
				$mobiles = $this->input->post('mobile_phone_number');
				$data['phone_numbers'][0]['user_id'] = $user_id;
				$insert = $this->user_model->insert($data['phone_numbers'][0],'phone_numbers');
				if($insert){
					for($i = 0; $i < count($mobiles); $i++){
						$this->user_model->insert(array(
							'user_id'=>$user_id,
							'number'=>$mobiles[$i],
							'created_at'=>date('d-m-Y H:i:s'),
							'updated_at'=>date('d-m-Y H:i:s'),
						),'phone_numbers');
					}
					if ($this->mail_send($this->input->post('email_address'),'http://transinfo.ru?verify='.$data['user']['email_verified'])) {
						$this->session->set_flashdata('success', $this->data['system_title']['thanks']);
						$this->session->set_userdata('form_valid',null);
						redirect(base_url($this->session->userdata('lang')));
					}
				}
			}
		}
		redirect(base_url($this->session->userdata('lang').'/register/'.$this->types[$type]));

	}
	/**
	 * Insert method
	 * @important this is for administrator
	 * @remember must move this in to the admin action Class
	 * @param string $table name
	 * @permissions work only for database languages table
	 * */
	public function insert($table){
		if($this->validate(array(
			['short_name','Short Name','trim|required|min_length[2]|max_length[5]'],
			['original_name','Original Mame','trim|required|min_length[5]|max_length[50]'],
			['name','Original Mame','trim|required|min_length[5]|max_length[50]'],
		))) {
			$this->user_model->set_table($table);
			$data = $this->input->post();

			if($_FILES){$data['file'] = $this->upload('flag','img/uploads/');}

			$data['created_at'] = date('d-m-Y H:i:s');
			$data['updated_at'] = date('d-m-Y H:i:s');
			echo (!is_null($this->user_model->insert($data)))
				? $this->json($data, 'Successfully inserted')
				: $this->json(null, 'Cane not insert to the table', 'error');
		}else{
			echo $this->json(null, 'No data to save', 'error');
		}
	}
	/**
	 * Set active method
	 * @important this is for administrator
	 * @remember must move this in to the admin action Class
	 * @param string $table
	 * @param integer $id
	 * $param boolean/integer true/false or 1/0 $active
	 * */
	public function set_active($table,$id,$active){
		if(!empty($table) && !empty($id) && ($active == 0 || $active ==1)){
			$row = ($table == 'users') ? 'admin_verified' : 'active';
			$this->user_model->set_table($table);
			$data = [$row=>$active,'updated_at'=>date('d-m-Y H:i:s')];
			echo (!is_null($this->user_model->update($id,$data)))
				? $this->json(['active'=>$active,'updated'=>$data['updated_at']],'Data successfully updated')
				: $this->json(['active'=>$active,'updated'=>$data['updated_at']],'Can not activate data','error');
		}
	}
	/**
	 * @param string $table
     * @param integer $id
	 * */
	public function update($table,$id){
        $this->user_model->set_table($table);
        $data = $this->input->post();

        if($_FILES){$data['file'] = $this->upload('flag','img/uploads/');}

        $data['updated_at'] = date('d-m-Y H:i:s');
        echo (!is_null($this->user_model->update($id,$data)))
            ? $this->json($data, 'Successfully inserted')
            : $this->json(null, 'Cane not insert to the table', 'error');
	}
	/**
	 * Private registered method
	 * */
	public function registered(){
		$this->load->helper('cookie');
		if(get_cookie('user_id')){
			$data = ['email_verified'=>$this->token()];
			if($this->mail_send(get_cookie('user_email'),'http://transport.am?verify='.$data['email_verified'])){
				$this->user_model->update(get_cookie('user_id'),$data,'users');
				$this->session->set_flashdata('success', 'Your verification url resented to your email.');
				redirect(base_url($this->session->userdata('lang')));
			}else{
				$this->session->set_flashdata('error', 'Can not send email user is not defined.');
				redirect(base_url($this->session->userdata('lang')));
			}
		}else{
			$this->session->set_flashdata('error', 'Can not send email user is not defined.');
			redirect(base_url($this->session->userdata('lang')));
		}
	}
	/**
	 * Private user insert data collect
	 * @param integer user type
	 * @return array
	 * */
	public function insert_collect($type){
		return [
			'user' => [
				'email_verified' => $this->token(),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')) . '_trans',
				'email' => $this->input->post('email'),
				'type_id' => $type,
				'ip_address' => $_SERVER['REMOTE_ADDR'],
				'created_at' => date('d-m-Y H:i:s'),
				'updated_at' => date('d-m-Y H:i:s'),
			],
			'user_info' => [

				'legal_country' => $this->input->post('legal_country'),
				'legal_city' => $this->input->post('legal_city'),
				'legal_region' => $this->input->post('legal_region'),

				'work_country' => $this->input->post('work_country'),
				'work_city' => $this->input->post('work_city'),
				'work_region' => $this->input->post('work_region'),

				'contact_person_surname' => $this->input->post('contact_person_surname'),
				'contact_person_name' => $this->input->post('contact_person_name'),
				'contact_person_fatherland' => $this->input->post('contact_person_fatherland'),

				'director_person_surname' => $this->input->post('director_person_surname'),
				'director_person_name' => $this->input->post('director_person_name'),
				'director_person_fatherland' => $this->input->post('director_person_fatherland'),

				'bank_details' => $this->input->post('bank_details'),
				'inn' => $this->input->post('inn'),
				'website' => $this->input->post('website'),

				'fax' => $this->input->post('fax'),
				'icq' => $this->input->post('icq'),
				'skype' => $this->input->post('skype'),

				'created_at' => date('d-m-Y H:i:s'),
				'updated_at' => date('d-m-Y H:i:s'),
			],

			'phone_numbers' => [
				array(
					'number' => $this->input->post('phone_number'),
					'type' => 'country',
					'created_at' => date('d-m-Y H:i:s'),
					'updated_at' => date('d-m-Y H:i:s'),
				),
			],
		];
	}
}
