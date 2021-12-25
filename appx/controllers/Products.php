<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


	// get all product
    public function index()
    {
        $model = new ProductModel();
        $data = $model->findAll();
        return $this->respond($data);
    }
	
}

 