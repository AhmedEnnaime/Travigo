<?php

class Admins extends Controller
{

    public function __construct()
    {
        if (!isset($_SESSION['id'])) {
            redirect('users/login');
        }

        $this->productModel = $this->model('Product');
    }

    public function dashboard()
    {
        $products = $this->productModel->getProducts();
        $data = [
            'products' => $products,
        ];
        $this->view('dashboard', $data);
    }
}
