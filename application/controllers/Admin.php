<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{
    private $data = [];
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct();
        $this->default_actions();
    }
    /**
     * JSON method
     * @param array $data
     * @param string $message(default '')
     * @param string $status(default 'success')
     * @return json object
     * */
    protected function json($data,$message = '',$status = 'success'){
        return json_encode(array(
            'message'   =>$message,
            'status'    =>$status,
            'response'  =>$data
        ));
    }
    /**
     * View method
     * @param string $page(default index)
     * */
    public function view($page = 'dashboard'){

        $page = ($page == 'index') ? 'dashboard' : $page;
        if(!$this->session->userdata('is_admin'))
            $page = 'login';

        if(!file_exists(VIEWPATH.'admin/'.$page.'.php')){
            show_404();
        }
        $this->data['title'] = ucfirst($page);
        $this->data['page'] = $page;
        $this->load->view('admin/templates/content',$this->data);
    }
    /**
     * Login method
     * @functionality will check administrator to make him/her logged
     * */
    public function login(){
        if($this->input->post()) {
            $user = $this->admin_model->get_where([
                'username' => $this->input->post('user'),
                'password' => md5($this->input->post('pass')).'_trans',
                'role'     => 'admin',
                'type_id'  => 0,
            ]);
            if(is_null($user)){
                echo $this->json($user, 'Invalid username or password', 'error');
            }else{
                $this->session->set_userdata(['is_admin'=>true,'admin'=>$user[0]]);
                echo $this->json($user[0], 'User logged in','success','dashboard');
            }
        }else{
            echo $this->json(null, 'Page not found', 'error');
        }
    }
    /**
     * Logout method
     * @functionality will make administrator logged out and set admin session to null
     * */
    public function logout(){
        $this->session->set_userdata([
            'is_admin'=>false,
            'admin'=>null,
        ]);
        redirect(base_url().'admin');
    }
    /**
     * Ajax method
     * @functionality all ajax calls will go throw of this method
     * @param string $teplate
     * @param boolean/string $sub (subdirectory default false)
     * @param integer $id (default 0)
     * */
    public function ajax($template,$sub = false,$id = 0){
        $template = ($sub) ? $sub.'/'.$template : $template;
        $this->data['id'] = $id;
        $this->load->view('admin/ajax_admin/'.$template,$this->data);
    }
    /**
     * Default actions method
     * @functionality will coll all needed libraries and collect $this->data array
     * */
    private function default_actions(){
        $this->load->library('session');
        $this->load->model('admin_model');
        $this->data['admin'] = $this->session->userdata('admin');
        $this->data['admin_get'] = function($table){
            $this->admin_model->set_table($table);
            return $this->admin_model->get();
        };
        $this->data['admin_get_where'] = function($table,$where,$rows = '*'){
            $this->admin_model->set_table($table);
            return $this->admin_model->get_where($where,$rows);
        };
        $this->data['admin_join'] = function($table,$tables){
            $this->admin_model->set_table($table);
            return $this->admin_model->join($tables);
        };
    }
}