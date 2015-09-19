<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_action extends VS_Controller {
    /**
     * Constructor method
     * */
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
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
            $this->admin_model->set_table($table);
            $data = $this->input->post();

            if($_FILES){$data['file'] = $this->upload('flag','img/uploads/');}

            $data['created_at'] = date('d-m-Y H:i:s');
            $data['updated_at'] = date('d-m-Y H:i:s');
            echo (!is_null($this->admin_model->insert($data)))
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
     * @param integer $active
     * $param boolean/integer true/false or 1/0 $active
     * */
    public function set_active($table,$id,$active){
        if(!empty($table) && !empty($id) && ($active == 0 || $active ==1)){
            $row = ($table == 'users') ? 'admin_verified' : 'active';
            $this->admin_model->set_table($table);
            $data = [$row=>$active,'updated_at'=>date('d-m-Y H:i:s')];
            echo (!is_null($this->admin_model->update($id,$data)))
                ? $this->json(['active'=>$active,'updated'=>$data['updated_at']],'Data successfully updated')
                : $this->json(['active'=>$active,'updated'=>$data['updated_at']],'Can not activate data','error');
        }
    }
}