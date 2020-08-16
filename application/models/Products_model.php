<?php

class Products_model extends CI_Model{
    
    private $table_name = 'product';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null){
        if($id === null){
            $query = $this->db->query("select product.id, product.name, product.price, category.name as 'category', store.name as 'store' from product inner join category on product.category_id = category.id inner join store on store.id = product.store_id");
            return $query->result();
        }

        $query = $this->db->get_where($this->table_name, ['id'=>$id]);
        return $query->first_row();
    }

    public function view($id){
        $page = $this->pages_model->get($id);
        var_dump($page);
    }

    public function save(){
        $this->load->helper('url');

        $data = [
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'store_id' => $this->input->post('store_id'),
            'category_id' => $this->input->post('category_id') 
        ];

        return $this->db->insert($this->table_name, $data);
        
    }
 

    public function update($id) {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', true);

        $data = [
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'store_id' => $this->input->post('store_id'),
            'category_id' => $this->input->post('category_id') 
        ];

        $this->db->where('id', $id);

        return $this->db->update($this->table_name, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table_name, ['id'=>$id]);
    }


}