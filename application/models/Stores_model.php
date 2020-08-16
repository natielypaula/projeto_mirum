<?php

class Stores_model extends CI_Model{
    
    private $table_name = 'store';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null){
        if($id === null){
            $query = $this->db->get($this->table_name);
            return $query->result();
        }

        $query = $this->db->get_where($this->table_name, ['id'=>$id]);
        return $query->first_row();
    }

}