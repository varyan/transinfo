
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends VS_Model{
    /**
     * Constructor method
     * @permissions can passe table name for parent Class
     * */
    public function __construct(){
        parent::__construct('users');
        $this->set_validation_prototype([
            'username'  =>'trim|required|max_length[50]|min_length[6]|differs[password]',
            'password'  =>'trim|required|max_length[50]|min_length[6]|matches[confirm]',
            'confirm'   =>'matches[password]',
            'email'     =>'trim|required|max_length[50]|valid_email'
        ]);
    }
    /**
     * User_model login function
     * @param array $data
     * @return stdClass/boolean
     * */
    public function login($data){
        $this->db->where('email',$data['email']);
        $this->db->or_where('username',$data['email']);
        $this->db->where('password',$data['password'].'_trans');

        $query=$this->db->get($this->table);
        if($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }
    /**
     * Function to check user email exists in database or not
     * @param $email string
     * @return boolean
     * */
    public function pass_rec_check_user($email){
        $this->db->where('email',$email);
        $this->db->or_where('username',$email);
        $this->db->select('id');
        $this->db->from($this->table);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        }
        return false;
    }
    /**
     * Rate user item method
     * @param integer $to_id
     * @param string $rate_type
     * @param float $value
     * @return boolean
     * */
    public function rate_user_item($to_id,$rate_type,$value){
        $this->db->select('value');
        $this->db->from('ratings');
        $this->db->where([
            'to_id'=>$to_id,
            'from_id'=>$this->session->userdata('user')->id,
            'title'=>$rate_type,
        ]);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $this->db->where([
                'to_id'=>$to_id,
                'from_id'=>$this->session->userdata('user')->id,
                'title'=>$rate_type,
            ]);
            $update = $this->db->update('ratings',[
                'value'=>$value,
                'updated_at'=>date('d-m-Y H:i:s'),
            ]);
            return ($update) ? true : false;
        }else{
            $insert = $this->insert([
                'to_id'=>$to_id,
                'from_id'=>$this->session->userdata('user')->id,
                'title'=>$rate_type,
                'value'=>$value,
                'created_at'=>date('d-m-Y H:i:s'),
                'updated_at'=>date('d-m-Y H:i:s'),
            ],'ratings');
            return ($insert) ? true : false;
        }
    }
    /**
     * Get by id method
     * @param int $id
     * @return stdClass object
     * */
    public function get_by_id($id){
        $this->db->where('user_id',$id);
        $this->db->select('contact_person_name,contact_person_surname,user_id as uid');
        $this->db->from('user_info');
        $query = $this->db->get();
        return $query->row();
    }
    /**
     * Get country method
     * @param string $lang
     * @return stdClass object
     * */
    public function get_country($lang){
        $this->db->select('id, country_name_'.$lang.' as name');
        $this->db->from('country_');
        $query = $this->db->get();
        return $query->result();
    }
    /**
     * Get region method
     * @param string $lang
     * @param string $country
     * @return stdClass object
     * */
    public function get_region($lang,$country){
        $this->db->select('id as reg_id, region_name_'.$lang.' as name');
        $this->db->from('region_');
        $this->db->where('id_country',$country);
        $query = $this->db->get();
        return $query->result();
    }
    /**
     * Get city method
     * @param string $lang
     * @param string $region
     * @return stdClass object
     * */
    public function get_city($lang,$region){
        $this->db->select('id as city_id, city_name_'.$lang.' as name');
        $this->db->from('city_');
        $this->db->where('id_region',$region);
        $query = $this->db->get();
        return $query->result();
    }
}