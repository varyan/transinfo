<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VS_Model extends CI_Model{
    /**
     * @var string $table
     * */
    protected $table;
    /**
     * Constructor
     * @param boolean/string $table (default false)
     * */
    public function __construct($table = false){
        parent::__construct();
        if($table) $this->table = $table;
        $this->load->database();
        $this->load->library('form_validation');
    }
    /**
     * Get method
     * @param boolean/integer $id (default false)
     * @param boolean/string $table (default false)
     * @return null/stdClass object
     * */
    public function get($id = false, $table = false){
        if($table) $this->table = $table;
        if($id)
            $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return ($query->num_rows() > 0) ? $query->result() : null;
    }
    /**
     * Get where method to get data witch match with where parameters
     * @param array $where
     * @param string $rows (default '*')
     * @param boolean/string $table(default false)
     * @return null/srdClass object
     * */
    public function get_where($where,$rows = '*',$table = false){
        if($table) $this->table = $table;
        $this->db->where($where);
        $this->db->select($rows);
        $this->db->from($this->table);
        $query = $this->db->get();
        if($query->num_rows() > 0)
            return $query->result();
        return null;
    }
    /**
     * Insert method
     * @param array $data
     * @param boolean/string $table (default false)
     * @return boolean/null
     * */
    public function insert($data, $table = false){
        if($table) $this->table = $table;
        $query = $this->db->insert($this->table,$data);
        return ($query) ? $this->db->insert_id() : null;
    }
    /**
     * Update method
     * @param integer $id
     * @param array $data
     * @param boolean/string $table (default false)
     * @return boolean/null
     * */
    public function update($id,$data, $table = false){
        if($table) $this->table = $table;
        $this->db->where('id',$id);
        $this->db->set($data);
        $query = $this->db->update($this->table);
        return ($query) ? true : null;
    }
    /**
     * Update method
     * @param array $where
     * @param array $data
     * @param boolean/string $table (default false)
     * @return boolean/null
     * */
    public function update_where($where,$data, $table = false){
        if($table) $this->table = $table;
        $this->db->where($where);
        $this->db->set($data);
        $query = $this->db->update($this->table);
        return ($query) ? true : null;
    }
    /**
     * Delete method
     * @param integer $id
     * @param boolean/string $table (default false)
     * @return boolean/null
     * */
    public function delete($id, $table = false){
        if($table) $this->table = $table;
        $this->db->where('id',$id);
        $query = $this->db->delete($this->table);
        return ($query) ? true : null;
    }
    /**
     * Join method to get multiple tables info in join
     * @param array $tables
     * @param string $rows
     * @return null/stdClass object
     * */
    public function join($tables,$rows = '*'){
        $this->db->select($rows);
        $this->db->from($this->table);

        foreach($tables as $key=>$value){
            if(!isset($value[1]))
                $value[1] = 'left';
            $this->db->join($key,$value[0],$value[1]);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0)
            return $query->result();
        return null;
    }
    /**
     * Join where method
     * @param array $tables (structure array(array('table_name','conditions','side')))
     * @param array $where (default null)
     * @param string $rows (default *)
     * @param string $group (default *)
     * @return null/stdClass
     * */
    public function join_where($tables,$where = null,$rows = '*',$group=null){
        $this->db->select($rows);
        $this->db->from($this->table);
        for($i = 0; $i < count($tables); $i++) {
            $table = $tables[$i];
            $side = (isset($table[2])) ? $table[2] : 'left';
            $this->db->join($table[0],$table[1],$side);
        }
        if(!is_null($where))
            $this->db->where($where);
        if(!is_null($group)){
            $this->db->group_by($group);
        }
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }
    /**
     * Get table columns names
     * @return null/array
     * */
    public function columns(){
        $query = $this->db->list_fields($this->table);
        if(count($query)){
            return $query;
        }
        return null;
    }
    /**
     * Get tree method
     * @return array (ready tree array)
     * */
    public function get_tree(){
        $this->db->order_by('id','ASC');
        $query = $this->db->get($this->table);

        $array = array();
        foreach($query->result() as $item){
            $array[$item->parent_id][$item->id] = $item;
        }
        return $array;
    }
    /**
     * Set table method
     * @param string $name
     * */
    public function set_table($name){
        $this->table = $name;
    }
    /**
     * Get table method
     * @return string table name
     * */
    public function get_table(){
        return $this->table;
    }
}