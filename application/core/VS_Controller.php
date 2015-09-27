<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class VS_Controller extends CI_Controller{
    /**
     * @var array $data
     * @functionality to have all default data inserted in this array
     * */
    protected $data = [];
    /**
     * @var array $js_data
     * @functionality to have all js files names inserted in this array
     * */
    protected $js_data = [];
    /**
     * @var array $css_data
     * @functionality to have all css files names inserted in this array
     * */
    protected $css_data = [];
    /**
     * Constructor method
     * @functionality automatically will call init method
     * */
    public function __construct(){
        parent::__construct();
        $this->init();
    }
    /**
     * Validation method
     * @param array $data
     * @param array $rules
     * @return boolean
     * */
    protected function validation($data,$rules){
        $this->load->library('form_validation');
        $i = 0;
        foreach($data as $key => $value){$i++;
            $this->form_validation->set_rules($key,$value,$rules[$key]);
            if($i > 3 && !$this->form_validation->run()){
                return false;
            }
        }

        return $this->form_validation->run();
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
     * Upload method
     * @param string $input(input field name)
     * @param string $save_path
     * @return string uploaded filename
     * */
    protected function upload($input,$save_path){
        $config['upload_path']          = './assets/'.$save_path;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($input)) {
            return null;
        }else{
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
        }

    }
    /**
     * Validate method
     * @param array $fields
     * @important $fields parameter must have exactly default structure
     * @return boolean
     * */
    protected function validate($fields = array(array('field_name','Show name', 'pattern'))){
        $this->load->library('form_validation');
        for($i = 0; $i < count($fields); $i++){
            $field = $fields[$i];
            $this->form_validation->set_rules($field[0],$field[1],$field[2]);

        }
        return $this->form_validation->run();
    }
    /**
     * Token method
     * @param integer $length
     * @return string
     * */
    protected function token($length = 24) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return md5($randomString.round(microtime(true) * 1000));
    }
    /**
     * Send mail method
     * @param string $to
     * @param string $url
     * @return boolean
     * */

    protected function mail_send($to,$url){
        return true;
        $this->load->library('email');

        $this->email->from('transport@admin.am', 'Administrator');
        $this->email->to($to);
        $this->email->subject('Account verification');
        $this->email->message('Welcome to transport.am.Please follow to this '.$url.' link to activate your account');
        if($this->email->send()){
            return true;
        }
        return false;
    }
    /**
     * Init method
     * @functionality to collect all default need data
     * */
    protected function init(){
        $lang = ($this->session->userdata('lang')) ? $this->session->userdata('lang') : "ru";
        $this->session->set_userdata('lang',$lang);

        $this->load->model('rating_model');

        $this->data['get_rates'] = function($id){
            return $this->rating_model->get_where([
                'to_id'=>$id
            ]);
        };
        $this->data['types'] = $this->rating_model->get_rate_types();
        $this->data['get_rate_type'] = function($id,$type){
            return $this->rating_model->get_where([
                'to_id'=>$id,
                'title'=>$type
            ]);
        };

        $this->load->model('user_model');
        $this->data['translations'] = $this->user_model->get_where([
            'lang_id'=>$this->config->item('ids_lang')[$lang]
        ],'title,content','translations','array');
        $this->user_model->set_table('country_'.$lang);
        $this->data['countries']  =   $this->user_model->get();

        $this->user_model->set_table('users');

        $this->lang->load('message',$this->config->item('lang_uri_abbr')[$lang]);
        $this->data['menu_title']   =   $this->lang->line('menu');

        for($i = 0; $i < count($this->data['translations']); $i++){
            $this->data['system_title'][$this->data['translations'][$i]->title] = $this->data['translations'][$i]->content;
        }

        $this->data['fields']  = $this->session->userdata('form_valid');
        $this->data['tractor'] = $this->lang->line('tractor');
        $this->data['payment_types'] = $this->lang->line('payment_types');
        $this->data['body_types'] = $this->lang->line('body_types');
        $this->data['months']  =   $this->lang->line('months');
        $this->data['user_info'] = $this->session->userdata('user_info');
        $this->data['user'] = $this->session->userdata('user');
        $this->data['lang'] = $this->session->userdata('lang');
        $this->data['api_lang']   =   $this->config->item('api_lang')[$this->data['lang']];
        $this->data['auth'] = $this->session->userdata('is_logged_in');
        if (!strpos($this->uri->uri_string(),'action'))
            $this->session->set_userdata('curr_url',$this->uri->uri_string());
    }
}