<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$product = $this->Base_m->all_product();
        $data = [
            'title' => 'Product',
			'products'=> $product
        ];

		$this->load->view('component/admin/header', $data);
		$this->load->view('component/admin/sidebar');
		$this->load->view('pages/admin/product/index', $data);
		$this->load->view('component/admin/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');

		if ($this->form_validation->run() == FALSE){
		$category = $this->Base_m->all("category");

        $data = [
            'title' => 'Add Product',
			'categories' => $category
        ];

		// var_dump($data['categories']); die();

		$this->load->view('component/admin/header', $data);
		$this->load->view('component/admin/sidebar');
		$this->load->view('pages/admin/product/add', $data);
		$this->load->view('component/admin/footer');

	}else{
		// $this->_store();
		echo "oke";
	}
	}
}
