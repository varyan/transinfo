<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_Action extends VS_Controller{

    public function __construct(){
        parent::__construct();
    }
    /**
     * Rate method
     * @important this method work with ajax call
     * @functionality will save data in database
     * */
    public function rate(){
        $to_id = $this->input->post('to_id');
        $rate_type	= $this->input->post('rate_type');
        $value = $this->input->post('value');

        echo ($this->user_model->rate_user_item($to_id,$rate_type,$value))
            ? $this->json($this->input->post(),'Successfully saved','success')
            : $this->json(null,'Cane note rate','error');
    }
    /**
     * Login method
     * @functionality will check username and password to make user logged
     * */
    public function login(){

        if($this->data['auth']){redirect(base_url($this->data['lang']));}

        $data = [
            'email'     =>$this->input->post('email'),
            'password'  =>md5($this->input->post('password'))
        ];
        $user = $this->user_model->login($data)[0];

        if(!$user){
            $this->session->set_flashdata('error','Invalid email address or password');
            redirect(base_url($this->data['lang']));
        }else{
            if($user->email_verified != 1){
                $this->load->helper('cookie');
                set_cookie('user_id',$user->id,'300');
                set_cookie('user_email',$user->email,'300');
                $this->session->set_flashdata('error','Sorry your email address is not verified.
                                                       Please go to your inbox messages and follow to instruction or click
                                                       <a href="'.$this->data['lang'].'/action/register/registered">Send again</a>');
                redirect(base_url($this->data['lang']));
            }else {
                $user_info = $this->user_model->get_where([
                    'user_id'=>$user->id
                ],'*','user_info')[0];

                $this->session->set_userdata([
                    'user_info' => $user_info,
                    'user' => $user,
                    'is_logged_in' => true
                ]);
                $this->user_model->set_table('users');
                redirect(base_url($this->data['lang'].'/user/profile'));
            }
        }
    }
    /**
     * Logout method
     * @functionality will logout user from system and destroying user data in session
     * */
    public function logout(){
        $this->session->set_userdata([
            'is_logged_in'=>false,
            'user'=>null
        ]);

        redirect(base_url($this->data['lang']));
    }
    /**
     * Update method
     * @functionality is to update user profile items
     * */
    public function update(){
        $table = $this->input->post('row_for');
        $id = ($table == 'user') ? 'id' : 'user_id';
        $model = $table.'_model';
        if(isset($_POST['item_id'])){
            $where['id'] = $this->input->post('item_id');
        }
        $where[$id] = $this->data['user']->id;

        $this->load->model($model);
        $update = $this->$model->update_where($where,[
            $this->input->post('row')=>$this->input->post('value'),
            'updated_at'=>date('d-m-Y H:i:s')
        ]);
        if ($update){
            $this->$model->update_where([
                'id'=>$this->data['user']->id
            ],[
                'updated_at'=>date('d-m-Y H:i:s')
            ],'users');
            if($table !== 'user')
                $this->$model->set_table($table);
            if($this->session->userdata($table)) {
                $this->session->set_userdata($table, $this->$model->get_where([
                    $id => $this->data['user']->id
                ], '*')[0]);
            }
            echo $this->json($this->input->post(),'Successfully updated');
        }else{
            echo $this->json(null,'Can not update user value','error');
        }
    }
    /**
     * Recovery method
     * @functionality will resend email verification to special user
     * */
    public function recovery(){
        if(isset($_POST['pass_rec_email'])){
            $email = $this->input->post('pass_rec_email');
            $answer = $this->user_model->pass_rec_check_user($email);

            if($answer){
                // Must add some action to change token and resent url to user email
                $this->session->set_flashdata('success','Your password sent to your email address');
            }
            else $this->session->set_flashdata('error','Error:invalid user email');
            redirect('recovery');
        }
    }
    /**
     *
     * */
    public function add_cargo(){
        $this->load->model('cargo_model');
        $loading = []; $permission = []; $data = [];

        foreach($this->input->post() as $key => $value){
            if(preg_match('/^loading/',$key)){
                array_push($loading,$value);
            }elseif(preg_match('/^permission/',$key)){
                array_push($permission,$value);
            }else{
                $data[$key] = $value;
            }
        }
        $data['loading']    = json_encode($loading);
        $data['user_id']    = $this->data['user']->id;
        $data['permission'] = json_encode($permission);
        $data['created_at'] = date('d-m-Y H:i:s');
        $data['updated_at'] = date('d-m-Y H:i:s');


        $insert = $this->cargo_model->insert($data);

        if($insert){
            $this->session->set_flashdata('success', 'Data successfully saved in database');
        }else{
            $this->session->set_flashdata('error', 'Unable to save data in database');
        }
        redirect(base_url($this->session->userdata('lang').'/user/profile'));
    }

    public function ready_for(){
        $data = [
            'deal_sender_id'    =>$this->data['user']->id,
            'deal_for_id'       =>$this->input->post('user_id'),
            'deal_item_id'      =>$this->input->post('cargo_id'),
            'deal_sum'          =>$this->input->post('pay_sum'),
            'deal_created_at'   =>date('d-m-Y H:i:s'),
            'deal_updated_at'   =>date('d-m-Y H:i:s'),
        ];
        $this->load->model('deal_model');

        $select = $this->deal_model->get_where([
            'deal_sender_id'=>$data['deal_sender_id'],
            'deal_item_id'  =>$data['deal_item_id'],
        ]);

        if(count($select) > 0){
            $result = $this->deal_model->update($data['deal_item_id'],[
                'deal_sum'          =>$data['deal_sum'],
                'deal_updated_at'   =>date('d-m-Y H:i:s'),
            ]);
        }else{
            $result = $this->deal_model->insert($data);
        }

        echo ($result) ? $this->json($data) : $this->json([],'error','Can not insert data');
    }

}