<?php

class Products extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('products_model'); 
    }
    
    public function index(){
        $results = $this->products_model->get();

        $this->load->view('template/header');
        $this->load->view('products/index', ['products'=> $results]);
        $this->load->view('template/footer');
    }
  
    public function new(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('price', 'Preço', 'required');
        $this->form_validation->set_rules('store_id', 'Armazem', 'required');
        $this->form_validation->set_rules('category_id', 'Categoria', 'required');
 
        $this->load->model('stores_model'); 
        $stores = $this->stores_model->get();

        $this->load->model('categories_model'); 
        $categories = $this->categories_model->get();

        if($this->form_validation->run() === false) {
            $this->load->view('template/header');
            $this->load->view('products/new',  ['stores'=>$stores, 'categories'=>$categories]);
            $this->load->view('template/footer');
        } else {
            $data['back'] = '/products';
            $this->products_model->save();
            $this->load->view('template/success', $data);
        }
    }

    public function save(){
        $data['back'] = '/products';
        $this->products_model->save();
        $this->load->view('template/success', $data);
    }

    public function edit($id = null) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('price', 'Preço', 'required');
        $this->form_validation->set_rules('store_id', 'Armazem', 'required');
        $this->form_validation->set_rules('category_id', 'Categoria', 'required');

        if ($this->form_validation->run() === false) {
            $products = $this->products_model->get($id);
            $this->load->view('template/header');
            $this->load->view('products/edit', ['products'=>$products]);
            $this->load->view('template/footer');
        }
    }

    public function update($id) {
            $data['back'] = '/products/';
            $this->products_model->update($id);
            $this->load->view('template/success', $data);
    }

    public function delete($id) {
        $data['back'] = '/products';
        $this->products_model->delete($id);
        $this->load->view('template/success', $data);
    }

}